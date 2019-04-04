<?php

//TODO ELIMINARE UNA VOLTA FINITO
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once( 'class/manager/RequestManager.php' );

/*$jwt = RequestManager::userLogin( 'Ferro', 'Org2' );

echo 'login request: '.$jwt;*/

//$jwt = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1NTQ0MjQ5ODAsInVzZXJuYW1lIjoiQ2lhbm8iLCJvcmdOYW1lIjoiT3JnMSIsImlhdCI6MTU1NDM4ODk4MH0.OgkIf0CifnCKOjK8JxkFHeLzm89qo0xvZjBFioXLmGw';

$jwt = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1NTQ0MjUwMTgsInVzZXJuYW1lIjoiRmVycm8iLCJvcmdOYW1lIjoiT3JnMiIsImlhdCI6MTU1NDM4OTAxOH0.t11CScrGn7SfJ-qhYwndwt-g8GzJrUuz_ps2KqupDJQ';

//$newChannelRequest = RequestManager::createChannel( 'mychannel', '../artifacts/channel/mychannel.tx', $jwt );

$peers = ["peer0.org1.example.com", "peer0.org2.example.com"];

//$joinChannelRequest = RequestManager::joinChannel( 'mychannel', $peers, $jwt );

//$anchorPeersRequest = RequestManager::anchorPeers( 'mychannel', "../artifacts/channel/Org2MSPanchors.tx", $jwt );

//$installChaincodeRequest = RequestManager::installChaincode( $peers, 'chaincode', 'chaincodes', 'node', 'v0', $jwt );

//$instatiateChaincodeRequest = RequestManager::instantiateChaincode( 'mychannel', 'chaincode', 'v0', 'node', array(), $jwt );

$invokeChaincodeRequest = RequestManager::invokeChaincode( 'mychannel', 'chaincode', $peers, 'ferro', array(), $jwt );

?>