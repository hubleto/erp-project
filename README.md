# Hubleto ERP

This is the repository for installation of production-ready Hubleto ERP. To install do following:

  * `cd YOUR_HUBLETO_ERP_FOLDER`
  * `composer create-project hubleto/erp-project . --no-dev`
  * `php hubleto init`

🌟 Star if you like it!

<img src="docs/images/01.jpg" width="200px"></img>

**Hubleto** is a community project, a series of repositories resulting in an opensource ERP/CRM package (this `hubleto/erp` repository).

The other underlying repositories are:

  * `hubleto/framework` - PHP-based low level MVC framework
  * `hubleto/react-ui` - React-based UI using other libraries like `primereact` but modified and tailored for Hubleto ERP
  * `hubleto/assets` - precompiled default assets
  * `hubleto/erp` - package combining everything together into a Hubleto ERP solution.

`hubleto/erp` (this repository) is a package for `composer create-project` command which installs the `hubleto/erp` and adds some other files for easier customization after installation.

**Hubleto is free also for your commercial projects.**

## Create your app

If you want to customize your Hubleto installation, start by creating your new Hubleto app.

```php hubleto create app MyFirstApp```

## Full development environment

If you want to develop custom Hubleto apps for your project (event commercial), you must tweak a little bit the folder created by `composer create-project`. Follow steps described below.

### Prepare assets

Copy the default assets from `vendor/hubleto/assets` to your project folder:

```
cd YOUR_PROJECT_FOLDER
mkdir assets
cp -r vendor/hubleto/assets/css assets/css
cp -r vendor/hubleto/assets/fonts assets/fonts
cp -r vendor/hubleto/assets/images assets/images
cp -r vendor/hubleto/assets/src assets/src
```

### Compile Javascript and CSS

Install and compile Javascript libraries and CSS files:

```
cd YOUR_PROJECT_FOLDER
npm install
npm run build-js
npm run build-css
```

## How to contribute

If you want to contribute, you will need to **fork all Hubleto repositories** and **recreate the project folder to use these forks**.

### Fork all Hubleto repositories

> **IMPORTANT** Fork all repositories into one folder, e.g. /var/www/hubleto.

  * https://github.com/hubleto/framework
  * https://github.com/hubleto/erp
  * https://github.com/hubleto/react-ui

### Re-create your Hubleto folder

> **IMPORTANT** Change `/var/www/hubleto` in commands below to path to your folder with forks.

```
composer create-project hubleto/erp-project . dev-main
./bin/use-local-repositories /var/www/hubleto
npm run build
php hubleto init
```

## Become our partner

Hubleto is a community project and so it needs your help. We provide complete Hubleto code for free and maintain its development.

We will be very happy to get in touch with any company or individuals, willing to act as reseller or consultant.

Do not hesitate and contact us via [LinkedIn](https://www.linkedin.com/company/hubleto) or [Reddit](https://www.reddit.com/r/hubleto).

## See also

  * https://github.com/hubleto/erp - the 'main' repository for Hubleto
  * https://developer.hubleto.com - developer guide for Hubleto
  * https://help.hubleto.com - user guide for Hubleto
  * https://www.hubleto.com - a presentation website
  * https://community.hubleto.com - a discussion forum about everything related to Hubleto
  * https://www.hubleto.com/demo - try demo
