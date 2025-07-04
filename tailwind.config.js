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
            red1: '#b32718',
            orange: '#f28425',
            salmon: '#ee4b2a',
            yellow1: '#fdac41',
            paleGreen: '#b8a944',
            grass: '#7c6e2d',
            mildew: '#4c4926',



        },
        borderWidth:{
            '20': '20px',
            '30': '30px'

        },
        fontFamily: {

            'common': ['Old Standard TT', ...defaultTheme.fontFamily.serif],
            'title': ['Fira sans condensed', ...defaultTheme.fontFamily.sans]
        },
        height: {
            '128': '32rem',
        }
      },
    },
    plugins: [],
  }


