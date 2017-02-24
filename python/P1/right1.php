<?php


$command = escapeshellcmd('./P1Right.py');
$output = shell_exec($command);
echo $output;

?>
