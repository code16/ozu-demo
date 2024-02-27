import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',
    theme: {
        extend: {
            lineHeight: {
                11: '2.75rem',
                12: '3rem',
                13: '3.25rem',
                14: '3.5rem',
            },
            fontFamily: {
                sans: ['Space Grotesk', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.lime,
                gray: colors.gray,
            },
            typography: ({ theme }) => ({
                DEFAULT: {
                    css: {
                        a: {
                            color: theme('colors.primary.500'),
                            '&:hover': {
                                color: `${theme('colors.primary.600')}`,
                            },
                            code: { color: theme('colors.primary.400') },
                        },
                        'h1,h2': {
                            fontWeight: '700',
                            letterSpacing: theme('letterSpacing.tight'),
                        },
                        h3: {
                            fontWeight: '600',
                        },
                        code: {
                            color: theme('colors.indigo.500'),
                        },
                    },
                },
                invert: {
                    css: {
                        a: {
                            color: theme('colors.primary.500'),
                            '&:hover': {
                                color: `${theme('colors.primary.400')}`,
                            },
                            code: { color: theme('colors.primary.400') },
                        },
                        'h1,h2,h3,h4,h5,h6': {
                            color: theme('colors.gray.100'),
                        },
                    },
                },
            }),
        },
    },
    plugins: [forms, typography],
};
