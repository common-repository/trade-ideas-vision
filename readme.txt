=== Trade Ideas Vision ===
Contributors: tradeideas01
Tags: trade ideas, stock market, trading, financial data, stock screener, index, indices, quotes, stock scanner, financial markets, nasdaq, nyse
Requires at least: 4.0 
Tested up to: 4.6.1
Stable tag: 1.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Trade Ideas Vision plugin allows you to embed Trade Ideas layout windows into your articles with shortcode.

== Description ==

One of Trade Ideas best features is the ability to create and present custom trading strategies
using Smart Layouts within web pages or blogs. Smart Layouts were designed to allow the user to 
group resizeable windows within a single container that can be easily shared or embedded within 
other online media, while retaining the content determined by the user and presenting live data. 
This feature is based on the existing Trade Ideas concept of the user’s ability to create their
own channel layouts and share them using the cloud features. But now they can be displayed outside 
of the Trade Ideas client or web application. Trade Ideas Vision allows the user to embed  a layout
via an iframe within the user's content.  The shortcode to embed your layout window within your content is the following:

`[tivision code="cloudcode" height="height" width="width"]`

In order to use this plugin, you will also need to have an active Trade Ideas account
in order  to create the Smart Layouts to be displayed as well to generate the cloudcode to paste into the shortcode above.  

Please refer to Installation for further details.

== Installation ==

= From your WordPress dashboard =

1. Visit 'Plugins > Add New'
2. Search for 'TradeIdeas Vision'
3. Activate TradeIdeas Vision from your Plugins page.

= From WordPress.org =

1. Download the TradeIdeas Vision zipfile.
2. Unzip and place the 'tradeideas-vision' directory to your '/wp-content/plugins/' directory.
3. Activate TradeIdeas Vision from your Plugins page.


Please refer to the Screenshots for some of the steps below.
= Create Your SmartLayout to Display in Your Blog or Web Page =    

1.  Please login to Trade Ideas at the following url: http://hadoop.trade-ideas.com/TIProWeb/TIPro.html?dev_tools=1
2.  After successful login,  select Tools > Windows from the toolbar after which you will see the 'Current Windows' popup display. This popup shows the windows currently being displayed in the application.
3.  On the 'Current Windows' popup, click the 'Close All' button, after which all current windows being displayed will close.
4.  Now go to the toolbar and select  New > then the window type that you wish to be included within your Smart Layout.
5.  You may configure your selected window by right-clicking in the body of the window and selecting 'Configure' which will then display the Config Window.
6.  After having configured your selected window with the desired strategies and/or filters, exit the Config Window by clicking OK.
7.  Repeat steps 4 - 6 above for all additional windows that you wish to be included in your Smart Layout.
8.  Once you have the windows that you want to display in your Smart Layout configured correctly, position them on screen in roughly the layout that you want them to appear.

= Retrieve Your Cloud Code From Your Saved Layout  =
    

1.  Now from the toolbar, click 'Smart Layout'.  The dropdown will highlight the appropriate layouts based upon the number of windows that you have displayed.
    The icons to the left of each selection will help you to choose the correct layout option. 
2.  After selecting your desired option from the dropdown, the 'Save Special Layout' dialog appears. Type in the name for the layout and click 'OK'.
	The Layout is now saved to your cloud list.
3.  From the toolbar go to Tools > Load From Cloud 
4.  In the 'Load From Cloud' dialog, click on the name of the layout that you had created in the previous steps followed by clicking the 'Share' button.
    The 'Share' dialog now appears.
5.  Within the 'Share' dialog, you will now see a url containing the cloudcode.  You may copy the url that's shown to someplace temporary, and get
    the 32 character number that comes after 'code='.  This is the cloudcode parameter that will be used in the shortcode tag for your WordPress document.
	
	`[tivision code="cloudcode" height="height" width="width"]`

== Frequently Asked Questions ==

= What is the 'code' argument? =
The code argument is a value which corresponds to a layout which has been saved to the Trade Ideas servers.  This
value is 32 characters long.  If you accidentally enter a value which is not 32 characters long (or enter no code at all) , a default
window will be displayed.  If you enter a code which is 32 characters long, yet doesn't correspond to any existing layout
an error message will be displayed.

= Is the data shown in the layout windows in real time? =
No, the data is delayed by 15-20 minutes.

= I've included charts in my layout but they do not appear.  Why can't I see them? =
Charts only appear when there's live data.  Trade Ideas Vision only uses delayed data.

= Why doesn't my Single Stock Window symbol link with other windows that may be present in my layout? =
This feature does not work in Trade Ideas Vision.  Layouts are displayed within an iframe. Due to cross-site security restrictions,
clicking on the iframe will not be captured by the content of the iframe(your layout).

== Screenshots ==

1. Login to Trade Ideas
2. Current Windows popup displayed
3. Choose your window that you wish to display in your Smart Layout
4. Configure your selected window
5. Actual Configuration dialog for selected window
6. Arrange your windows on the screen roughly in the layout that you wish to be displayed
7. Smart Layout dropdown
8. Name your layout and save
9. Select your layout from the 'Load From Cloud' window and retrieve the cloudcode.
10. Example of layout embedded within a WordPress document.


== Changelog ==

= 1.0.3 =
Removed obsolete code. Bug mentioned in 1.0.2 fixed server-side.

= 1.0.2 =
Upon loading, the page would automatically scroll down to the location of the Trade Ideas Vision window. Code was added in order that the page may return back to the top position.

= 1.0.1 =
More notes added within the FAQ. No change to live code.

= 1.0 =
* First release.

== Upgrade Notice ==
* Not Applicable for first release.