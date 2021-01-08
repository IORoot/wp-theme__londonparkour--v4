module.exports = {
  purge: [
    '../../**/*.html',
    '../../**/*.js',
    '../../**/*.php',
  ],
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
    },
    fontFamily: {
      sans: ['Gill Sans', 'Gill Sans MT', 'sans-serif'],
      mono: ['Monaco', 'Consolas', 'Andale Mono', 'DejaVu Sans Mono', 'monospace' ],
    },

    extend: {

      fill: theme => ({
        'night': theme('colors.night'),
        'white': theme('colors.white'),
        'goo': theme('colors.goo'),
      })


    },
  },
  variants: {
    extend: {
      display: ['hover'],
    },
  },
  plugins: [],
}
