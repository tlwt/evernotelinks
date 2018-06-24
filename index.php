<?
// getting the full URL
$str = $_SERVER['REQUEST_URI'];

// replace characters which cause problems
$str = str_replace("(at)", "@",$str);
$str = str_replace("_", "%20",$str);
$str = str_replace(";", "%0D%0A",$str);


// split the string into array elements
$arr = explode('/',$str);


foreach($arr as $val) {
  $i++;
  $link .= $val;
  if ($i==2) $link.= ":";
  if ($i==3) $link.= "?";
  if ($i>3 && $i%2==0) $link.= "=";
  if ($i>3 && $i%2==1) $link.= "&";
}


?>
<html>
<head>
  <meta http-equiv="refresh" content="0; URL=<? echo $link; ?>">

</head>
<body>
<h3>You will be redirected to:</h3>
to use this feature:

<li>(at) will be replaced as @
<li>_ will be a space
<li>; will be a new line

<pre>
<?
  echo "<a href=\"$link\">$link</a>";
?>
</body>
</html>
