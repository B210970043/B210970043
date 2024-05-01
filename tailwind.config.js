import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            container: {
                center: true,
            },
            transitionTimingFunction: {
                'in-expo': 'cubic-bezier(0.95, 0.05, 0.795, 0.035)',
                'out-expo': 'cubic-bezier(0.19, 1, 0.22, 1)',
              },
            flex: {
            '2': '2 2 0%',
            },
            boxShadow: {
                neon: "0 0 5px theme('colors.purple.500'), 0 0 20px theme('colors.purple.700')",
                green: "0 0 5px theme('colors.green.500'), 0 0 20px theme('colors.green.700')",
            },
        },
    },
    plugins: [forms],
};
