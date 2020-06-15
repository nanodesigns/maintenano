# CHANGELOG

## Unreleased

<details>
  <summary>
    Changes that have landed in develop but are not yet released.
    <strong>Click to see more</strong>.
  </summary>

* Yet to come...

</details>

## v0.0.1 - 2020-06-15 - Initial Alpha Release

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
