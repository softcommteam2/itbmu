const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            colors: {
                yellow: {
                    '100': '#72c1df',
                    '200': '#5bb7d9',
                    '300': '#43add4',
                    '400': '#2ca2ce',
                    '500': '#ffdf00',
                    '600': '#ffcc33',
                    '700': '#107aa1',
                    '800': '#0e6a8d',
                    '900': '#0c5b79'
                },
                gray: {
                    '200': '#f4f0ec',
                    '500': '#c0c0c0',
                    '900': '#000'
                },
                blue: {
                    '600': '#003399',
                    '800': '#000080'
                }
            },

        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/forms'),
    ]
}