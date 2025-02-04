import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/js/**/*.js",
        "./node_modules/versoly-ui/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree"],
                inter: ["Inter", "sans-serif"],
            },
        },
    },
    plugins: [
        require("preline/plugin"),
        require("tw-elements/plugin.cjs"),
        require("@tailwindcss/typography"),
    ],
    darkMode: "class",
};
