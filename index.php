<?php

$db = parse_url(getenv("DATABASE_URL"));

echo "Hello this is my website";

echo $db;

?>
