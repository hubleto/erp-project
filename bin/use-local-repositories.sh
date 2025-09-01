#!/bin/bash

BASE_DIR="$1"

composer config repositories.hubleto/erp path "$BASE_DIR/erp"
composer require hubleto/erp:dev-main

composer config repositories.hubleto/framework path "$BASE_DIR/framework"
composer require hubleto/framework:dev-main

composer config repositories.hubleto/assets path "$BASE_DIR/assets"
composer require hubleto/assets:dev-main

npm install "file:$BASE_DIR/react-ui"