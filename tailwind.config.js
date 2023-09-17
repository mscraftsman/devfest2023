/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Fira Sans', ...defaultTheme.fontFamily.sans],
            serif: ['Gentium Book Plus', 'ui-serif']
        },
    },
  },
  plugins: [
      require('@tailwindcss/typography'),
  ],
}

