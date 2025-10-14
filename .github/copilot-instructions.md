# Hubleto ERP project

This project is a template for the ERP/CRM solution based on Hubleto ERP (https://github.com/hubleto/erp) and Hubleto Framework (https://github.com/hubleto/framework).

Custom ERP/CRM apps can be developed in th `src/apps` folder. App development shall follow coding rules and examples from https://developer.hubleto.com.

The code is and MVC-based architecture. All models, controllers and views are located in the source code of the app, which is in `src/apps/APP_NAME`. For example, a custom `Contacts` app should contain following:

  * an app's loader class in `src/apps/Contacts/Loader.php`
  * models in `src/apps/Contacts/Model` folder
    * Note: A model consists of two files - the model and its `RecordManager`
  * controllers in `src/apps/Contacts/Controllers` folder
  * views in `src/apps/Contacts/Views` folder

Models and controllers are PHP scripts. Views are TWIG files.

Templates for the codebase of the Hubleto app are at https://github.com/hubleto/erp/tree/main/cli/Templates/app.