const colors = require('tailwindcss/colors');
const plugin = require('tailwindcss/plugin');

module.exports = {

  purge: {
    content: [
      'file_scans/**/*.html',
    ],
  },

  darkMode: false, // or 'media' or 'class'



  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.warmGray,
      yellow: colors.amber,
      blog: colors.amber,
      green: colors.green,
      tutorial: colors.green,
      blue: colors.blue,
      demonstration: colors.blue,

    },

    fontFamily: {
      sans: ['Gill Sans', 'Gill Sans MT', 'sans-serif'],
      serif: ['Optima', 'Segoe', 'Segoe UI', 'Candara', 'Calibri', 'Arial', 'sans-serif'],
      mono: ['Monaco', 'Consolas', 'Andale Mono', 'DejaVu Sans Mono', 'monospace'],
    },

    extend: {

      fill: theme => ({
        'black': theme('colors.night'),
        'white': theme('colors.white'),
        'green': theme('colors.green'),
        'yellow': theme('colors.yellow'),
        'blue': theme('colors.blue'),
        'gray': theme('colors.gray'),
      }),

    },
  },

  plugins: [
    require('./plugins/tailwind-on'), 
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],


  variants: {
    extend: {
      display: ['hover'],
      fill: ['hover', 'focus'],
      backgroundColor: ['checked'],
      margin: ['first', 'last', 'even', 'odd'],
      padding: ['first', 'last', 'even', 'odd', 'on-1\/3', 'on-2\/3', 'on-3\/3'],
    },
  },


  
}
