module.exports = {
  purge: false,
  theme: {
    zIndex: {
      '25': 25,
      '50': 50,
      '75': 75,
      '100': 100,
      'auto': 'auto',
    },
    container: {
      padding: {
        default: '0',
        sm: '.5rem',
        lg: '4rem',
        xl: '5rem',
      },
    },
    fontFamily: {
      sans: [
        '"Open Sans"',
        'Helvetica',
        'Arial',
        'sans-serif',
      ],
      // serif: [
      //   '"Open Sans"',
      //   'Helvetica',
      //   'Arial',
      //   '"sans-serif"',
      // ],
      // mono: [
      //   '"Open Sans"',
      //   'Helvetica',
      //   'Arial',
      //   '"sans-serif"',
      // ],
    },
    extend: {
      colors: {
        'good': {
          DEFAULT: '#81c750',
        },
        'okay': {
          DEFAULT: '#b7d7a1',
        },
        'improvement': {
          DEFAULT: '#fec926',
        },
        'unsafe': {
          DEFAULT: '#f28816',
        },
        'dangerous': {
          DEFAULT: '#fe2b17',
        },
        'highly-dangerous': {
          DEFAULT: '#000',
        },
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
        'ig-li-blue': {
          50: '#fefeff',
          100: '#fdfefe',
          200: '#fafcfd',
          300: '#f7fafc',
          400: '#f0f6fa',
          500: '#eaf2f8',
          600: '#d3dadf',
          700: '#b0b6ba',
          800: '#8c9195',
          900: '#73777a'
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
          50: '#F4F9FC',
          100: '#EAF2F8',
          200: '#CADFEE',
          300: '#A9CCE3',
          400: '#69A6CE',
          500: '#2980B9',
          600: '#2573A7',
          700: '#194D6F',
          800: '#123A53',
          900: '#0C2638',
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
        'ydg-ingenie-blog': {
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
        'ydg-parents-guide': {
          50: '#F3F6F6',
          100: '#E8ECED',
          200: '#C5D0D1',
          300: '#A1B4B5',
          400: '#5B7C7E',
          500: '#154446',
          600: '#133D3F',
          700: '#0D292A',
          800: '#091F20',
          900: '#061415',
        },
        'info': {
          DEFAULT: '#BDE5F8',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFFFFF',
          '400': '#EBF7FD',
          '500': '#BDE5F8',
          '600': '#8FD3F3',
          '700': '#61C1EE',
          '800': '#33AFE9',
          '900': '#1696D3'
        },
        'success': {
          DEFAULT: '#DFF2BF',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFFFFF',
          '400': '#F4FBE9',
          '500': '#DFF2BF',
          '600': '#CAE995',
          '700': '#B5E16A',
          '800': '#9FD840',
          '900': '#86BE27'
        },
        'warning': {
          DEFAULT: '#FEEFB3',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFFFFF',
          '400': '#FFFAE5',
          '500': '#FEEFB3',
          '600': '#FDE481',
          '700': '#FDDA4E',
          '800': '#FCCF1C',
          '900': '#E2B503'
        },
        'alert': {
          DEFAULT: '#FF7070',
          '50': '#FFFFFF',
          '100': '#FFFFFF',
          '200': '#FFFFFF',
          '300': '#FFD6D6',
          '400': '#FFA3A3',
          '500': '#FF7070',
          '600': '#FF3D3D',
          '700': '#FF0A0A',
          '800': '#D60000',
          '900': '#A30000'
        },
        link: {
          'default': '#3182ce',
          'hover': '#63b3ed',
        }
      },
      fontSize: {
        xxs: '0.675rem',
      },
      // spacing: {
      //   '1/2': '50%',
      //   '1/3': '33.333333%',
      //   '2/3': '66.666667%',
      //   '1/4': '25%',
      //   '2/4': '50%',
      //   '3/4': '75%',
      //   '1/5': '20%',
      //   '2/5': '40%',
      //   '3/5': '60%',
      //   '4/5': '80%',
      //   '1/6': '16.666667%',
      //   '2/6': '33.333333%',
      //   '3/6': '50%',
      //   '4/6': '66.666667%',
      //   '5/6': '83.333333%',
      //   '1/12': '8.333333%',
      //   '2/12': '16.666667%',
      //   '3/12': '25%',
      //   '4/12': '33.333333%',
      //   '5/12': '41.666667%',
      //   '6/12': '50%',
      //   '7/12': '58.333333%',
      //   '8/12': '66.666667%',
      //   '9/12': '75%',
      //   '10/12': '83.333333%',
      //   '11/12': '91.666667%',
      //   full: '100%',
      //   screen: '100vw',
      // },
      lineHeight: {
        tighter: '1.125',
      },
      minWidth: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        full: '100%',
      },
      backgroundImage: {
        // 'home-hero-sm': "url('https://staging.ingenie.com/resources/images/maskhead/isometric-road-home-mob.svg')",
      },
    }
  },
  variants: {
    extend: {
      textColor: ['responsive', 'hover', 'focus', 'visited', 'group-hover'],
      backgroundColor: ['group-hover'],
      margin: ['first'], // TODO: might not work
      borderWidth: ['hover'], // not using yet
    }
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
