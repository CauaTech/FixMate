<?php 
function input($text)
{
	$text_xss = $text;
	$text_xss = htmlspecialchars($text_xss);

	return $text_xss;
}
?>
