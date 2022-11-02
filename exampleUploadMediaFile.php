<?php
    require_once('VBAPIs.php');
    echo VBAPIs::uploadMediaFile(file_get_contents($_FILES["mediaFile"]["tmp_name"]), $_GET["configuration"], $_GET["metadata"]);
?>