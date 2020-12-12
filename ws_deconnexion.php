<?php
// On prolonge la session
session_start();
//detruire la session
session_destroy();
http_response_code(200);
?>
