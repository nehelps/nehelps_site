/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
  ],
  theme: {
    container: {
      center: true
    },
    fontFamily: {
      sans: ['Gabarito', 'sans-serif'],
      serif: ['Charis SIL', 'serif'],
    },
    extend: {
      spacing: {
        'scale-0': '0rem',           // 0px
        'scale-1': '0.295rem',       // 4.72px
        'scale-2': '0.461rem',       // 7.37px
        'scale-3': '0.72rem',        // 11.52px
        'scale-4': '0.9rem',         // 14.4px
        'scale-5': '1.125rem',       // 18px
        'scale-6': '1.40625rem',     // 22.5px
        'scale-7': '1.75625rem',     // 28.1px
        'scale-8': '2.2rem',         // 35.2px
        'scale-9': '2.74375rem',     // 43.9px
        'scale-10': '3.43125rem',    // 54.9px
        'scale-11': '4.29375rem',    // 68.7px
        'scale-12': '5.3625rem',     // 85.8px
        'scale-13': '6.70625rem',    // 107.3px
        'scale-14': '8.38125rem',    // 134.1px
        'scale-15': '10.475rem',     // 167.6px
        'scale-16': '13.08125rem',   // 209.3px
        'scale-17': '16.2875rem',    // 260.6px
        'scale-18': '20.19375rem',   // 323.1px
        'scale-19': '24.9125rem',    // 398.6px
        'scale-20': '30.5625rem',    // 489px
      },
      fontSize: {
        'scale-0': '0rem',           // 0px
        'scale-1': '0.295rem',       // 4.72px
        'scale-2': '0.461rem',       // 7.37px
        'scale-3': '0.72rem',        // 11.52px
        'scale-4': '0.9rem',         // 14.4px
        'scale-5': '1.125rem',       // 18px
        'scale-6': '1.40625rem',     // 22.5px
        'scale-7': '1.75625rem',     // 28.1px
        'scale-8': '2.2rem',         // 35.2px
        'scale-9': '2.74375rem',     // 43.9px
        'scale-10': '3.43125rem',    // 54.9px
        'scale-11': '4.29375rem',    // 68.7px
        'scale-12': '5.3625rem',     // 85.8px
        'scale-13': '6.70625rem',    // 107.3px
        'scale-14': '8.38125rem',    // 134.1px
        'scale-15': '10.475rem',     // 167.6px
        'scale-16': '13.08125rem',   // 209.3px
        'scale-17': '16.2875rem',    // 260.6px
        'scale-18': '20.19375rem',   // 323.1px
        'scale-19': '24.9125rem',    // 398.6px
        'scale-20': '30.5625rem',    // 489px
      },
      colors: {
        'devotion': {
          DEFAULT: '#02344F'
        },
        'benevolence': {
          DEFAULT: '#211D1C'
        },
        'generosity': {
          DEFAULT: '#FFB703'
        },
        'compassion': {
          DEFAULT: '#A49694'
        },
        'growth': {
          DEFAULT: '#04724D'
        },
        'outreach': {
          DEFAULT: '#FB8500'
        },
        'stewardship': {
          DEFAULT: '#635A58'
        },
        'harmony': {
          DEFAULT: '#0576B3'
        }
    },
  },
  }
}


