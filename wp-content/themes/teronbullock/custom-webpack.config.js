const path = require('path');

module.exports = {
  entry: [ './src/assets/js/block-variations.js', './src/assets/js/header-script.js'],
  output: {
    filename: 'theme-main-scripts.js',
    path: path.resolve(__dirname, 'assets/js'),
  },
  mode: 'development',
};