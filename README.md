Test Plugin 3 - Testing plugin
===============
* Contributors: dd32, dd128
* Stable Tag: 7.0.0
* Tags: test-plugins
* Requires at least: 5.0
* Requires PHP: 7.0
* Tested up to: 5.2
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
* Donate link: http://example.com/
* Development link: https://github.com/dd32/test-plugin-3/

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here please.

## Description #

For best README.md support, the fields under the plugin title, Contributors.. Tags.. etc, should be in a similar format to this readme example. This means that there should be no characters after the : other than the value, no formatting, just a value and new line.

This is the long description.  No limit, and you can use Markdown (as well as in the following sections).

For backwards compatibility, if this section is missing, the full length of the short description will be used, and
Markdown parsed.

A few notes about the sections above:

*   "Contributors" is a comma separated list of wp.org/wp-plugins.org usernames
*   "Tags" is a comma separated list of tags that apply to the plugin
*   "Requires at least" is the lowest version that the plugin will work on
*   "Tested up to" is the highest version that you've *successfully used to test the plugin*. Note that it might work on
higher versions... this is just the highest one you've verified.
*   Stable tag should indicate the Subversion "tag" of the latest stable version, or "trunk," if you use `/trunk/` for
stable.

    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

Testing out some Markdown bugs:
Examples:
`define( 'TC_PRE', 'Theme Review:[[br]]
- Themes should be reviewed using "define(\'WP_DEBUG\', true);" in wp-config.php[[br]]
- Themes should be reviewed using the test data from the Theme Checklists (TC)
-----
' );`

`define( 'TC_POST', 'Feel free to make use of the contact details below if you have any questions,
comments, or feedback:[[br]]
[[br]]
* Leave a comment on this ticket[[br]]
* Send an email to the Theme Review email list[[br]]
* Use the #wordpress-themes IRC channel on Freenode.' );`


three backtics:
```
add_action( 'init', function() {
  // do stuff
} );
```

or indents
    add_action( 'init', function() {
      // do stuff
    } );

## Installation

This section describes how to install the plugin and get it working.

e.g.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

## Frequently Asked Questions

### A question that someone might have

An answer to that question.

### What about foo bar?

Answer to foo bar dilemma.

### Markdown 1
`body, h1, p {
    color: #f1f1f1 !important;
}
#wpwrap {
    background-color: #5f5f5f !important;
}`

### Markdown 2
`#wpwrap {
    background-color: #5f5f5f !important;
}
body, h1, p {
    color: #f1f1f1 !important;
}`

## Screenshot

1. This screenshot description corresponds to a potentially localised screenshot in the /assets/ directory.

## Changelog

### 1.0
* A change since the previous version.
* Another change.
* Another change this time that means something.
* A changelog line to test https://meta.trac.wordpress.org/changeset/8412

## Upgrade Notice

### 1.0
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

### 5.0
Upgrade to Version 5.0 for major nothingness. Nothing has changed.

## Arbitrary section

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

## A brief Markdown Example

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`
