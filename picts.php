<?php 
error_reporting(E_ALL);
require_once('utils.php'); 
?>

<html>
  <head>
    <title>hw04 pictures</title>
  </head>

  <body>
    <h3>Instructions</h3>
    <ol type='i'>
      <li>Add an image to the hw04/git repo, and link to it in the UL below.
      </li>
      <li>
        You can generate/view the html file via <code>php picts.php >! picts.html</code>.
        (Note that we <em>don't</em> <code>git add</code> the html file to the project,
        since it is generated from the other files in the project.)
      </li>
      <li>
        Make sure you have copyright for any image-files placed in this directory.
        (Just because an image is on the web does <em>not</em> mean you are allowed
        to make a copy of it!)
      </li>
      <li>
        Do NOT add any php code here which attacks <tt>php.radford.edu</tt> via a 
        denial-of-service-attack &mdash; inadvertently or not.
      </li>
    </ol>


    <h3>Images</h3>
    <ul>
      <li>
	<?php echo thumbnail("eggplant-man-statue.jpg",300); ?> Beware, the eggplant man!
      </li>
    </ul>

  </body>
</html>
