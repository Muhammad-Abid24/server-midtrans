<?php

$environment = false;
$api_url = $environment ?
'https://app.midtrans.com/snap/v1/transactions' : 'https://app.sandbox.midtrans.com/snap/v1/transactions';

$server_key = $environment ?
'Mid-server-KtxB3pJLV4fKhjg1Tl2E3cnX' : 'SB-Mid-server-FWGFPTv3jqcLUs1bYwS2CfJ-';

?>