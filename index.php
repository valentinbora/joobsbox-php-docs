<?php

// A simple example

require_once('include/classTextile.php');

$textile = new Textile();

foreach(new DirectoryIterator("src") as $item) {
  $name = $item->getFilename();
  if($name[0] != '.')
  file_put_contents("export/" . $item->getFilename() . '.html', $textile->TextileThis(file_get_contents("src/" . $item->getFilename()))); 
}

echo "Done";

// For untrusted user input, use TextileRestricted instead:
// echo $textile->TextileRestricted($in);


?>
