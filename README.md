# DIVI Extension

A helpful plugin for Wordpress's [divi](https://www.elegantthemes.com/gallery/divi/) theme and  [divi-builder](https://www.elegantthemes.com/plugins/divi-builder/) plugin that adds in CSS classes, few PHP functions, a library of prebuilt templates, and some reference documentation. The goal is to reduce repetitive DIVI-clicks while creating pages, and offer a repo for older sites to gain new features as they are created.

## Template Library

⬇️   **[Download all](#)**

| ![](https://raw.githubusercontent.com/davidsword/divi-extension/master/src/banner.jpg)  | ![](https://raw.githubusercontent.com/davidsword/divi-extension/master/src/tiles.jpg) | ![](https://raw.githubusercontent.com/davidsword/divi-extension/master/src/cta.jpg) | ![](https://raw.githubusercontent.com/davidsword/divi-extension/master/src/textheavy.jpg) |
| ------------- | ----- | ----- | ----- |
| [⬇️ Banner](#)  | [⬇️ Tiles](#) | [⬇️ CTA](#) | [⬇️ Text Heavy](#) |

Note:

* All templates are Sections

## CSS Classes

| Class Name  | Description | Sec | Row | Col | Mod | Limit |
| ------------- | ----- | ----- | ----- | ----- | ----- | ----- |
| `divi-subheading`  | text larger centers text, makes large | -  | - | -  | ✅  | Text |
| `divi-max` & `divi-max--640`, `divi-max--760`, `divi-max--840`, `divi-max--960`  | centers element, limits width to max### px's | ✅  | ✅ | -  | ✅  | - |
| `divi-tile` & `divi-tile--ltr`, `divi-tile--rtl` | tile layout, ltr = text left img right, rtl = img left txt right | ✅  | - | -  | - | - |
| `divi-mobile-hide` | hide an element on anything <760 | ✅  | ✅  | ✅  | ✅  | -  |
| `divi-mobile-padding`  | add's `5%` padding-left/right when viewport < `1080px` | ✅  | ✅  | ✅  | ✅  | - |

Note:

* Mobile viewport kicks out at `760px`
* [BEM](http://getbem.com/naming/) naming in effect. When adding class into DIVI, do: `divi-tile divi-tile--640`
* legacy support in place for < 20180413

## HTML

| Variable | Scope | Description | Theme | Plugin |
| ------------- | --- | ----- | --- | --- |
| `%%YEAR%%`  | `#footer-info` | use in place where to show the current year (via jQuery) | ✅  | - |

## PHP

* **Removes** "Projects" custom post type
