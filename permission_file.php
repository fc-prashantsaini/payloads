<?php
$agentName = 'php-deserization';

$command = sprintf("chmod 777 /tmp/%s", escapeshellarg($agentName));
$handle = popen($command, 'w');

if ($handle !== false) {
    pclose($handle);
    echo "Permission change executed successfully.";
} else {
    echo "Failed to change permissions.";
}
?>
