<?php
$ch = curl_init("https://auth.nycwireless.net/portal/?node_id=c86b27e6bf325a8d2054d15234136fea");
$html = curl_exec($ch);
echo $html;
?>