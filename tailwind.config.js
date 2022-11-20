/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['./resources/**/*.blade.php', './storage/app/proofs/*.md'],
    theme: {
        screens: {
            '2xl': { max: '1535px' },
            xl: { max: '1279px' },
            lg: { max: '1023px' },
            md: { max: '767px' },
            sm: { max: '639px' }
        }
    },
    plugins: [require('@tailwindcss/typography'), require('@tailwindcss/line-clamp')]
}
