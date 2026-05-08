# Google Theme for Matomo

## Description

Bring the look and feel of Google Analytics to your Matomo instance — without losing any of the features that make Matomo great.

Google Theme is a purely visual theme that re-skins the Matomo interface with the typography, colors, and surface styles familiar to anyone coming from Google Analytics. It does not touch HTML, JavaScript, or any reporting logic, so it works alongside the rest of your Matomo setup with no risk of conflict.

### Highlights

- **Google Analytics-inspired design** — Material-style surfaces, the Google blue accent, and clean spacing across dashboards, widgets, and reports.
- **Light and dark mode** — Both Matomo color schemes are mapped to Google's Material light and dark scales. Switch from your user settings; the theme adapts automatically.
- **Google Sans typography** — The full Product Sans family is bundled with the theme, so no external font requests are made.
- **Refined components** — Header, side menu, cards, widgets, alerts, sparklines, search, and the visitor log have been restyled for visual consistency.
- **Pure CSS, zero behavior changes** — No JavaScript, no markup overrides. If you uninstall the theme, Matomo returns to its default appearance instantly.
- **Built with LESS** — Uses Matomo's own theme variable system (`Theme.configureThemeVariables`) for forward compatibility.

### Requirements

- Matomo **5.10.0** or later (compatible up to but not including Matomo 6.x)

### Installation

The recommended way is through the Matomo Marketplace:

1. Sign in to your Matomo administration panel.
2. Go to **Marketplace** and switch the filter to **Themes**.
3. Search for **Google Theme**.
4. Click **Install**, then **Activate**.

Once activated, the theme applies to every user of the Matomo instance.

### Manual installation

1. Download the latest release from the [GitHub repository](https://github.com/openmost/GoogleTheme).
2. Copy the `GoogleTheme` folder into `plugins/` at the root of your Matomo installation.
3. In Matomo, go to **Administration → Plugins**, find **GoogleTheme**, and activate it.
4. Go to **Administration → General settings → Theme** and select **GoogleTheme**.

### Documentation

- [Documentation](docs/index.md) — what the theme overrides and how it is organized.
- [FAQ](docs/faq.md) — installation, scope, and contribution questions.
- [Changelog](CHANGELOG.md) — release history.

### Support

- Marketplace page: <https://openmost.com/products/matomo-google-theme/>
- Issues: <https://github.com/openmost/GoogleTheme/issues>
- Contact: ronan@openmost.com

### Contributing

Pull requests are welcome. The theme is intentionally split into small LESS components under `stylesheets/components/` and `stylesheets/layout/` — please keep new rules organized the same way and prefer Matomo's theme variables over hard-coded values.

### License

GPL v3 or later. See [LICENSE](LICENSE).

## Credits

Maintained by [Openmost](https://openmost.com). Sparkline approach inspired by <https://lw1.at>.
