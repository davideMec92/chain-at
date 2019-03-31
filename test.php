<?php

require_once( 'class/manager/RequestManager.php' );

/*$login_request = RequestManager::userLogin( 'ciano', 'Org1' );

echo 'login request: '.$login_request;*/

$jwt = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1NTQwNjU4NTMsInVzZXJuYW1lIjoiY2lhbm8iLCJvcmdOYW1lIjoiT3JnMSIsImlhdCI6MTU1NDAyOTg1M30.Tijx_YNC2xvDoOT8LYMOzzGBYY4aQgjbJ0ssivrH20s';

//$newChannelRequest = RequestManager::createChannel( 'mychannel', '../artifacts/channel/mychannel.tx', $jwt );

$peers = ["peer0.org1.example.com", "peer1.org1.example.com"];

//$joinChannelRequest = RequestManager::joinChannel( 'mychannel', $peers, $jwt );

$instalChaincodeRequest = RequestManager::installChaincode( $peers, 'chaincode', 'chaincodes', 'node', 'v0', $jwt );

?>