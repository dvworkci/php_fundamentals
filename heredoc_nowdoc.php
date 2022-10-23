<?php

// HEREDOC  (Treats strings as it was enclosed in double quotes and can have variables)
// Heredoc is useful if we want to generate dynamic html content
$text = <<<HTML
Line 1
Line 2
Line 3
Line 4
HTML;

echo $text;

// NOWDOC   (Treats strings as it was enclosed in single quotes)