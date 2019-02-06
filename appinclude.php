<?php
/** Your applications unique ID from Facebook */
$appid = '2237462523189250';
/** Your applications Facebook secret */
$appsecret = '7bf80059ff7ac33a768468b016bca958';

/** Facebook Canvas URL: */
$canvasPage = 'http://apps.facebook.com/meinspiel/'; // This URL should end with a slash (/).
/** URL of the folder contaning the scripts. */
$canvasURL = 'https://meinspiel.herokuapp.com/'; // This URL should end with a slash (/).
/** Name or title of your application */
$appname = 'Mein Spiel';

/** Name of the image file that will be displayed on wall posts, can be a jpg or png file */
$appimagename='hero.jpg';

/** Name of the web content to load (will be loaded from the canvasURL) */
$appcontent='content.html';
/** The width and height to set the iframe window for the content. */
$appcontentwidth='640';
$appcontentheight='480';
/** The following define the text that appears in the app for wall posts and invites. */
/** You can also use the codes {name}, {fname} and {title} which will be replaced with  */
/** the users name, first name or game title respectively. */

$invitecontent='Check out this great fun game - Mein Spiel - I think you will love it.';
$Genericdetail='Check it out now!';
$GenericTitle='{title}';
$GenericCaption='{fname} has been playing {title}';

error_reporting(0);
?>