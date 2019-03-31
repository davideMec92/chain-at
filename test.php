<?php

require_once( 'class/manager/RequestManager.php' );

/*$login_request = RequestManager::userLogin( 'ciano', 'Org1' );

echo 'login request: '.$login_request;*/

$jwt = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1NTQwNjU4NTMsInVzZXJuYW1lIjoiY2lhbm8iLCJvcmdOYW1lIjoiT3JnMSIsImlhdCI6MTU1NDAyOTg1M30.Tijx_YNC2xvDoOT8LYMOzzGBYY4aQgjbJ0ssivrH20s';

$newChannelRequest = RequestManager::createChannel( 'mychannel', '../artifacts/channel/mychannel.tx', $jwt );



?>