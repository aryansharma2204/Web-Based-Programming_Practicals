<?php
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    echo "Page accessed via HTTPS";
} else {
    echo "Page accessed via HTTP";
}
?>
