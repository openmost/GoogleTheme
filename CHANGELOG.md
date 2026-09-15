# Changelog

## 6.0.1

- Screenshots of the Matomo 6 interface.

## 6.0.0

- Compatibility with Matomo 6.x (`>=6.0.0-b1,<7.0.0-b1`), requires PHP 8.1+ and MySQL 8.0+ (or MariaDB 10.6+).
- Palette completed with the colors added in Matomo 6, in light and dark mode: success, input placeholder, alternative border and overlay shadow (Material elevation).
- Stylesheets use the Matomo 6 theme variables instead of the deprecated `widget-background`, `widget-border` and `border` ones.
- Dashboard widgets follow the Matomo 6 report header: title above the card without the header padding, widget controls aligned with the title.
- Tighter space between dashboard widgets (16px instead of 36px).
- KPIWidgets plugin support: the KPI value keeps a 20px space under the widget top border.
- Removed the empty config files.
- Removed the unused Product Sans font files (black, light, thin and italic styles), the theme now ships the regular, medium and bold weights only (1.2 MB to 300 KB).
- Plugin homepage on openmost.com.

## 5.10.2

- Fixed font paths to use relative URLs, enabling correct font loading on Matomo installations served from a subdirectory.
- Added styling for `.menuDropdown` submenus in the side navigation.
- Refined active menu state to preserve dropdown rendering.
- Cleaned up legacy commented styles in the menu component.

## 5.10.1

- Update README.md

## 5.10.0

- Full repaint on Google's Material light and dark scales, with native support for Matomo's dark color scheme.
- Reworked theme variable mapping: brand, surfaces, text, borders, focus rings, headers, menus, widgets, code blocks, and box shadows are now defined as `[light, dark]` pairs.
- New layout layer (`stylesheets/layout/_root.less`, `stylesheets/layout/_main.less`) for root-level and page-level rules.
- New `_alert.less` component for informational, success, warning, and error states.
- Refined header, side menu, cards, widgets, search, sparkline, and visitor log components for visual consistency in both modes.
- Switched typography to Google Sans (Product Sans) bundled locally — no external font requests.
- Removed legacy assets: `javascripts/theme.js`, the old `_variables.less`, and unused component files (`_control.less`, `_main.less` under `components/`).
- Bumped minimum required Matomo version to 5.10.0.

## 5.0.12

- Updated marketplace cover image.

## 5.0.11

- Updated documentation URL.

## 5.0.10

- Updated `plugin.json` metadata.

## 5.0.9

- Updated theme logo.

## 5.0.8

- Compatibility with Matomo 5.x.

## 1.2.6

- Fixed font ligatures with the Google font.

## 1.2.5

- Fixed font weight rendering on macOS.
- Fixed KPI widget padding.

## 1.2.4

- Fixed tag confusion in widget rendering.

## 1.2.3

- Fixed widget `.dataTable` content overflow.

## 1.2.2

- Fixed widget content overflow.

## 1.2.1

- Fixed help icon rendering in the lateral menu.

## 1.2.0

- New typography.
- Refreshed lateral menu UI.
- Refreshed cards UI.
- Refreshed widgets UI.

## 1.1.0

- Compatibility with Matomo 4.x.
- Fixed CSS padding for cards and tables.

## 1.0.5

- Updated screenshot labels.

## 1.0.4

- Updated default GitHub repository.

## 1.0.2

- Fixed `overflow: hidden` on cards causing dropdown clipping.

## 1.0.0

- Initial release.
- Documentation, description, and FAQ.
- Restyled QuickAccess search bar.
- Restyled small dashboard top buttons.
