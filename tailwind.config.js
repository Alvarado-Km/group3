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
        backgroundImage: {},
        fontFamily: {
            'title': ['Ribeye', ...defaultTheme.fontFamily.sans],
            'common': ['Slabo27px', ...defaultTheme.fontFamily.serif]
        }
      },
    },
    plugins: [],
  }

 


