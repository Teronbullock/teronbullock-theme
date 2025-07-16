const path = require('path');

module.exports = env => {
  const mode = env && env.mode ? env.mode : 'development';

  return {
    entry: {
      themeMainScripts: [
        './src/assets/js/main.js',
        './src/assets/js/block-variations.js',
        './src/assets/js/header-script.js',
        './src/assets/js/project-loop-script.js',
      ],
      themeGTMScripts: './src/assets/js/gtm-scripts.js',
    },
    output: {
      filename: '[name].js',
      path: path.resolve(__dirname, 'assets/js'),
      clean: true,
    },
    mode: mode,
  };
};
