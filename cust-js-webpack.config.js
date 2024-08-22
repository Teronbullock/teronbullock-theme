const path = require('path');

module.exports = (env) => {
  const mode = env && env.mode ? env.mode : 'development';

  return {
    entry: [ 
      './src/assets/js/main.js',
      './src/assets/js/block-variations.js',
      './src/assets/js/header-script.js',
      './src/assets/js/project-loop-script.js'
    ],
    output: {
      filename: 'theme-main-scripts.js',
      path: path.resolve(__dirname, 'assets/js'),
    },
    mode: mode,
  };
};