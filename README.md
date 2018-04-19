# DIVI Helpers

A helpful plugin for Wordpress's [divi](https://www.elegantthemes.com/gallery/divi/) theme and  [divi-builder](https://www.elegantthemes.com/plugins/divi-builder/) plugin that adds in CSS classes, few PHP functions, a library of prebuilt templates, and some reference documentation. The goal is to reduce repetitive DIVI-clicks and inline styles while creating pages, as well as offering new features as they are added.

## Template Library

⬇️   **[Download all](https://raw.githubusercontent.com/davidsword/divi-helpers/master/layouts/divi-helpers-all.json)**

| ![https://raw.githubusercontent.com/davidsword/divi-helpers/master/layouts/divi-helpers-hero.json](https://raw.githubusercontent.com/davidsword/divi-helpers/master/src/banner.jpg)  | ![https://raw.githubusercontent.com/davidsword/divi-helpers/master/layouts/divi-helpers-tiles.json](https://raw.githubusercontent.com/davidsword/divi-helpers/master/src/tiles.jpg) | ![https://raw.githubusercontent.com/davidsword/divi-helpers/master/layouts/divi-helpers-cta.json](https://raw.githubusercontent.com/davidsword/divi-helpers/master/src/cta.jpg) | ![https://raw.githubusercontent.com/davidsword/divi-helpers/master/layouts/divi-helpers-text-heavy.json](https://raw.githubusercontent.com/davidsword/divi-helpers/master/src/textheavy.jpg) |
| ------------- | ----- | ----- | ----- |
| [⬇️ Hero](https://raw.githubusercontent.com/davidsword/divi-helpers/master/layouts/divi-helpers-hero.json)  | [⬇️ Tiles](https://raw.githubusercontent.com/davidsword/divi-helpers/master/layouts/divi-helpers-tiles.json) | [⬇️ CTA](https://raw.githubusercontent.com/davidsword/divi-helpers/master/layouts/divi-helpers-cta.json) | [⬇️ Text Heavy](https://raw.githubusercontent.com/davidsword/divi-helpers/master/layouts/divi-helpers-text-heavy.json) |

Note:

* All templates are Sections

## CSS Classes

| Class Name  | Description | Sec | Row | Col | Mod | Limit |
| ------------- | ----- | :-----: | :-----: | :-----: | :-----: | ----- |
| `divi-subheading`  | text larger centers text, makes large | -  | - | -  | ✅  | Text |
| `divi-max` | centers element, limits width to 640px | ✅  | ✅ | -  | ✅  | - |
| * `divi-max--760`  | modifies max-with to 760px | ✅  | ✅ | -  | ✅  | - |
| * `divi-max--840`  | modifies max-with to 840px | ✅  | ✅ | -  | ✅  | - |
| * `divi-max--960`  | modifies max-with to 960px | ✅  | ✅ | -  | ✅  | - |
| `divi-tile` | row two column boxes. L: text, R: bg img cover | ✅  | - | -  | - | - |
| * `divi-tile__invert` | modifier for above, inverts position of txt/img | -  | ✅ | -  | - | - |
| `divi-hero`  | creates hero banner w presets css values | ✅   | - | -  | - | - |
| `divi-middle-me`  | align an element vertically center | -  | - | -  | ✅  | - |
| `divi-mobile-hide` | hide an element on anything <760 | ✅  | ✅  | ✅  | ✅  | -  |
| `divi-mobile-padding`  | add's `5%` padding-left/right when viewport < `760px` | ✅  | ✅  | ✅  | ✅  | - |

Note:

* \* [BEM](http://getbem.com/naming/) naming in effect. When adding class into DIVI, do: `divi-tile divi-tile--r2l`
* ignore legacy in `.css` - it's for sites using alpha of this < 20180413
* Mobile viewport kicks out at `760px`

## HTML

| Variable | Scope | Description | Theme | Plugin |
| ------------- | --- | ----- | :---: | :---: |
| `%%YEAR%%`  | `#footer-info` | use in place where to show the current year (via jQuery) | ✅  | - |

## PHP

* **Removes** "Projects" custom post type
