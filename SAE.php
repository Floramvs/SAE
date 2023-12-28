<?php

ob_start();
include 'evenements.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';