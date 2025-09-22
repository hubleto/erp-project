#!/bin/bash

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE}")" && pwd)"
"$SCRIPT_DIR/../vendor/bin/phpunit" --bootstrap test.php \
    "$SCRIPT_DIR/../vendor/hubleto/erp/tests" \
    "$SCRIPT_DIR/../vendor/hubleto/erp/apps" \
    "$SCRIPT_DIR/../tests"
