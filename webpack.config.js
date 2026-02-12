const path = require('path');
const fs = require('fs');

function loadEntriesFromRepository(folder) {
  let entries = [];
  if (fs.lstatSync(folder).isDirectory()) {
    fs.readdirSync(folder).forEach(function(app){
      const stat = fs.statSync(folder + '/' + app);
      const loaderEntry = folder + '/' + app + '/Loader';
      if (stat && stat.isDirectory() && fs.existsSync(loaderEntry + '.tsx')) {
        entries.push(loaderEntry);
      }
    });
  }
  return entries;
}

module.exports = (env, arg) => {
  return {
    entry: {
      main: [
        './assets/src/Main',
        ...loadEntriesFromRepository(path.resolve(__dirname, 'vendor/hubleto/erp/apps')),
        ...loadEntriesFromRepository(path.resolve(__dirname, 'src/apps')),
      ],
    },
    output: {
      path: path.resolve(__dirname, 'assets/compiled/js'),
      filename: '[name].js',
      clean: true
    },
    module: {
      rules: [
        {
          test: /\.(js|mjs|jsx|ts|tsx)$/,
          use: 'babel-loader',
        },
        {
          test: /\.(scss|css)$/,
          use: ['style-loader', 'css-loader', 'sass-loader'],
        }
      ],
    },
    resolve: {
      modules: [
        path.resolve(__dirname, './node_modules'),
        path.resolve(__dirname, '../hubleto/react-ui/node_modules'),
      ],
      extensions: ['.js', '.jsx', '.ts', '.tsx', '.scss', '.css'],
      alias: {
        '@hubleto/ui/core': path.resolve(__dirname, 'vendor/hubleto/framework/src/Components/Core'),
        '@hubleto/ui/ext': path.resolve(__dirname, 'vendor/hubleto/framework/src/Components/Ext'),
        '@hubleto/framework': path.resolve(__dirname, 'vendor/hubleto/framework'),
        '@hubleto/apps': path.resolve(__dirname, 'vendor/hubleto/erp/apps'),
      },
    }
  }
};
