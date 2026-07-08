# BuddyBoss Classic Forum Admin

A small WordPress plugin that restores the classic admin screens for BuddyBoss forums, topics, and replies.

## Why this exists

BuddyBoss 3.0 moved forum management into a new React-based interface called Settings 2.0. The old `edit.php` list screens for forums, topics, and replies are gone, and any request to open them redirects to the new UI.

The new UI drops features many admin teams rely on every day:

- Custom admin columns
- ACF and WP Fusion metaboxes
- Filtering by post status
- Sortable column headers
- URL-based filters
- Row actions like Edit, Duplicate, and Quick Edit
- Direct edit links

This plugin brings the classic screens back without touching BuddyBoss itself.

## What it does

- Removes the redirect that forces you into Settings 2.0
- Re-registers the `forum`, `topic`, and `reply` post types so they show up in the WordPress admin menu again

After activation you'll see three new menu items:

- **Forums (Classic)**
- **Topics (Classic)**
- **Replies (Classic)**

Each one is the standard WordPress list screen, with all your columns, filters, and metaboxes working as before.

## Installation

1. Download or clone this repo into `wp-content/plugins/buddyboss-classic-forum-admin`
2. Activate **BuddyBoss Classic Forum Admin** in the WordPress admin under Plugins

No settings. It works as soon as it's active.

## Requirements

- WordPress with the BuddyBoss Platform plugin (3.0 or later, where Settings 2.0 was introduced)

## Notes

- The plugin doesn't remove or change the new Settings 2.0 UI. Both stay available.
- It only changes how the three forum post types are registered in the admin. It doesn't touch your data.
- Deactivate the plugin and everything goes back to how BuddyBoss set it up.

## Author

[Memberfix](https://memberfix.rocks)
