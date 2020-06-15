=== Maintenano - Simplest WordPress Maintenance Mode Plugin ===

Contributors: wzislam, nanodesigns
Tags: maintenance mode, under construction
Requires at least: 4.7.0
Tested up to: 5.4.2
Requires PHP: 5.0.0
Stable tag: 0.0.1
License: GPL-2.0+
License URI: https://www.gnu.org/licenses/gpl-2.0.txt

The simplest maintenance mode plugin for WordPress powered site. This is a developer-friendly plugin. Please see the 'Features' section to understand its purpose and the way it works.

== Description ==

The simplest maintenance mode plugin for WordPress powered site. This is a developer-friendly plugin. Please see the 'Features' section to understand its purpose and the way it works.

> **WARNING**\n
> This is NOT A FANCY PLUGIN for the maintenance mode. If you are looking for such one, please do not use this; better use the other available plugins instead.

= Features =

* Simple maintenace mode on Plugin Activation
* No database clutter
* No asset (CSS, JS, images etc.) loading
* Plugin deactivation can disable the maintenance mode
* Anybody other than the `administrator` can see the maintenance mode (Default)
* 503 Status Header (Default)
* No Cache Status Header (Default)
* Warn in admin panel using Admin Notice
* Translation-ready
* Front end template can be intercepted from the plugin or by using the associated filter hook
* Filter Hooks:
  * `maintenano_allowed_capability` (default: 'manage_options')
  * `maintenano_template`

= Contribute =

Maintenano is an Open Source and GPL licensed Free plugin. Feel free to contribute.

* [Fork on Github](https://github.com/nanodesigns/maintenano)
* [Report Bug](https://github.com/nanodesigns/maintenano/issues)

= Translation =

The plugin is completely translation-ready. You can find the `.pot` file under `i18n/languages/` if you want to translate in your own way.

Or, you can use software like [POEdit](https://poedit.net/download) ('cross-platform) or [EasyPO](http://www.eazypo.ca/), and using the plugins' `.pot` file you can easily translate the plugin locally.

= Connect with the team =

* [Website](https://nanodesignsbd.com?ref=maintenano)
* [Twitter](https://twitter.com/nanodesigns/)
* [Facebook](https://facebook.com/nanodesignsbd/)
* [LinkedIn](https://www.linkedin.com/company/nanodesigns/)

== Installation ==

= Manual Installation =

1. Visit the plugin page at: https://github.com/nanodesigns/maintenano/releases
2. From the latest release download the `.zip` file
3. Unzip the archive and cut/paste the folder to the `/wp-content/plugins/` directory
4. From admin 'Plugins' page, activate Maintenano plugin

== Changelog ==

[See changelog for all versions](https://github.com/nanodesigns/maintenano/blob/master/CHANGELOG.md).
