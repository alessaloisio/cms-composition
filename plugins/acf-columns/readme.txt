=== ACF Columns ===
Contributors: tmconnect
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=XMLKD8H84HXB4&lc=US&item_name=Donation%20for%20WordPress%20Plugins&no_note=0&cn=Add%20a%20message%3a&no_shipping=1&currency_code=EUR
Tags: acf, acfpro, advanced custom fields, column 
Requires at least: 4.7
Tested up to: 4.9.8
Stable tag: 1.2.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

With the ACF Columns plugin it is possible to arrange ACF fields in column groups in the post editor

**New version now works in the new ACF 5.7**

**Conditional Logic can now be used over different columns with the new ACF 5.7**

For each column add a Column Field to your field group and define the width for this column. You can select between 1/2, 1/3, 1/4, etc. columns. To close a row you have to add a Column Field with the value 'Reset'.

**This plugin works only with the [ACF PRO](https://www.advancedcustomfields.com/pro/) (version 5.4.0 or higher).**

= Localizations =
* English
* Deutsch


== Frequently Asked Questions ==

= ACF conditional logic doesn't works across different columns =

If you are using a ACF version prior to 5.7 you can't use the ACF conditional logic on fields across different columns.

Unfortunately, the problem is how ACF uses conditional logic. Both of the conditional logic fields (the conditional logic field and the field containing the value for the logic) must have the same parent element in the DOM.

However, since the column plugin have to modify the DOM tree, so that the columns can be split, the conditional logic only works in one column.


== Installation ==

1. Upload the `acf-columns` folder to your `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!


== Screenshots ==

1. Example for a field group with column fields. This field group ...
2. ... split the fields in two columns in page/post editor
3. Works in tabs as well


== Changelog ==

= v1.2.2 =
* Minor CSS changes

= v1.2.1 =
* Added support for RTL languages

= v1.2.0 =
* Added compatibility for ACF 5.7 and newer

= v1.1.0 =
* Added CSS styling to support the new ACF Accordion field type (new in ACF 5.6.6) in columns
* Changed class name to prevent future conflicts with ACF

= v1.0.0 =
* Initial release of this plugin, tested and stable.