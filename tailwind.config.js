module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                life: {
                    DEFAULT: '#00b98d',
                    'dark-gray': '#797e80',
                    'gray': '#ecf0f3',
                }
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms')
    ],
}
