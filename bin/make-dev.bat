call composer config repositories.hubleto/main path %1/main
call composer config repositories.hubleto/apps path %1/apps
call composer config repositories.hubleto/framework path %1/framework
call composer require hubleto/main dev-main
call composer require hubleto/apps dev-main
call composer require hubleto/framework dev-main
call composer update
call npm install file:%1/react-ui
call php hubleto init
