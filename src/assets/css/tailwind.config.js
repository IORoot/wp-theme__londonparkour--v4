const colors = require('tailwindcss/colors')

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
      serif:	['Optima', 'Segoe', 'Segoe UI', 'Candara', 'Calibri', 'Arial', 'sans-serif'],
      mono: ['Monaco', 'Consolas', 'Andale Mono', 'DejaVu Sans Mono', 'monospace' ],
    },

    extend: {

      fill: theme => ({
        'black': theme('colors.night'),
        'white': theme('colors.white'),
        'green': theme('colors.green'),
        'yellow': theme('colors.yellow'),
        'blue': theme('colors.blue'),
      }),

      height: theme => ({
        "screen-1\/4": "calc(100vw / 4)",
        "screen-1\/3": "calc(100vw / 3)",
        "screen-1\/2": "calc(100vw / 2)",
        "screen-2\/3": "calc((100vw / 3) * 2)",
        "screen-3\/4": "calc((100vw / 4) * 3)",
      }),

    },
  },



  variants: {
    extend: {
      display: ['hover'],
      fill:    ['hover', 'focus'],
      backgroundColor: ['checked'], 
      margin: ['first', 'last'],
      backgroundColor: ['checked'],
    },
  },
  

  plugins: [],
}
