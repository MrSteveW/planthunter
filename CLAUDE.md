# PlantHunter - Claude Instructions

## Stack
- WordPress via Bedrock (Composer-managed)
- Underscores (_s) starter theme (PHP-based, no page builders)
- Local dev via Laravel Herd at `planthunter.test`

## Composer
Before giving any `composer require` or `composer remove` command, read `composer.json` and check the `repositories` block to confirm the correct package prefix. Do not assume `wpackagist-plugin/` — this project uses `repo.wp-packages.org` with the prefix `wp-plugin/`.

## Theme
The theme uses PHP templates (`front-page.php`, etc.), not the Gutenberg block editor. Do not recommend Gutenberg-only plugins or block editor workflows. Plugins must support shortcodes so they can be called from PHP templates via `do_shortcode()`.

## General
- User is experienced with Laravel and Next.js but finds WordPress confusing — explain WordPress concepts by analogy to those frameworks where helpful.
- Do not suggest building things from scratch (e.g. custom JS carousel implementations) when a plugin will do the job.
