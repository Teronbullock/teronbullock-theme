const path = require('path');

module.exports = env => {
  const mode = env && env.mode ? env.mode : 'development';

  return {
    entry: {
      themeMainScripts: [
        './src/assets/js/main.js',
        './src/assets/js/block-variations.js',
        './src/assets/js/header-script.js',
      ],
      themeGTMScripts: './src/assets/js/gtm-scripts.js',
    },
    output: {
      filename: '[name].min.js',
      path: path.resolve(__dirname, 'assets/js'),
      clean: true,
    },
    optimization: {
      splitChunks: {
        chunks: 'all',
      },
    },
    mode: mode,
  };
};
