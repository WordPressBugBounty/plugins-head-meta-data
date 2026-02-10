=== Head Meta Data ===

Plugin Name: Head Meta Data
Plugin URI: https://perishablepress.com/head-metadata-plus/
Description: Adds a custom set of &lt;meta&gt; tags to the &lt;head&gt; section of all posts &amp; pages.
Tags: meta, metadata, seo, robots
Author: Jeff Starr
Author URI: https://plugin-planet.com/
Donate link: https://monzillamedia.com/donate.html
Contributors: specialk
Requires at least: 4.7
Tested up to: 6.9
Stable tag: 20260209
Version:    20260209
Requires PHP: 5.6.20
Text Domain: head-meta-data
Domain Path: /languages
License: GPL v2 or later

Adds a custom set of &lt;meta&gt; tags to the &lt;head&gt; section of all posts &amp; pages.



== Description ==

> ✨ Add meta tags to your site
> ✨ Blazing fast performance
> ✨ Uses only 60KB of code!

Head Meta Data (HMD) improves the definition and semantic quality of your website by adding `<meta>` tags to the `<head>` section of your web pages. Super lightweight, fast, and user-friendly.


### 🤖 Default Meta Tags ###

Display any set of custom meta tags for your site:

	<head>
		
		<meta charset="utf-8">
		<meta name="abstract" content="Obsessive Web Development">
		<meta name="author" content="Jeff Starr (aka Perishable)">
		<meta name="classification" content="Website Development">
		<meta name="copyright" content="Copyright Perishable Press">
		<meta name="description" content="Web Development Tutorials">
		<meta name="designer" content="Jeff Starr @ Monzilla Media">
		<meta name="distribution" content="Global">
		<meta name="keywords" content="Web, WordPress, Tutorials">
		<meta name="language" content="en">
		<meta name="publisher" content="Perishable Press">
		<meta name="rating" content="General">
		<meta name="resource-type" content="Document">
		<meta name="revisit-after" content="3">
		<meta name="subject" content="Web Dev + WordPress + Security">
		<meta name="template" content="shapeSpace WordPress Theme">
		<meta name="robots" content="index,follow">
		
		<!-- plus you can add your own custom tags! -->
		
	</head>


### 🤖 Dynamic Meta Tags ###

Use shortcodes to dynamically output SEO meta tags:

	<title>[hmd_post_title] | My Awesome Website</title>
	<meta name="description" content="[hmd_post_excerpt]">

This outputs dynamic titles and descriptions, useful for SEO. You also can add custom meta tags and markup on specific posts and pages. Check out the [Installation tab](https://wordpress.org/plugins/head-meta-data/#installation) for more information.

> ✨ Help bots understand your content better


### 🤖 Features ###

* Simple and easy to use
* Clean, standards-based code
* Customize all `<meta>` tags
* Add your own custom `<meta>` tags
* Add custom meta tags on any post or page
* Supports X (Twitter) Cards and Facebook Open Graph tags
* Supports `<meta>`, `<link>`, `<base>`, `<title>`, and `<style>`
* Automatically adds tags to the `<head>` section of all pages
* Check out a Live Preview of your meta tags and custom tags
* Auto-populates tags using your site's information
* Use shortcodes to include dynamic information
* Easily disable any unwanted tags
* Lightweight, fast, and secure

> ✨ Check out [Head Meta Pro](https://plugin-planet.com/head-meta-pro/) to define tags for each page view


### 🤖 Shortcodes ###

Shortcodes enable you to include dynamic bits of information in your meta tags. Head Meta Data provides the following shortcodes:

	[hmd_post_excerpt]  Outputs post excerpt
	[hmd_post_date]     Outputs post date
	[hmd_post_author]   Outputs post author
	[hmd_post_title]    Outputs post title
	[hmd_post_cats]     Outputs post categories
	[hmd_post_tags]     Outputs post tags
	[hmd_site_tagline]  Outputs site tagline
	[hmd_site_title]    Outputs site title
	[hmd_year]          Outputs current year
	[hmd_tab]           Outputs tab space to tag markup

So you can display your own set of customized meta tags exactly as desired. Visit the [Installation tab](https://wordpress.org/plugins/head-meta-data/#installation) for more information.


### 🤖 Pro Features ###

The [Pro version](https://plugin-planet.com/head-meta-pro/) can do everything the free version can do, PLUS:

* Define meta tags for Custom Post Types
* Define meta tags for each type of page-view (e.g., home, posts, pages, archive, search)
* Define tags for Facebook (Open Graph)
* Define tags for X (Twitter)
* Define Facebook and X tags for each type of page view
* 40+ advanced [shortcut variables](https://plugin-planet.com/head-meta-pro-shortcut-variables/) like `%POST_AUTHOR%` and `%ARCHIVE_TYPE%`
* Dedicated "Meta Tags" meta box for posts and pages
* Add custom meta tags to any post or page-view
* Add custom script and style to any post or page-view
* Meta Tags box integrates with SEO plugins
* Additional meta tags beyond the free version
* Dedicated setting for `image_src` link tag
* Premium support for pro purchases

> ✨ Level up your meta tags with [Head Meta Pro &raquo;](https://plugin-planet.com/head-meta-pro/)


### 🤖 Privacy ###

This plugin does not collect or store any user data. It does not set any cookies, and it does not connect to any third-party locations. Thus, this plugin does not affect user privacy in any way.

Head Meta Data is developed and maintained by [Jeff Starr](https://x.com/perishable), 15-year [WordPress developer](https://plugin-planet.com/) and [book author](https://books.perishablepress.com/).


### 🤖 Support Development ###

I develop and maintain this free plugin with love for the WordPress community. To show support, you can [make a donation](https://monzillamedia.com/donate.html) or purchase one of my books: 

* [The Tao of WordPress](https://wp-tao.com/)
* [Digging into WordPress](https://digwp.com/)
* [.htaccess made easy](https://htaccessbook.com/)
* [WordPress Themes In Depth](https://wp-tao.com/wordpress-themes-book/)
* [Wizard's SQL Recipes for WordPress](https://books.perishablepress.com/downloads/wizards-collection-sql-recipes-wordpress/)

And/or purchase one of my premium WordPress plugins:

* [BBQ Pro](https://plugin-planet.com/bbq-pro/) - Blazing fast WordPress firewall
* [Blackhole Pro](https://plugin-planet.com/blackhole-pro/) - Automatically block bad bots
* [Banhammer Pro](https://plugin-planet.com/banhammer-pro/) - Monitor traffic and ban the bad guys
* [GA Google Analytics Pro](https://plugin-planet.com/ga-google-analytics-pro/) - Connect WordPress to Google Analytics
* [Head Meta Pro](https://plugin-planet.com/head-meta-pro/) - Ultimate Meta Tags for WordPress
* [Simple Ajax Chat Pro](https://plugin-planet.com/simple-ajax-chat-pro/) - Unlimited chat rooms
* [USP Pro](https://plugin-planet.com/usp-pro/) - Unlimited front-end forms

Links, tweets and likes also appreciated. Thanks! :)



== Installation ==

### 🤖 Installation ###

1. Upload the plugin to your blog and activate
2. Visit the settings to configure your options

[More info on installing WP plugins](https://wordpress.org/documentation/article/manage-plugins/#installing-plugins-1)


### 🤖 Shortcodes ###

Shortcodes enable you to include dynamic bits of information in your meta tags. Head Meta Data provides the following shortcodes:

	Single post views
	
	[hmd_post_excerpt]  Outputs post excerpt
	[hmd_post_date]     Outputs post date
	[hmd_post_author]   Outputs post author
	[hmd_post_title]    Outputs post title
	[hmd_post_cats]     Outputs post categories
	[hmd_post_tags]     Outputs post tags
	[hmd_site_tagline]  Outputs site tagline
	[hmd_site_title]    Outputs site title
	[hmd_year]          Outputs current year
	[hmd_tab]           Outputs tab space to tag markup

You can include any of these shortcodes in the "Custom Tags" setting, and the displayed information will reflect the current post being viewed. On non-single page views, like the homepage, archives, and search results, the shortcodes display general information about the site:

	Non-single views
	
	[hmd_post_excerpt]  Outputs site description
	[hmd_post_date]     Outputs date of latest post
	[hmd_post_author]   Outputs site name
	[hmd_post_title]    Outputs site description
	[hmd_post_cats]     Outputs all view categories
	[hmd_post_tags]     Outputs all view tags
	[hmd_site_tagline]  Outputs site tagline
	[hmd_site_title]    Outputs site title
	[hmd_year]          Outputs current year
	[hmd_tab]           Outputs tab space to tag markup

> ✨ __Note:__ Many more [shortcut variables](https://plugin-planet.com/head-meta-pro-shortcut-variables/) available in the [Pro version &raquo;](https://plugin-planet.com/head-meta-pro/)


You can add custom tags via the "Custom Tags" setting, for example:

	<meta name="date" content="[hmd_post_date]">
	<meta name="abstract" content="[hmd_post_title]">
	<meta name="author" content="[hmd_post_author]">
	<meta name="copyright" content="Copyright [hmd_year] Awesome Website">

Another example using shortcodes to output meta tags dynamically:

	<title>[hmd_post_title] | My Awesome Website</title>
	<meta name="description" content="[hmd_post_excerpt]">

That will output dynamic titles and descriptions according to the current post or page view. Very useful for SEO and helping bots to understand your content better.

> ✨ Feedback and ideas welcome! Reach us anytime via our [contact form &raquo;](https://plugin-planet.com/support/#contact)


### 🤖 Custom Meta Tags ###

To add custom meta tags to the &lt;head&gt; section of any specific post or page:

1. Visit the "Edit Post" or "Edit Page" screen
2. Open the "Custom Fields" meta box
3. Add a new custom field
4. For the custom field Name, enter `head-meta-data`
5. For the custom field Value, enter desired tag/markup
6. Save changes and done.

You can add as many custom meta tags as desired, no limits.

For example, we could add the following custom `<link>` tag to any post:

`<link rel="icon" type="image/png" href="/android.png" sizes="192x192">`

After saving changes that exact code will be included in the post's &lt;head&gt; section.

You can also use shortcodes in custom meta tags, for example:

	<meta name="description" content="[hmd_post_excerpt]">

That will output the post excerpt on single post views, and the site description on archive and home views.


__Tip:__ You can include tab spaces in the custom field value, for example:

`		<link rel="icon" type="image/png" href="/android.png" sizes="192x192">`

Useful for indenting code to align with other meta tags ;)

__Tip:__ By default, any custom tags are displayed _after_ the default meta tags. To disable the default meta tags on any post, add a new custom field with the name `hmd_disable_default`. Give it a value of `1`. Save changes and done.

> ✨ __Note:__ The [Pro version](https://plugin-planet.com/head-meta-pro/) provides a [Meta Tags Box](https://plugin-planet.com/wp/wp-content/themes/planet/img/plugins/hmp/hmp-settings-meta-gut.png) UI for adding tags to individual posts and pages


### 🤖 Upgrades ###

Visit the WordPress Plugins screen, locate the plugin, and click "Update" :)


### 🤖 Restore Default Options ###

To restore default plugin options, either uninstall/reinstall the plugin, or visit the plugin settings &gt; Restore Default Options.


### 🤖 Like the Plugin? ###

If you like Head Meta Data, please take a moment to [give a 5-star rating](https://wordpress.org/support/plugin/head-meta-data/reviews/?rate=5#new-post). It helps to keep development and support going strong. Thank you!


### 🤖 Uninstalling ###

This plugin cleans up after itself. All plugin settings will be removed from the WordPress database when the plugin is deleted via the WP Plugins screen. Any custom fields will NOT be removed.



== Upgrade Notice ==

Visit the WordPress Plugins screen, locate the plugin, and click "Update" :)



== Screenshots ==

1. Head Meta Data: Plugin Settings (panels toggle open/closed)

More screenshots available at the [HMD Homepage](https://perishablepress.com/head-metadata-plus/).



== Frequently Asked Questions ==

To ask a question, suggest a feature, or provide feedback, [contact me directly](https://plugin-planet.com/support/#contact).



== Changelog ==

If you like Head Meta Data, please take a moment to [give a 5-star rating](https://wordpress.org/support/plugin/head-meta-data/reviews/?rate=5#new-post). It helps to keep development and support going strong. Thank you!

> 🤖 Get [Head Meta Pro](https://plugin-planet.com/head-meta-pro/) to dial in perfect meta tags for each page view, social media tags, and more.


**20260209**

* Adds `[hmd_site_title]` shortcode
* Adds `[hmd_site_tagline]` shortcode
* Adds keywords meta tag to plugin settings
* Adds description meta tag to plugin settings
* Adds shortcode support in all meta tag settings
* Adds shortcode support in custom tags on single posts
* Fixes bug with plugin action links
* Improves display of plugin settings
* Improves global variable namespace
* Cleans up and organizes plugin code
* Updates plugin settings page
* Improves readme.txt documentation
* Generates new language template
* Tests on PHP 8.4 and 8.5
* Tests on WordPress 6.9 + 7.0 (nightly)


Full changelog @ [https://plugin-planet.com/wp/changelog/head-meta-data.txt](https://plugin-planet.com/wp/changelog/head-meta-data.txt)
