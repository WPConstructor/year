# WPConstructor Year

**Very lightweight WordPress plugin to display the current year or a year range using a shortcode.**

## Description

WPConstructor Year is a very lightweight WordPress plugin that provides a simple shortcode to display the current year.

It also supports an optional `since` attribute to display a year range starting from a specified year up to the current year.

## Shortcode

```text
[wpcn_year]
```

Displays the current year.

**Example (2027):**

```text
2027
```

## Attributes

### `since`

Defines the starting year of a year range.

**Example:**

```text
[wpcn_year since="2026"]
```

Output depends on the current year:

| Current year | Output |
|---|---|
| 2026 | 2026 |
| 2027 | 2026 - 2027 |
| 2028 | 2026 - 2028 |

If the `since` attribute is omitted, only the current year is displayed.

## Usage Examples

**Display the current year:**

```text
[wpcn_year]
```

**Display a year range starting in 2026:**

```text
[wpcn_year since="2026"]
```

**Display a year range starting in 2020:**

```text
[wpcn_year since="2020"]
```

## Features

- Very lightweight.
- No dependencies.
- No database queries.
- Uses PHP's `gmdate()` function.
- Automatically updates the year.
- Supports an optional `since` attribute.
- Compatible with WordPress posts, pages, widgets, and other shortcode-enabled areas.

## Installation

1. Upload the `wpcn-year` folder to `/wp-content/plugins/`.
2. Activate **WPConstructor Year** in the WordPress Plugins screen.
3. Use `[wpcn_year]` or `[wpcn_year since="2026"]` anywhere shortcodes are supported.

## Requirements

- WordPress
- PHP

## License

GPL-3.0-or-later