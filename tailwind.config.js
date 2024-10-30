import defaultTheme from "tailwindcss/defaultTheme";

const textshadow = require('tailwindcss-textshadow');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                montserrat: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                biru: "#0059A5",
                putihsusu: "#FCFCD4",
                abuabu: "#E6F4F1",
                abuabu2: "#D9D9D9",
            },
        },
    },
    plugins: [
        textshadow,
    ],
};
