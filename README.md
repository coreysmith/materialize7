# materialize7
Materialize7 Base Theme is created by Tribute Media (www.tributemedia.com).


Philosophy
----------------------------------------------------------------------------
Tribute Media has been building websites since 2007. Our first websites were in Drupal 5 and we have grown to Drupal 6 then Drupal 7. Over the years, we have built over 700 websites and have developed a pretty specific approach to building websites and developed our own approach to do that.

For the last few years we have felt that Drupal has done a very poor job implementing mobile strategies. While this theme is for Drupal 7 we have learned that Drupal 8 still doesn't handle mobile strategies well.

For the last couple of years, we have worked with the Bootstrap framework and found that to be okay in it's mobile preformance. Since learning about MaterializeCSS in late 2015 and it's implementation Material Design from Google, we have felt that we need a theme that incorporates it.

There are a few implementations of MaterializeCSS as a base theme for Drupal but we find them very lacking. Event the Bootstrap Drupal Base theme needed plenty of work to be properly executed on a Drupal site.

This base theme uses the MaterializeCSS framework but provides a significant level of overrides that allow it work work with Drupal well. Those overrides also allow it to work with the way that Tribute Media prefers to build effective websites. 

Decisions that we have made in the building of this base theme are based on the way we do work and may not align well with the community approach. As such, we have decided, although we are making this base theme available for use for anyone who wants it, we are not officially contributing it to Drupal.org. We need to maintain control over how it works in order for it to be available in the way we need it at Tribute Media.

In addition to being well experienced Drupal developers, we are also a Hubspot agency. We will be building a port of this theme to the Hubspot COS to allow for seamless integration of a Hubspot and Drupal site.


Our Test Site
----------------------------------------------------------------------------
We use this site as our test site. Feel free to take a peek. http://dev-d7materialize.pantheon.io/ When you have problems, the more detail you can give us as to what led to your problems will help us recreate it. We'll probably create a page on this site (or another test site) to see what we can do to fix it for you and demonstrate how it works then draw a link for you to see it.


Drupal 8
----------------------------------------------------------------------------
Drupal 8 is not ready for prime time yet because there simply are not yet enough modules available for a fully developed web project. This Drupal 7 version we designed with a future port to Drupal 8. We have made significant progress in the Drupal 8 version and hope to release it before module required for an effective Drupal 8 website are complete.


Licensing
----------------------------------------------------------------------------
MaterializeCSS is from www.materializecss.com and is licensed under the MIT License
Materialize7 is from www.tributemedia.com and is licensed under GPL 3.0

Please use this base theme and modify it to fit your needs. Please do not alter the reference to Tribute Media in the footer of this theme without approval from Tribute Media in writing. Send an email to marketing@tributemedia.com to make this request.


Installation
----------------------------------------------------------------------------
To use this theme, put the Materialize7 base theme and the material_theme in your themes folder. You'll need to enbable the material_theme for your website. If you download this theme from GitHub, it is recommended that you change the name of the base theme to materialize7 (remove any other text in the name that GitHub includes). 


Main Menu
----------------------------------------------------------------------------
The main menu is enabled by default. We have intentionally designed the main menu to not display any menu item below the main items because Drupal does not handle these well by default. If you are curious why we feel this way, drop us an email and we'll write a blog post about it.

We have developed an advanced Mega Menu that handles menus (inculding mobile menus) better. Please see the mega menu read me file for more information.


Secondary Menu
----------------------------------------------------------------------------
The trend for secondary menus is to have icons and a simplified approach to these links. They are also notoriously a challenge when trying to figure out what to do with them in a mobile environment. As such, we have chosen to not even print the secondary menu on the page templates. For your secondary menu, please create a block for the header region. See header read me for a snippet of code that we use at Tribute Media for the secondary menu.


Header Region
----------------------------------------------------------------------------
Note that the header region goes away on mobile devices. Nothing you put in that region will be available on a mobile device.


Shrinking Header
----------------------------------------------------------------------------
This theme has, by default, a shrinking header. You'll need to replace the icond for the logo in the root of your subtheme to include that shrinking header icon. That will make it work for both the default menu as well as the menu menu. Use a .png and give it a transparent background. For best results, make sure it's the same dimensions as the icon in the them.