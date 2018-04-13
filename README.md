# DIVI Extension

A helpful plugin for Wordpress's [divi](https://www.elegantthemes.com/gallery/divi/) theme and  [divi-builder](https://www.elegantthemes.com/plugins/divi-builder/) plugin that adds in CSS classes, few PHP functions, a library of prebuilt templates, and some reference documentation. The goal is to reduce repetitive DIVI-clicks while creating pages, and offer a repo for older sites to gain new features as they are created.

---

## Template Library

⬇️   **[Download all](#)**

* [Banner](#)
* [Tiles](#)
* [CTA](#)
* [Text Heavy](#)

### CSS Classes

| Class Name  | Description | Sec | Row | Col | Mod | Mod Limit |
| ------------- | ----- | ----- | ----- | ----- | ----- | ----- |
| `mobilePadding`  | add's `5%` padding-left/right when viewport < `1080px` | ✅  | ✅  | ✅  | ✅  | - |
| `diviExcerpt`, `diviSubheading`  | text larger centers text, makes large | -  | - | -  | ✅  | Text |
| `max640`, `max820`, `max960`  | centers element, limits width to max### px's | ✅  | ✅ | -  | ✅  | - |
| `tileLtr` | tile layout, text on left - img right | ✅  | - | -  | - | - |
| `tileRtl` | tile layout, img on left - text right | ✅  | - | -  | - | - |

## HTML

| Placeholder  | Description |
| ------------- | ----- |
| `%%YEAR%%`  | placeholder to get the current year (via Javascript) |

## PHP

* removes "Projects" custom post type
