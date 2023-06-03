<?php

echo "This is the index page.\n";

// Include another page
include '9_page.php';

// Require another page
require '9_page2.php';

// Exit the program
exit("Exiting the program.\n");

echo "This line will not be executed.\n";

?>
