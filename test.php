<?php
// remote.php

if (isset($_GET['action']) && $_GET['action'] === 'download') {
    echo "Remote file inclusion successful! Download action triggered.";
    // You can add additional logic here, such as serving a file
} else {
    echo "Remote file inclusion successful! No specific action triggered.";
}
?>
