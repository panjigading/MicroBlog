<?php

$title = "Index";
require_once("views/header.php");

echo '<h1>MicroBlog</h1>';
echo '<a href="?m=mblog_controller&m=add" class="button">Add MicroBlog</a>';

if (!$mblogs->num_rows) {
    echo "<p class=\"status\">No mblog posts<p>";
} else {
    while ($mblog = $mblogs->fetch_object()) {
        echo "<div class=\"mblog\">";
        echo "<h2 class=\"username\">u/anon</h2>";
        echo "<p>$mblog->text</p>";
        echo "<p><a href=\"?c=mblog_controller&m=edit&id=" . $mblog->id_mblog
        . "\">Edit</a> - <a href=\"?c=mblog_controller&m=delete&id="
        . $mblog->id_mblog . "\">Delete</a></p>";
        echo "</div>";
    }
}

require_once("views/footer.php");