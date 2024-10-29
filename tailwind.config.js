/** @type {import('tailwindcss').Config} */
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/**/*.{html,js,php}",
        "./views/**/*.php",
        "./controllers/**/*.php",
        "./models/**/*.php",
        "./public/**/*.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                raleway: ['Raleway', 'sans-serif'],
            },
            colors: {
                'navy-blue': '#0A1733',
                'light-navy': '#0A173354',
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
