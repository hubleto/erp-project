cd %~dp0..

rem hard-copy assets

mkdir assets
robocopy vendor\hubleto\assets\css assets\css /s /e
robocopy vendor\hubleto\assets\fonts assets\fonts /s /e
robocopy vendor\hubleto\assets\images assets\images /s /e
robocopy vendor\hubleto\assets\src assets\src /s /e

copy vendor\hubleto\assets\jquery-3.5.1.js assets\jquery-3.5.1.js

rem compile javascript and css

npm install
npm run build
