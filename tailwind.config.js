import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                main: {
                    100: "#18181b",
                    200: 'var(--color-main)',
                    300: 'var(--color-semidark)',
                },
                greenTrue: {
                    100: 'var(--color-green)',
                },
                whiteTrue: {
                    100: 'var(--color-white)',
                },
                semiwhite: {
                    100: 'var(--color-semiwhite)',
                },

            },

            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
