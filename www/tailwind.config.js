const colors = require('tailwindcss/colors')

module.exports = {
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    fontFamily: {
      body: ['Agipo', 'Inter', 'ui-sans-serif', 'system-ui'],
      sans: ['Agipo', 'Inter', 'ui-sans-serif', 'system-ui'],
    },
    extend: {
      spacing: {
        128: '32rem',
        144: '36rem',
      },
      borderRadius: {
        '4xl': '2rem',
      },
    },
    colors: {
      primary: '#29e76bff',
    },
  },
}
