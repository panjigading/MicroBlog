<?php

require_once("views/header.php");

echo '<h1>Microblog</h1>';
echo '<h2>New Mblog</h2>';
echo '<form action="" method="post">';
echo '<textarea name="text" autofocus required></textarea>';
echo '<button class="button" type="submit">Submit</button>';
echo '</form>';

require_once("views/footer.php");