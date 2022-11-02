<?php
    require_once('VBAPIs.php');
    echo VBAPIs::uploadMediaUrl($_GET["mediaUrl"], $_GET["configuration"], $_GET["metadata"]);
?>