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

      sky: '#53a5e3',
      lavender: '#70579f',
      pink: '#ed64af',
      aqua: '#11998e',
      goo: '#38ef7d',
      crayon: '#e86546',
      rose: '#e34f65',
      black: '#000000',
      night: '#242424',
      fog: '#424242',
      smoke: '#757575',
      commando: '#D0C8B3',
      mist: '#e0e0e0',
      ghost: '#f5f5f5',
      halo: '#fafafa',
      white: '#ffffff',
      yellow: '#FCC53B',

      trustpilot: '#00b67a',
      stripe: '#5433FF',
      github: '#4078c0',
      letsencrypt: '#2C3C69',
      digitalocean: '#1572FE',
      
      youtube: '#ff0000',
      instagram: '#F56040',
      apple: '#757575',
      android: '#a4c639', 

      BlueGrey400: '#64748B',
      BlueGrey900: '#0F172A',
      CoolGrey800: '#1F2937',
      CoolGrey100: '#F3F4F6',
      TrueGrey400: '#A3A3A3',
      Red800: '#991B1B',
      Orange400: '#F97316',
      Amber500: '#F59E0B',
      Green400: '#4ADE80',
      Emerald400: '#34D399',
      Emerald800: '#065F46',
      Cyan500: '#06B6D4',
      LightBlue100: '#F0F9FF',
      Blue900: '#1E3A8A',
      Rose600: '#E11D48',
    },

    fontFamily: {
      sans: ['Gill Sans', 'Gill Sans MT', 'sans-serif'],
      mono: ['Monaco', 'Consolas', 'Andale Mono', 'DejaVu Sans Mono', 'monospace' ],
    },

    backgroundSize: {
      'auto': 'auto',
      'cover': 'cover',
      'contain': 'contain',
      'fifty': '50%',
    },

    extend: {

      fill: theme => ({
        'night': theme('colors.night'),
        'white': theme('colors.white'),
        'goo': theme('colors.goo'),
        'aqua': theme('colors.aqua'),
        'sky': theme('colors.sky'),
        'commando': theme('colors.commando'),
        'trustpilot': theme('colors.trustpilot'),
        'crayon': theme('colors.crayon'),
        'rose': theme('colors.rose'),
        'fog': theme('colors.fog'),
        'smoke': theme('colors.smoke'),
        'instagram': theme('colors.instagram'),
        'youtube': theme('colors.youtube'),
        'Blue900': theme('colors.Blue900'),
        'Amber500': theme('colors.Amber500'),
        'Red800' : theme('colors.Red800'),
        'Orange400' : theme('colors.Orange400'),
        'Emerald400' : theme('colors.Emerald400'),
        'Emerald800' : theme('colors.Emerald800'),
        'Cyan500' : theme('colors.Cyan500'),
        'Rose600' : theme('colors.Rose600'),
        'BlueGrey400' : theme('colors.BlueGrey400'),
      }),

    },
  },



  variants: {
    extend: {
      display: ['hover'],
      fill:    ['hover', 'focus'],
      backgroundColor: ['checked'], 
    },
  },



  plugins: [],
}
