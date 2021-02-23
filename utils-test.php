<?php 

require_once('utils.php');


echo "Running Tests";

echo "\ntesting pluralize";

test( pluralize( 3, "t-shirt" ), "3 t-shirts" );
test( pluralize( 1, "dollar" ), "1 dollar" );
test( pluralize( 0, "dollar" ), "0 dollars" );
test( pluralize( -1, "dollar" ), "-1 dollar" );
test( pluralize( -3, "dollar" ), "-3 dollars" );
test( pluralize( 1.7, "dollar" ), "1.7 dollars" );
test( pluralize( 5.0, "dollar" ), "5 dollars" );
test( pluralize( 1.0, "dollar" ), "1 dollar" );
test( pluralize( 0.3, "dollar" ), "0.3 dollars" );

// Some tests that fail (for now):
//test( pluralize( 3, "mouse" ), "3 mice" );
//test( pluralize( 3, "index" ), "3 indices" );


echo "\ntesting hyperlink";
test( hyperlink( 'http://www.gutenberg.org', 'free books!' ),
      "<a href='http://www.gutenberg.org'>free books!</a>" );
test( hyperlink( 'myLocalFile.html', false ),
      "<a href='myLocalFile.html'>myLocalFile.html</a>" );
test( hyperlink( 'myLocalFile.html'),
      "<a href='myLocalFile.html'>myLocalFile.html</a>" );
test( hyperlink( 'myLocalFile.html', '' ),
      "<a href='myLocalFile.html'></a>" );


echo "\ntesting thumbnail";
// #3: thumbnail:
// the html element for an image with source pony.jpg (in the same directory), that is 300px wide:
//    <img src="pony.jpg" width="300px" />
// html for such an image which is also a link — where the link would take you to that file:
//    <a href="pony.jpg"><img src="pony.jpg" width="300px" /></a>
// 
test( thumbnail( "pony.jpg", 300 ),
      "<a href='pony.jpg'><img src='pony.jpg' width='300px' /></a>" );


echo "\nDone w/ Tests.\n";
?>
