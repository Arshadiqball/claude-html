<?php
$input = "dxbitprojects"; // or from GET/POST

$cmd = "echo " . escapeshellarg($input) . " | python3 /home/dxbitprojects/public_html/claude-html/test.py 2>&1";
$output = shell_exec($cmd);

echo "<pre>$output</pre>";
?>