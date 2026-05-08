## Documentation

Google Theme is a Matomo theme plugin that re-skins the standard interface to look and feel like Google Analytics. It is purely visual: no HTML, behavior, or reporting logic is modified.

### How the theme works

The theme hooks into Matomo's `Theme.configureThemeVariables` event to override the values of Matomo's built-in theme variables — colors, surfaces, borders, typography, focus rings, and so on. Because Matomo natively supports two color schemes, every variable is provided as a `[light, dark]` pair, which means **dark mode is supported out of the box** and follows whatever scheme the user picks in their settings.

On top of the variable mapping, a small set of LESS stylesheets refine specific components for a more cohesive Google-Analytics-style rendering.

### File layout

```
GoogleTheme/
├── GoogleTheme.php         # Plugin class — maps Matomo theme variables to Google's palette
├── plugin.json             # Plugin metadata (version, Matomo compatibility, stylesheet entry)
├── stylesheets/
│   ├── theme.less          # Entry point — imports everything below
│   ├── _fonts.less         # Google Sans (Product Sans) @font-face declarations
│   ├── layout/
│   │   ├── _root.less      # CSS custom properties / root-level rules
│   │   └── _main.less      # Page-level layout adjustments
│   └── components/
│       ├── _admin_users_list.less
│       ├── _alert.less
│       ├── _button.less
│       ├── _card.less
│       ├── _header.less
│       ├── _menu.less
│       ├── _search.less
│       ├── _sparkline.less
│       ├── _visitor_log.less
│       └── _widget.less
├── fonts/                  # Bundled Product Sans font files (no external requests)
├── docs/
└── screenshots/
```

### What is restyled

Component-level overrides live in `stylesheets/components/`:

- **Header** — top bar background, text color, alignment.
- **Side menu** — item spacing, hover and active states tuned to Google's selection style.
- **Cards** — page card surfaces and edges.
- **Widgets** — dashboard widget backgrounds, borders, and titles.
- **Alerts** — informational, success, warning, and error states.
- **Buttons** — primary, secondary, and icon button styles.
- **Search (QuickAccess)** — top search input.
- **Sparkline** — recolored to fit the theme palette.
- **Visitor log** — entry styling for the live visitor view.
- **Admin users list** — table refinements in the admin section.

### Color and typography

`GoogleTheme.php` defines:

- **Brand color** — Google blue (`#1a73e8`) with a lighter variant for dark mode.
- **Light surfaces** — `#ffffff`, `#f8f9fa`, `#f1f3f4`, `#e8eaed`.
- **Dark surfaces** — `#202124`, `#292a2d`, `#3c4043`, `#17181b`.
- **Text scales** — Google's Material text colors for both modes, including translucent variants in dark mode.
- **Font** — `"Google Sans", Arial, Helvetica, sans-serif`. The Product Sans family ships with the theme under `fonts/`.

If you want to fork or customize the palette, those values are the place to start.

### Contributing

The theme is deliberately split into small, focused LESS files. If you contribute, please:

- Keep new rules in the smallest relevant component file (or add a new one and import it from `theme.less`).
- Prefer Matomo's theme variables over hard-coded values when possible.
- Avoid changes to HTML structure or JavaScript — the theme stays purely visual on purpose.
- Test in both light and dark mode before opening a pull request.

Issues and pull requests: <https://github.com/openmost/GoogleTheme>.
