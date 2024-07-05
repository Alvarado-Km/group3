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
        colors:{
            red: '#b32718',
            orange: '#f28425',
            salmon: '#ee4b2a',
            yellow: '#fdac41',
            paleGreen: '#b8a944',
            grass: '#7c6e2d',
            mildew: '#4c4926'
        },
        borderWidth:{
            '20': '20px',
            '30': '30px'

        },
        fontFamily: {
            'title': ['Ribeye', ...defaultTheme.fontFamily.sans],
            'common': ['Slabo27px', ...defaultTheme.fontFamily.serif]
        }
      },
    },
    plugins: [],
  }




