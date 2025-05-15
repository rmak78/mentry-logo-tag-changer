# Mentry Logo H1 to Div

**A WordPress plugin to replace the `<h1>` tag with a `<div>` for the Mentry theme logo output.**

---

## Description

By default, the [Mentry](https://themeforest.net/item/mentry-business-consulting-wordpress-theme/22623013) WordPress theme wraps the site logo in an `<h1>` tag on the homepage. This plugin overrides the theme’s `thsn_logo()` function to always use a `<div>` instead, improving flexibility for site owners who want to avoid multiple `<h1>` tags or prefer different markup.

- **No theme file editing required.**
- **Works with Mentry’s pluggable logo function.**
- **Maintains all original logo features, including sticky and responsive logos.**

---

## Installation

1. **Download** or clone this repository.
2. Upload the `mentry-logo-div-wrapper.php` file to your WordPress site's `/wp-content/plugins/` directory.
3. Go to your WordPress admin dashboard, navigate to **Plugins**, and activate **Mentry Logo H1 to Div**.

---

## Usage

Once activated, the plugin will:
- Override the default `thsn_logo()` function of the Mentry theme.
- Wrap the logo in a `<div class="site-title">` instead of an `<h1>` tag, on all pages.

No further configuration is required.

---

## Requirements

- WordPress 5.0 or higher
- Mentry theme (with the pluggable `thsn_logo()` function)

---

## Author

- **Rana Mansoor Akbar Khan**
- [GitHub](https://github.com/rmak78)
- [WordPress.org Profile](https://profiles.wordpress.org/rmak78/)

---

## License

This plugin is released under the [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

---

## Contributing

Pull requests and suggestions are welcome! Please open an issue first to discuss any major changes.

---

## Disclaimer

This plugin is designed specifically for the Mentry theme and may not work with other themes. Use at your own risk and always back up your site before making changes.
