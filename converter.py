import tkinter as tk
from tkinter import filedialog, messagebox
import whisper
import subprocess
import os

video_path = ""

def pilih_video():
    global video_path
    video_path = filedialog.askopenfilename(
        filetypes=[("Video Files", "*.mp4 *.mkv *.avi *.mov")]
    )
    label_video.config(text=video_path)


def extract_audio(video, wav_file):
    subprocess.run([
        "ffmpeg",
        "-y",
        "-i", video,
        "-vn",
        "-acodec", "pcm_s16le",
        "-ar", "16000",
        "-ac", "1",
        wav_file
    ])


def convert_mp3(video, mp3_file):
    subprocess.run([
        "ffmpeg",
        "-y",
        "-i", video,
        mp3_file
    ])


def format_time(t):
    h = int(t // 3600)
    m = int((t % 3600) // 60)
    s = int(t % 60)
    ms = int((t - int(t)) * 1000)
    return f"{h:02}:{m:02}:{s:02},{ms:03}"


def proses_video():
    if not video_path:
        messagebox.showerror("Error", "Pilih video dulu")
        return

    model_name = model_var.get()

    try:

        status_label.config(text="Loading Whisper model...")
        root.update()

        model = whisper.load_model(model_name)

        filename = os.path.basename(video_path)
        name = os.path.splitext(filename)[0]

        wav_file = name + ".wav"

        status_label.config(text="Extracting audio...")
        root.update()

        extract_audio(video_path, wav_file)

        if export_mp3.get():
            status_label.config(text="Exporting MP3...")
            root.update()
            convert_mp3(video_path, name + ".mp3")

        status_label.config(text="Transcribing audio...")
        root.update()

        result = model.transcribe(wav_file)

        if export_txt.get():
            with open(f"transkrip_{name}.txt", "w", encoding="utf-8") as f:
                f.write(result["text"])

        if export_srt.get():
            with open(f"transkrip_{name}.srt", "w", encoding="utf-8") as f:
                for i, seg in enumerate(result["segments"], start=1):

                    start = format_time(seg["start"])
                    end = format_time(seg["end"])
                    text = seg["text"].strip()

                    f.write(f"{i}\n")
                    f.write(f"{start} --> {end}\n")
                    f.write(f"{text}\n\n")

        status_label.config(text="Selesai!")

        messagebox.showinfo("Sukses", "Transkrip berhasil dibuat!")

    except Exception as e:
        messagebox.showerror("Error", str(e))


root = tk.Tk()
root.title("Video Transcriber (FFmpeg)")
root.geometry("500x420")


btn_video = tk.Button(root, text="Pilih Video", command=pilih_video)
btn_video.pack(pady=10)

label_video = tk.Label(root, text="Belum ada video dipilih")
label_video.pack()


tk.Label(root, text="Pilih Model Whisper").pack(pady=5)

model_var = tk.StringVar(value="base")

model_menu = tk.OptionMenu(root, model_var, "tiny", "base", "small", "medium", "large")
model_menu.pack()


export_mp3 = tk.BooleanVar()
export_txt = tk.BooleanVar(value=True)
export_srt = tk.BooleanVar(value=True)

tk.Checkbutton(root, text="Export MP3", variable=export_mp3).pack()
tk.Checkbutton(root, text="Export TXT Transkrip", variable=export_txt).pack()
tk.Checkbutton(root, text="Export Subtitle SRT", variable=export_srt).pack()


btn_proses = tk.Button(root, text="Mulai Transkrip", command=proses_video)
btn_proses.pack(pady=20)

status_label = tk.Label(root, text="")
status_label.pack()

root.mainloop()