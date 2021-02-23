<?php
/** A set of utility functions, for php-generating-html.
 * @author Ian Barland
 * @version 2013.Feb.16
 */

/** Create (the html text for) a link tag.  Use the the URL as the tag-text,.
 * @param $url (string) The URL to link to.
 * @param $linkTxt  (string-or-false) The link-text, or false as a sentinel
 *    indicating that url should also be used as the link-text.
 * @return (the html text for) a link tag.
 */
function hyperlink($url,$linkTxt=false) {
  $theRealLinkTxt = ($linkTxt === false ? $url : $linkTxt);
  return "<a href='$url'>$theRealLinkTxt</a>";
  }

/** Correctly pluralize a noun (or not).
 * @param $num  How many of the $noun we have.
 * @param $noun  The noun to pluralize.
 * @return A string with the number&noun, correctly pluralized.
 */
function pluralize($num, $noun) {
  $theSuffix = (abs($num) == 1 ? "" : "s");
  return "$num $noun$theSuffix";
  }

/** Thumbnail: return HTML for an image with small width, which links to the full-size image.
 * @param $imgURL The URL for the image file.
 * @param $width The desired width for the thumbnail.
 * @return HTML for an image with small width, which links to the full-size image.
 */
function thumbnail( $imgURL, $width ) {
  return hyperlink( $imgURL, "<img src='$imgURL' width='${width}px' />" );
  }



?>
