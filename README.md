# Google Theme

A Google Analytics inspired theme for Matomo, in light and dark mode.

## Features

- **Google Analytics look and feel**: Material surfaces, the Google blue accent and clean spacing across dashboards, widgets and reports, familiar to teams coming from Google Analytics.
- **Light and dark mode**: both Matomo color schemes are mapped to Google's Material light and dark scales. Each user keeps choosing Light, Dark or Match browser in their personal settings.
- **Google Sans typography**: the Product Sans regular, medium and bold weights are bundled with the theme, so no font is loaded from Google or any third party.
- **Refined components**: header, side menu, cards, dashboard widgets (laid out like the Matomo 6 report header, with 16px between widgets), alerts, buttons, sparklines, search and visitor log. KPIWidgets plugin widgets are supported.
- **Native theme API**: colors are set through Matomo's `Theme.configureThemeVariables` event as `[light, dark]` pairs, so core and third party plugins pick them up.
- **Purely visual**: no JavaScript and no markup change. Deactivate the theme and Matomo returns to its default look.

## Requirements

- Matomo 6 (`>=6.0.0-b1,<7.0.0-b1`)
- PHP 8.1 or higher
- On Matomo 5.10 or later, install Google Theme 5.10.x instead.

## Installation / Configuration

1. Go to *Administration > Platform > Marketplace*, filter by **Themes** and search for "Google Theme".
2. Click **Install**, then **Activate**. A theme applies to the whole Matomo instance.
3. Each user picks the light or dark mode in their personal settings.

There are no settings. To customize the colors, override the `--theme-color-*` CSS variables from your own plugin, or fork the theme. See [docs/index.md](docs/index.md).

## Need help with Matomo?

Openmost is an official Matomo Implementation Partner. We also build [custom Matomo themes](https://openmost.com/matomo/services/custom-theme?utm_source=matomo_marketplace&utm_medium=referral&utm_campaign=services&utm_content=googletheme) in your own brand colours and fonts, on the official theme API, in light and dark mode.

## Support

- Homepage: https://openmost.com/matomo/extensions/google-theme
- Issues: https://github.com/openmost/GoogleTheme/issues
- Email: ronan@openmost.com

## Screenshots

See the `screenshots/` folder, or the plugin page on the Matomo Marketplace.

## Credits and license

Maintained by [Openmost](https://openmost.com). Sparkline approach inspired by https://lw1.at. GPL v3 or later, see [LICENSE](LICENSE). Google Analytics and Google Sans are trademarks of Google LLC, this theme is not affiliated with Google.
