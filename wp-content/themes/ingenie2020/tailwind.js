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
        'ydg-blue': {
          50: '#F2FAFF',
          100: '#E6F5FF',
          200: '#BFE7FF',
          300: '#99D8FF',
          400: '#4DBAFF',
          500: '#009DFF',
          600: '#008DE6',
          700: '#005E99',
          800: '#004773',
          900: '#002F4D',
        },
        'ydg-tips-support': {
          50: '#F8FDF2',
          100: '#F1FBE6',
          200: '#DDF6BF',
          300: '#C8F199',
          400: '#9FE64D',
          500: '#76DB00',
          600: '#6AC500',
          700: '#478300',
          800: '#356300',
          900: '#234200',
        },
        'ydg-on-the-road': {
          50: '#F3FDFB',
          100: '#E7FAF7',
          200: '#C3F4EB',
          300: '#9FEDDE',
          400: '#57DFC6',
          500: '#0FD1AD',
          600: '#0EBC9C',
          700: '#097D68',
          800: '#075E4E',
          900: '#053F34',
        },
        'ydg-learning-to-drive': {
          50: '#F8F6FE',
          100: '#F2EDFE',
          200: '#DED1FB',
          300: '#CBB6F9',
          400: '#A37FF5',
          500: '#7C48F0',
          600: '#7041D8',
          700: '#4A2B90',
          800: '#38206C',
          900: '#251648',
        },
        'ydg-ig-blog': {
          50: '#F2FAFF',
          100: '#E6F5FF',
          200: '#BFE7FF',
          300: '#99D8FF',
          400: '#4DBAFF',
          500: '#009DFF',
          600: '#008DE6',
          700: '#005E99',
          800: '#004773',
          900: '#002F4D',
        },
        'ydg-car-insurance': {
          50: '#FDFBF7',
          100: '#FBF8EF',
          200: '#F4EDD8',
          300: '#EDE2C0',
          400: '#E0CD90',
          500: '#D3B761',
          600: '#BEA557',
          700: '#7F6E3A',
          800: '#5F522C',
          900: '#3F371D',
        },
        'ydg-lifestyle': {
          50: '#FFF2F9',
          100: '#FFE6F2',
          200: '#FFBFDF',
          300: '#FF99CC',
          400: '#FF4DA6',
          500: '#FF0080',
          600: '#E60073',
          700: '#99004D',
          800: '#73003A',
          900: '#4D0026',
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
  future: {
    removeDeprecatedGapUtilities: true,
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
