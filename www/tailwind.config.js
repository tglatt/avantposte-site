/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['./src/**/*.{html,js}'],
    theme: {
      colors: {
        'primary': '#29e76bff',
        'black': '#000000',
        'white': '#ffffff',
        //Filtres
        'brown': '#685100ff',
        'blue': '#574cfeff',
        'red': '#ff2f00ff',
        'green': '#00ab00ff',
        'brown-light': '#cc9900ff',
        'pink': '#ff9bffff',
        'orange': '#ff6d30ff',

        //Pour les filtres essayer avec les mêmes couleurs mais transparentes
        'filter-brown': '#685100a1',
        'filter-blue': '#574cfea1',
        'filter-red': '#ff2f00a1',
        'filter-green': '#00ab00a1',
        'filter-brown-light': '#cc9900a1',
        'filter-pink': '#ff9bffa1',
        'filter-orange': '#ff6d30a1',

      },
      fontFamily: {
        sans: ['Graphik', 'sans-serif'],
        serif: ['Merriweather', 'serif'],
        'Agipo': ['"Agipo"', 'serif'],
      },
      extend: {
        spacing: {
          '8xl': '96rem',
          '9xl': '128rem',
        },
        borderRadius: {
          '4xl': '2rem',
        }
      }
    },
  }