rem hubleto/erp
call composer config repositories.hubleto/erp path %1\main
call composer require hubleto/erp dev-main

rem hubleto/framework
call composer config repositories.hubleto/framework path %1\framework
call composer require hubleto/framework dev-main

rem hubleto/assets
call composer config repositories.hubleto/assets path %1\assets
call composer require hubleto/assets dev-main

rem hubleto/react-ui
call npm install file:%1\react-ui
