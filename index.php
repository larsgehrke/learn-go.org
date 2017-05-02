<?php 
include 'header.html';


// I18N support information here
$language = 'de';
putenv("LANG=$language");
setlocale(LC_ALL, $language);

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "/var/www/learn-go.cstegmann.de/locale"); 
textdomain($domain);

echo gettext("title");
echo gettext("desc");



include 'board.html';

include 'footer.html';
?>