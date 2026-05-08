<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\GoogleTheme;

use Piwik\Plugin;

class GoogleTheme extends Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $vars)
    {
        // Brand (Google blue) — shared across light & dark
        $brand          = '#1a73e8';
        $brandLight     = '#4285f4';
        $brandLighter   = '#8ab4f8';
        $brandDark      = '#1557b0';

        // Light surfaces (Google Material light scale)
        $lightSurfaceBase     = '#f8f9fa';
        $lightSurfaceRaised   = '#ffffff';
        $lightSurfaceOverlay  = '#f1f3f4';
        $lightSurfaceGround   = '#e8eaed';

        // Dark surfaces (Google Material dark scale)
        $darkSurfaceBase      = '#202124';
        $darkSurfaceRaised    = '#292a2d';
        $darkSurfaceOverlay   = '#3c4043';
        $darkSurfaceGround    = '#17181b';

        // Text scales
        $lightTextPrimary     = '#202124';
        $lightTextSecondary   = '#3c4043';
        $lightTextTertiary    = '#5f6368';
        $lightTextDisabled    = '#9aa0a6';

        $darkTextPrimary      = '#e8eaed';
        $darkTextSecondary    = 'rgba(232, 234, 237, 0.87)';
        $darkTextTertiary     = 'rgba(232, 234, 237, 0.65)';
        $darkTextDisabled     = 'rgba(232, 234, 237, 0.40)';

        // Borders
        $lightBorder          = '#dadce0';
        $lightBorderStrong    = '#bdc1c6';
        $darkBorder           = '#3c4043';
        $darkBorderStrong     = '#5f6368';

        // Font
        $vars->fontFamilyBase = '"Google Sans", Arial, Helvetica, sans-serif';

        // Brand
        $vars->colorBrand              = [$brand, $brandLighter];
        $vars->colorBrandContrast      = ['#ffffff', '#202124'];

        // Focus
        $vars->colorFocusRing            = [$brand, $brandLighter];
        $vars->colorFocusRingAlternative = [$brand, $brandLighter];

        // Text
        $vars->colorTextHighContrast   = [$lightTextPrimary, $darkTextPrimary];
        $vars->colorText               = [$lightTextPrimary, $darkTextSecondary];
        $vars->colorTextContrast       = [$lightTextSecondary, $darkTextPrimary];
        $vars->colorTextLight          = [$lightTextTertiary, $darkTextTertiary];
        $vars->colorTextLighter        = [$lightTextTertiary, $darkTextTertiary];
        $vars->colorTextOnDisabled     = [$lightTextDisabled, $darkTextDisabled];
        $vars->colorTextDisabled       = [$lightTextDisabled, $darkTextDisabled];
        $vars->colorTextInvert         = ['#ffffff', '#202124'];
        $vars->colorTextInvertContrast = ['#ffffff', '#000000'];
        $vars->colorTextInvertLight    = ['#dadce0', '#5f6368'];

        // Links
        $vars->colorLink = ['#1976d2', $brandLighter];

        // Charts (kept distinctive in both modes)
        $vars->colorBaseSeries = '#ee3024';

        // Headlines
        $vars->colorHeadlineAlternative = [$lightTextSecondary, $darkTextTertiary];

        // Header (top bar)
        $vars->colorHeaderBackground = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorHeaderText       = [$lightTextTertiary, $darkTextPrimary];

        // Menus
        $vars->colorMenuContrastText            = [$lightTextPrimary, $darkTextTertiary];
        $vars->colorMenuContrastTextSelected    = [$brand, $brandLighter];
        $vars->colorMenuContrastTextActive      = [$brandDark, $darkTextPrimary];
        $vars->colorMenuContrastBackground      = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorMenuContrastBackgroundHover = [$lightSurfaceOverlay, $darkSurfaceOverlay];

        // Widgets
        $vars->colorWidgetBackground             = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorWidgetBorder                 = [$lightBorder, $darkBorder];
        $vars->colorWidgetExportedBackgroundBase = [$lightSurfaceOverlay, $darkSurfaceRaised];
        $vars->colorWidgetTitleBackground        = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorWidgetTitleText              = [$lightTextPrimary, $darkTextPrimary];

        // Backgrounds
        $vars->colorBackgroundBase         = [$lightSurfaceBase, $darkSurfaceBase];
        $vars->colorBackgroundTinyContrast = [$lightSurfaceOverlay, $darkSurfaceOverlay];
        $vars->colorBackgroundLowContrast  = [$lightSurfaceGround, $darkSurfaceRaised];
        $vars->colorBackgroundContrast     = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorBackgroundHighContrast = ['#202020', $darkSurfaceGround];
        $vars->colorBackgroundDisabled     = [$lightSurfaceGround, '#303339'];

        // Borders
        $vars->colorBorder      = [$lightBorder, $darkBorder];
        $vars->colorBorderLight = [$lightBorderStrong, $darkBorderStrong];

        // Code blocks
        $vars->colorCode           = ['#f3f3f3', $darkTextSecondary];
        $vars->colorCodeBackground = ['#4d4d4d', $darkSurfaceOverlay];

        // Box shadow
        $vars->colorBoxShadow = ['rgba(60, 64, 67, 0.15)', 'rgba(0, 0, 0, 0.4)'];

        // Illustration filter (invert white pngs/svgs to look right on dark)
        $vars->filterOnIllustration = ['none', 'brightness(89%) invert(100%) hue-rotate(180deg)'];
    }
}
