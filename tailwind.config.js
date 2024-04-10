/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'sans': ['Raleway'],
            'serif': ['Raleway']
        },
        colors: {
            current: 'currentColor',
            transparent: 'transparent',
            tuatara: '#353535',
            shark: '#282829',
            mercury: '#E2E4E9',
            'mercury-dark': '#c7cbd5',
            'mercury-darker': '#a0a7b7',
            aqua: '#006A8B',
            'aqua-dark': '#00526b',
            'aqua-light': '#0094c2',
            chicago: '#555555',
            red: '#FF0000',
            white: '#FFFFFF',
            green: '#25D366',
        },
        extend: {},
    },
    variants: {
        borderColor: ['responsive', 'hover', 'group-hover']
    },
    plugins: [],
}
