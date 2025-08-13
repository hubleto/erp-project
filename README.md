# Hubleto ERP

This is the repository for installation of production-ready Hubleto ERP. To install do following:

  * `cd YOUR_HUBLETO_ERP_FOLDER`
  * `composer create-project hubleto/erp . --no-dev`
  * `php hubleto init`

🌟 Star if you like it!

<img src="docs/images/01.jpg" width="200px"></img>

**Hubleto** is a community project, a series of repositories resulting in an opensource ERP/CRM package (this `hubleto/erp` repository).

The other underlying repositories are:

  * `hubleto/framework` - PHP-based low level MVC framework
  * `hubleto/react-ui` - React-based UI using other libraries like `primereact` but modified and tailored for Hubleto ERP
  * `hubleto/terminal` - a simple command-line tool for PHP
  * `hubleto/apps` - set of freely available apps covering features like CRM, supply-chain or project management
  * `hubleto/main` - package combining everything together into a Hubleto ERP solution.

`hubleto/erp` (this repository) is a package for `composer create-project` command which installs the `hubleto/main` and adds some other files for easier customization after installation.

**Complete Hubleto suite is freely available. Simply download, install and use it for your commercial projects.**

> **QUICK TIP:** Do you want to integrate Hubleto with ChatGPT? Check this article: https://developer.hubleto.com/v0/advanced-development/miscellaneous/hubleto-chatgpt

## How to contribute

If you want to contribute, you will need to:

## Fork all Hubleto repositories

  * https://github.com/hubleto/framework
  * https://github.com/hubleto/apps
  * https://github.com/hubleto/main
  * https://github.com/hubleto/react-ui

> **IMPORTANT** Fork all repositories into one folder, e.g. /var/www/hubleto.

## Re-create your Hubleto folder

```
composer create-project hubleto/erp . dev-main
./bin/make-dev /var/www/hubleto
```


## Production build

## We are looking for partners

Hubleto is a community project and so it needs your help. We provide complete Hubleto code for free and maintain its development.

We will be very happy to get in touch with any company or individuals, willing to act as reselling partner or consultant.

Do not hesitate and contact us via [LinkedIn](https://www.linkedin.com/company/106117849/admin/dashboard/) or [Reddit](https://www.reddit.com/r/hubleto/).

## See also

  * https://github.com/hubleto/main - the 'main' repository for Hubleto
  * https://developer.hubleto.com - developer guide for Hubleto
  * https://help.hubleto.com - user guide for Hubleto
  * https://www.hubleto.com - a presentation website
  * https://community.hubleto.com - a discussion forum about everything related to Hubleto
  * https://www.hubleto.com/dem - try demo
