# Hubleto ERP

Production-ready Hubleto ERP. Free to use, ready to be customized.

## Install

To install production-ready Hubleto, follow these steps:

  1. Create an empty project folder: `mkdir /var/www/html/hubleto`
  2. Download Hubleto via composer: `composer create-project hubleto/erp-project /var/www/html/hubleto --no-dev`
  3. Initialize Hubleto: `php hubleto init`

## Custom apps

To customize your Hubleto, create your `custom` apps:

  1. Create app scaffolding: `php hubleto create app CarRental`
  2. Create the model: `php hubleto create model CarRental Car`
  3. Create basic UI: `php hubleto create mvc CarRental Car`

> TIP: Check out `CLAUDE.md` instructions for better vibe-coding experience.

> 🌟 Enjoy Hubleto and star if you like it!

## Create your own React UI compnents

We recommend you to use free Hubleto React UI library to develop rich data management features into your apps. Read more about [Hubleto's React-based UI library](https://github.com/hubleto/react-ui).

Run commands below to install and use Hubleto React UI:

```
cd /var/www/html/hubleto
./bin/prepare-assets.sh
npm run build
```

## Contribute

If you want to contribute to Hubleto core, follow these steps:

  1. Create folder for Hubleto codebase: `mkdir /var/www/html/hubleto-core`
  2. Fork `hubleto/erp`, `hubleto/framework`, `hubleto/assets`, `hubleto/react-ui` into `hubleto-core` folder.
     *Note: If you have access to enterprise repository, you may fork this as well.*
  4. Symlink these forks by running following commands: `cd /var/www/html/hubleto` + `./bin/setup-dev-env.sh ../hubleto-core`
     *Note: the `setup-dev-env.sh` takes one argument - relative path to your Hubleto codebase*
  5. Initialize Hubleto: `php hubleto init`

Now, your `http://localhost/hubleto` will be rendered using the codebase in `hubleto-core`.

> TIP: Use `npm run watch` to automatically compile assets on every change in the UI.

## Support us

Hubleto is a community project and so it needs your help. We provide complete Hubleto code for free and maintain its development.

We will be very happy to get in touch with any company or individuals, willing to act as reseller or consultant.

Do not hesitate and contact us via [LinkedIn](https://www.linkedin.com/company/hubleto) or [Reddit](https://www.reddit.com/r/hubleto).

## See also

  * https://github.com/hubleto/erp - the 'main' repository for Hubleto
  * https://developer.hubleto.eu - developer guide for Hubleto
  * https://help.hubleto.eu - user guide for Hubleto
  * https://www.hubleto.eu - a presentation website
  * https://community.hubleto.eu - a discussion forum about everything related to Hubleto
  * https://www.hubleto.eu/demo - try demo
