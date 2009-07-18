<?php
  $baseUrl = str_replace("\\", "/", dirname($_SERVER['PHP_SELF'])) . '/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Joobsbox PHP Documentation</title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseUrl; ?>css/main.css" />
</head>

<body>
  <div id="contents">
  <?php
    $url = str_replace($baseUrl, '', $_SERVER['REQUEST_URI']);
    if($url == "") $url = "index.html";
    
    
    if(file_exists($url)) {
      readfile($url);
    } else {
      $url .= '.html';
      if(file_exists($url)) {
        readfile($url);
      } else {
        echo "The doc item you requested does not exist!";
      }
    }
  ?>
  </div>
</body>
</html>
