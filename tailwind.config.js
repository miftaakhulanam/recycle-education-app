/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: "6rem",
        },
        extend: {
            animation: {
                bounce: "bounce 1s",
            },
            colors: {
                main: "#E31E24",
                footer: "#13151B",
            },
            fontFamily: {
                poppins: ["Poppins"],
            },
            backgroundImage: {
                "hero-pattern": "url('img/bg.jpg')",
                "hero-pattern2": "url('/img/bg2.jpg')",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
