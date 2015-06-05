# Italy Cookie Choices - Joomla Plugin Attempt #

**Contributors:** overclokk, Andrea Pernici  
Donate link: 
**Tags:** compliance, cookie law, cookies, eu cookie law, eu law, eu privacy directive, privacy, privacy directive, notification, privacy law, cookie law banner, implied consent, third party script, third party cookie, joomla eu privacy, joomla cookie, joomla eu cookie, joomla eu privacy directive  
**Requires at least:** 4.1  
**Tested up to:** 4.3.0  
**Stable tag:** 2.0.0  
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  

Italy Cookie Choices allows you to easily comply with the european cookie law, showing
a notice to the user only the very first time that visits your website without degrading website performance and remove all the occurence of third party embed inside posts, pages and widgets until consent.
Plugin requirement PHP >= 5.3 and WordPress >= 4.1

## Description ##

The Cookie Law is one of the most stupid law in the world. Maybe made by someone, who doesn't really understand how the web works. 

Italy Cookie Choices allows you to easily comply with the european cookie law (and Italian too), showing a notice to the user only the very first time he visits your website.
Message, position and the style can be easily modified through the plugin menu.

The plugin will not add any CSS stylesheet or Javascript file but only inline script, so it doesn't make your website slower.

Notify any issue on github repository https://github.com/ItalyCookieChoices/italy-cookie-choices/issues

### Anonymize Analytics IP ###

Add `ga('set', 'anonymizeIp', true);` in your analytics snippet [AnonymizeIP](https://developers.google.com/analytics/devguides/collection/analyticsjs/field-reference#anonymizeIp)

### Developer ###
(Enea Overclokk)[http://www.overclokk.net/]
(Andrea Pernici)[https://www.andreapernici.com/]
For Joomla 3.x attempt: Simone Bussoni [http://www.simbus82.net/]

## Installation ##

1. Upload `italy-cookie-choices` folder to the `/wp-content/plugins/` directory
2. Activate and configure the plugin through the 'Plugins' menu in Joomla

## Frequently Asked Questions ##

### How does it work? ###

When a user visit your site, the plugin will check if this user has been already there, checking for a cookie that the plugin self creates (it is just a session cookie, so it is not against the law). If the user has not this cookie, a message will be shown (you can configure where, how and what will be show). If the users keeps surfing in your website, now or withing the next month, it means that he accepted the use of cookies in your website, so this message
will not be shown again.

### Why am I not seeing the message? ###

Probably, you already have visited the site before, so you accepted the use of cookies and the plugin installed a cookie in your browser to know it. If you want to test if the plugin is working properly, try removing the cookies `displayCookieConsent` from your web browser or navigating in incognito mode. If you think that the plugin is not working properly, just open an issue here https://github.com/overclokk/italy-cookie-choices/issues and I will check it for you.

## Screenshots ##

### 1. Italy Cookie Choices Options Menu ###
![Italy Cookie Choices Options Menu](http://s.wordpress.org/extend/plugins/italy-cookie-choices/screenshot-1.png)

### 2. Italy Cookie Choices top bar and embed block in front end ###
![Italy Cookie Choices top bar and embed block in front end](http://s.wordpress.org/extend/plugins/italy-cookie-choices/screenshot-2.png)

### 3. Italy Cookie Choices Options for Dialog box ###
![Italy Cookie Choices Options for Dialog box](http://s.wordpress.org/extend/plugins/italy-cookie-choices/screenshot-3.png)

### 4. Italy Cookie Choices Dialog Box in front end ###
![Italy Cookie Choices Dialog Box in front end](http://s.wordpress.org/extend/plugins/italy-cookie-choices/screenshot-4.png)

### 5. Italy Cookie Choices Widget area ###
![Italy Cookie Choices Widget area](http://s.wordpress.org/extend/plugins/italy-cookie-choices/screenshot-5.png)

### 6. Italy Cookie Choices Content area ###
![Italy Cookie Choices Content area](http://s.wordpress.org/extend/plugins/italy-cookie-choices/screenshot-6.png)


## Changelog Joomla 3.x Attempt ##

### 0.0.1 ###
**Release Date:** June 5th, 2015  

* Forked from Wordpress plugin https://github.com/ItalyCookieChoices/italy-cookie-choices
 
## Additional Info ##

**Idea Behind / Philosophy:** Italy Cookie Choices allows you to easily comply with the european cookie law, showing
a notice to the user only the very first time that visits your website without degrading website performance..
 
## Credits ##

* [www.cookiechoices.org](https://www.cookiechoices.org/)
* [Loghino piccolo](http://www.posizionamento-seo.com/)
