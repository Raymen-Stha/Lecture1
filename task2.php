<?php
$text = "The quick brown dog jumped over the lazy cow.";
$wrappedText = wordwrap($text, 10, "<br>");
echo $wrappedText;
?>
