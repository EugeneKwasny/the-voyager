/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ["./header.php", './functions.php'],
  theme: {
    extend: {
      colors: {
        bg: {
          1: '#2B3467',
          2: '#F5C34B',
          3: '#112137',
          4: '#F3F5F6'
        },
        color:{
          border: '#EAEAEA',
          textDark: '#041E42',
          textLight: '#626974'
        }
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    plugin(function({ addComponents }) {
      addComponents({
        '.menu-item-has-children': {
          '&:hover > .sub-menu': {
            display: 'flex'
          }
        }
      })
    })
  ],
}