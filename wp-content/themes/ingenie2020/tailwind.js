module.exports = {
  // error from tailwind abut purge without below TODO
  // purge: [
  //   "*.php",
  //   "templates/**/*.php",
  //   "build/js/**/*.js",
  // ],
  theme: {
    container: {
      padding: '1.5rem',
    },
    extend: {
      colors: {
        'ig-blue': {
          50: '#F2F5F7',
          100: '#E6EAEF',
          200: '#BFCBD7',
          300: '#99ACBF',
          400: '#4D6D8F',
          500: '#002F5F',
          600: '#002A56',
          700: '#001C39',
          800: '#00152B',
          900: '#000E1D',
        },
        'ig-orange': {
          50: '#FEF8F4',
          100: '#FDF1E9',
          200: '#FBDDC9',
          300: '#F8C8A8',
          400: '#F29F67',
          500: '#ED7626',
          600: '#D56A22',
          700: '#8E4717',
          800: '#6B3511',
          900: '#47230B',
        },
        link: {
          'default': '#3182ce',
          'hover': '#63b3ed',
        }
      },
      fontSize: {
        xxs: '0.675rem',
      },
      lineHeight: {
        tighter: '1.125',
      },
    }
  },
  variants: {
    textColor: ['responsive', 'hover', 'focus', 'visited'],
  },
  plugins: [
    ({ addUtilities }) => {
      const utils = {
        '.translate-x-half': {
          transform: 'translateX(50%)',
        },
      };
      addUtilities(utils, ['responsive'])
    }
  ]
};
