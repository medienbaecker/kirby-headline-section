# Kirby headline section

Kirby already comes with a built-in [headline field](https://getkirby.com/docs/reference/panel/fields/headline). But just like with the [info field](https://getkirby.com/docs/reference/panel/fields/info) that also exists as an [info section](https://getkirby.com/docs/reference/panel/sections/info), you sometimes need a headline as a **section** instead of a field.

This plugin provides that functionality, allowing you to add visual separation and organization to your Panel layouts without nested fields sections.

## Installation

### Composer

```bash
composer require medienbaecker/kirby-headline-section
```

### Manual

Download and copy this repository to `/site/plugins/kirby-headline-section`.

## Usage

Add the headline section to your blueprints:

```yml
sections:
  _footer:
    label: Footer
    type: headline
  footer_pages:
    type: pages
  footer_fields:
    type: fields
  fields:
    footer_text:
      label: Footer Text
      type: text
```
