cd ..

# hard-copy assets

mkdir assets
cp -r vendor/hubleto/assets/css assets/css
cp -r vendor/hubleto/assets/fonts assets/fonts
cp -r vendor/hubleto/assets/images assets/images
cp -r vendor/hubleto/assets/src assets/src
cp -r vendor/hubleto/assets/jquery-3.5.1.js assets/jquery-3.5.1.js

# compile javascript and css

npm install
npm run build