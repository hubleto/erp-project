rem This script must be run from the project's root folder followingly:
rem .\bin\run-tests.bat

%~dp0..\vendor\bin\phpunit ^
  --bootstrap test.php ^
  --debug ^
  %~dp0..\vendor\hubleto\erp\tests ^
  %~dp0..\vendor\hubleto\erp\apps ^
  %~dp0..\tests