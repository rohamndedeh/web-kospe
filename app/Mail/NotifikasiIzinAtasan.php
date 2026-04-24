<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifikasiIzinAtasan extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $dataIzin;

    public function __construct($dataIzin)
    {
        $this->dataIzin = $dataIzin;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Permohonan Cuti Baru: ' . $this->dataIzin['nama_staf'],
        );
    }

    public function content(): Content
    {

        return new Content(
            view: 'emails.notifikasi-izin', // Buat file blade ini
            with: [
                'izin' => $this->dataIzin,
                'link_approval' => url('/izin-approval/' . $this->dataIzin['approval_token']),
                'link_pengurus' => url('/izin-pengurus/' . $this->dataIzin['approval_token']),
            ],
        );
    }
}
