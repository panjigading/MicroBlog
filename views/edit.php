<?php

$title = "Edit";
require_once("views/header.php");

echo '<h1>Microblog</h1>';
echo '<h2>Edit Mblog</h2>';
echo '<form action="" method="post">';
echo '<input type="hidden" name="id" value="' . $res->id_mblog .'">';
echo '<textarea name="text" autofocus required>' . $res->text . '</textarea>';
echo '<button class="button" type="submit">Submit</button>';
echo '</form>';

require_once("views/footer.php");