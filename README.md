# Maintenano - Simplest WordPress Maintenance Mode Plugin

The simplest maintenance mode plugin for WordPress powered site. This is a developer-friendly plugin. Please see the 'Features' section to understand its purpose and the way it works.

> **WARNING**<br>
> This is NOT A FANCY PLUGIN for the maintenance mode. If you are looking for such one, please do not use this; better use the other available plugins instead.

![Screenshot of Maintenano](https://user-images.githubusercontent.com/4551598/84660108-2f9cf180-af3a-11ea-957e-60a723fc157f.png)


## Features

- Simple maintenace mode on Plugin Activation
- No database clutter
- No asset (CSS, JS, images etc.) loading
- Plugin deactivation can disable the maintenance mode
- Anybody other than the `administrator` can see the maintenance mode (Default)
- 503 Status Header (Default)
- No Cache Status Header (Default)
- Warn in admin panel using Admin Notice
- Translation-ready
- Front end template can be intercepted from the plugin or by using the associated filter hook
- Filter Hooks:
  - `maintenano_allowed_capability` (default: 'manage_options')
  - `maintenano_template`

## FAQ

### 01. How to change the design?

The default layout is from the plugin's `view.php` (available under `templates/` directory). To override the layout simply copy the file (`view.php`) and create a directory named `maintenano` in your theme directory, and paste the file (file structure would be like: `{your_theme}/maintenano/view.php`). Now change the view however you want.

You can also intercept the template with `maintenano_template` filter hook.

### 02. How to change who can see the site?

When the maintenance mode is active, by default, only the `administrator` (with the capability `manage_options`) can see the site. You can change the capability with the `maintenano_allowed_capability` filter hook.

### 03. How to translate the plugin?

Locales can be placed under any of the following way:

- `WP_LANG_DIR/maintenano/LOCALE.mo`
- `WP_LANG_DIR/plugins/maintenano-LOCALE.mo`

### 04. How to change the footer text?

Fork the plugin and make your own version. Or, you can follow the FAQ#01 and change the text 😊

---
<sup>**nano**designs 20200615</sup>
