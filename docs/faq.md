## FAQ

### How do I install the theme?

Google Theme is published on the official Matomo Marketplace and installs the same way as any plugin:

1. Open the Matomo administration panel.
2. Go to **Marketplace** and switch the filter to **Themes**.
3. Search for **Google Theme**.
4. Click **Install**, then **Activate**.

You can also install manually by copying the `GoogleTheme` folder into the `plugins/` directory of your Matomo installation and activating it from the admin panel.

### Which Matomo versions are supported?

Google Theme **6.x** supports Matomo 6. For Matomo 5.10 and later, use Google Theme 5.10.x. The exact requirement is declared in `plugin.json` and enforced by Matomo at install time.

### Does the theme apply to every user of my Matomo instance?

Yes. Matomo themes are instance-wide: once activated, every user sees the new look. Individual users cannot opt out, but they can still toggle between Matomo's light and dark color schemes from their personal settings — the theme supports both.

### Does Google Theme support dark mode?

Yes. Every color variable is mapped to both Matomo color schemes, so the interface follows whichever mode the user has selected without any additional configuration.

### Will it break my Matomo installation or any plugins?

No. The theme is purely visual — it overrides CSS variables and a small set of component styles via LESS. It does not modify HTML, JavaScript, or any reporting logic, so it should not conflict with other plugins. If you ever uninstall it, Matomo immediately falls back to the default theme.

### Does the theme make external requests (e.g. for fonts)?

No. The Product Sans regular, medium and bold weights are bundled with the theme under `fonts/` and served from your own Matomo instance. There are no requests to Google or any third party.

### Can I customize the colors or fork the theme?

Absolutely. Color values and the font family are centralized in `GoogleTheme.php`, and component styles live as small LESS files under `stylesheets/`. Edit those, recompile via Matomo's normal asset pipeline, and you have your own variant. The theme is GPL v3+, so feel free to fork it.

### How can I contribute?

- File issues or open pull requests on GitHub: <https://github.com/openmost/GoogleTheme>.
- Email: ronan@openmost.com.

Bug reports with screenshots (light and dark mode if relevant) and the affected Matomo version are especially helpful.

### How long will the theme be maintained?

It is actively maintained by [Openmost](https://openmost.com) and used in production on several Matomo instances, so fixes for visible regressions usually land quickly. Compatibility updates follow each new Matomo major release.
