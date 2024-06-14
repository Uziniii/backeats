import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/kiosks/*.blade.php',
    ],

    theme: {
        extend: {
            backgroundImage: {
                'kioskBackground': "url('')",
                'herobanner' : "url('../../public/assets/imageCss/hero-banner-backeats.png')",
              },
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', 'sans-serif'],
            },
            colors: {
                lightblack: "#242424",
                white : "#FFFFFF",
                lightblue : "#2BA6FF",

            },
            spacing: {
                '10vh': '10vh',
                '85vh': '85vh',
              },  
        },
    },

    plugins: [forms],
};
