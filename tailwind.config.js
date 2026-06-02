import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.php",
        "./app/Livewire/**/*.php",
        "./storage/framework/views/*.php",
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                brand: {
                    red: '#DD2127',
                    orange: '#E56325',
                    yellow: '#F9A61B',
                    dark: '#1a1a1a',
                    darker: '#111111',
                    card: '#242424',
                    border: '#333333',
                    blue: '#1E3A8A',
                    lightblue: '#DBEAFE',
                    darkred: '#991B1B'
                }
            },
            fontFamily: {
                sans: ['Poppins', 'sans-serif'],
            }
        },
    },

    plugins: [forms],
};
