/** @type {import('tailwindcss').Config} */
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/**/*.{html,js}",
        "./public/**/*.html",
    ],
    theme: {
        extend: {
            background: {
                'hero-background': "url(#)",
            },
            fontFamily: {
                raleway: ['Helvetica', 'sans-serif'],
            },
            colors: {
                'navy-blue': '#0A1733',
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
