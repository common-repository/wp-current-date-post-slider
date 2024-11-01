=== WP Current Date Post Slider  ===
Contributors: wponlinesupport, anoopranawat 
Tags: current date post slider, today date posts slider, slider, responsive post slider, current date responsive posts slider, today date responsive recent post slider,  current date post slideshow,  current date posts slideshow,  today date post slideshow,  today date posts slideshow
Requires at least: 3.1
Tested up to: 5.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A quick, easy way to add and display Responsive WordPresss Recent Post Slider on current/today date with 4 designs using a shortcode.

== Description ==
A quick, easy way to add and display Responsive WordPresss Recent Post Slider on current/today date with 4 designs using a shortcode.

= How it works =

Suppose you have added 100+ post in WordPress post section and now you want to display posts on their publish date:

* **Like what is happened on 2nd oct** You have written 10+ post under this date. This plugin will display all these post automatically  on 2nd oct. 
* Same like 25 dec. Where this plugin will display all post wriiten on 25 dec automatically.

A multipurpose responsive WordPresss posts slider plugin powered with four built-in design template, lots of easy customizable options.
Display unlimited number of WordPresss posts slider in a single page or post with different sets of options like category, limit, navigation type. 

= Here is the Recent Post Slider shortcode example =

* **Main shortcode:** 

<code>[wpcdps_slider]</code>

* **To display only latest 4 post:**

<code>[wpcdps_slider limit="4"]</code>
Where limit define the number of posts to display.

* **If you want to display Recent Post Slider by category then use this short code:** 

<code>[wpcdps_slider category="category_ID"]</code>

* **We have given 4 designs. For designs use the following shortcode:** 

<code>[wpcdps_slider design="design-1"]</code> 
Where designs are : design-1, design-2, design-3, design-4  

= Here is Template code =
<code><?php echo do_shortcode('[wpcdps_slider]'); ?> </code>

= Use Following Recent Post Slider parameters with shortcode =
<code>[wpcdps_slider]</code>


* **day** : [wpcdps_slider day="25"] (Set a date. By using this slider will display posts only added on 25th date).
* **month** : [wpcdps_slider month="5"] (Set a month. By using this slider will display posts only added on 5th month).
* **year** : [wpcdps_slider year="2016"] (Set a year. By using this slider will display posts only added on 2016 year).
* **limit** : [wpcdps_slider limit="8"] (Display only 8 latest post. By default it display 8 latest posts with shortcode [wpcdps_slider].
 If you want to display all posts then use limit="-1").
* **design** : [wpcdps_slider design="design-1"] (You can select 4 design( design-1, design-2, design-3, design-4 ) for your recent post slider. Post -> Post Slider Designs ).
* **category**: [wpcdps_slider category="category_ID"] ( ie Display recent post slider by their category ID ).
* **show_category_name** : [wpcdps_slider show_category_name="true" ] (Display category name OR not. By default value is "True". Options are "ture OR false").
* **show_date** : [wpcdps_slider show_date="false"] (Display post date OR not. By default value is "True". Options are "ture OR false")
* **show_content** : [wpcdps_slider show_content="true" ] (Display post Short content OR not. By default value is "True". Options are "ture OR false").
* **Pagination and arrows** : [wpcdps_slider dots="false" arrows="false"]
* **Autoplay and Autoplay Interval**: [wpcdps_slider autoplay="true" autoplay_interval="100"]
* **Slide Speed**: [wpcdps_slider speed="3000"]
* **content_words_limit** : [wpcdps_slider content_words_limit="30" ] (Control post short content Words limit. By default limit is 20 words).
* **Added New Shortcode Parameters**
* **post_type:** [wpcdps_slider post_type="post"] (ie added custom post type support where you add custom post. By default value is "post")
* **taxonomy:** [wpcdps_slider taxonomy="category"] (ie added custom taxonomy support where you add custom taxonomy. By default value is "category")
* **hide_post:** [wpcdps_slider hide_post="1,2,3"] (ie exclude some posts with their post-id that you do not want to display)
* **show_author** [wpcdps_slider show_author="false"] (ie Display author name OR not. By default value is "true". Values are "true OR false")
* **show_read_more** [wpcdps_slider show_read_more="true"] (Display read more button. Values are "true OR false")

= Features include: =
* Easy to add.
* Given 4 designs.
* Responsive.
* Responsive touch slider.
* Mouse Draggable.
* You can create multiple post slider with different options at single page or post.
* Custom post type support.
* Exclude Post with their ID's that you do not want to display.


== Installation ==

1. Upload the 'wp-current-date-post-slider' folder to the '/wp-content/plugins/' directory.
2. Activate the "wp-current-date-post-slider" list plugin through the 'Plugins' menu in WordPress.
3. Add this short code where you want to display recent post slider
<code>[wpcdps_slider]</code>


== Changelog ==

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.0 =
* Initial release.
