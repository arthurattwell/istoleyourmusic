<?php
/* This is the main template file. */

require_once ("config.php");

/* The head.php and header.php are in every page. */
include (ABSPATH . "/includes/head.php");
include (ABSPATH . "/includes/header.php");

/* This include changes with each page depending on its content.
 * For easy recognition, name each file content-foo.php, where foo names the page.
 * This is the home page, so content-home.php.
 */
include (ABSPATH . "/includes/content-home.php");

/* The template closes with the footer */
include (ABSPATH . "/includes/footer.php");

?>