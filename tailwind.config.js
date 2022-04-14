const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: [...defaultTheme.fontFamily.sans],
            },
            colors: {
                life: {
                    DEFAULT: '#02b98d',
                    'dark': '#05a880',
                    'gray': '#ecf0f3',
                    'dark-gray': '#474c52',
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
