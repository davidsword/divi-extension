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
| `diviSubheading`  | text larger centers text, makes large | -  | - | -  | ✅  | Text |
| `diviMax` & `diviMax--640`, `diviMax--760`, `diviMax--840`, `diviMax--960`  | centers element, limits width to max### px's | ✅  | ✅ | -  | ✅  | - |
| `diviTile` & `diviTile--ltr`, `diviTile--rtl` | tile layout, ltr = text left img right, rtl = img left txt right | ✅  | - | -  | - | - |
| `diviMobileHide` | hide an element on anything <760 | ✅  | ✅  | ✅  | ✅  | -  |
| `diviMobilePadding`  | add's `5%` padding-left/right when viewport < `1080px` | ✅  | ✅  | ✅  | ✅  | - |

Note:

* Mobile viewport kicks out at `760px`
* BEM naming in effect, eg, `diviTile diviTile--640` is required
* legacy support in place for < 20180413

## HTML

| Variable | Scope | Description | Theme Only |
| ------------- | --- | ----- | --- |
| `%%YEAR%%`  | `#footer-info` | use in place where to show the current year (via jQuery) | ✅  |

## PHP

* **Removes** "Projects" custom post type
