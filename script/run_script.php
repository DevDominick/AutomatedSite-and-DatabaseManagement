<?php

$sitename = escapeshellarg($_POST["sitename"]);

$output = shell_exec("bash script.sh $sitename 2>&1");

echo "<pre>$output</pre>";

?>
