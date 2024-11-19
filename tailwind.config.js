/** @type {import('tailwindcss').Config} */
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/**/*.{html,js}",
        "./public/**/*.html",
    ],
    theme: {
        extend: {
            fontFamily: {
                raleway: ['raleway', 'sans-serif'],
                alexbrush: ['Alex Brush'],
            },
            colors: {
                'navy-blue': '#0A1733',
                'bright-navy': '#1b3e7a',
                'light-navy': '#132955',
                'yellow': '#F1E600',
                'light-yellow': '#F1E600B9',
                'white': '#FFFFFF',
                'light-gray': '#F5F5F5',
                'dark-gray': '#333333',
                'black': '#000000',
            },
        }
    },
    plugins: [],
};
