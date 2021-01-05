module.exports = {
  purge: [
    '../../**/*.html',
    '../../**/*.js',
    '../../**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
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

    
    // Created from 
    // https://tailbase.samuelhorn.com/#output
    fontSize: {
      "4xl": [
        "5.722rem",
        "7.5rem"
      ],
      "3xl": [
        "4.578rem",
        "6rem"
      ],
      "2xl": [
        "3.662rem",
        "4.5rem"
      ],
      "xl": [
        "2.93rem",
        "4.5rem"
      ],
      "lg": [
        "2.344rem",
        "3rem"
      ],
      "md": [
        "1.875rem",
        "3rem"
      ],
      "base": [
        "1.5rem",
        "3rem"
      ],
      "sm": [
        "1.2rem",
        "1.5rem"
      ],
      "xs": [
        "0.96rem",
        "1.5rem"
      ]
    },
    spacing: {
      "1/4": "0.375rem",
      "1/2": "0.75rem",
      "1": "1.5rem",
      "2": "3rem",
      "3": "4.5rem",
      "4": "6rem",
      "5": "7.5rem",
      "6": "9rem",
      "8": "12rem",
      "12": "18rem",
      "16": "24rem"
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
