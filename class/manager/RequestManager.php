<?php

//TODO ELIMINARE UNA VOLTA FINITO
error_reporting(E_ALL);
ini_set('display_errors', 1);

class RequestManager {
  
  
  public static function userLogin( $username, $organization ){
    
    if( !isset( $username ) || strlen( $username ) == 0 )
      return -1;
    
    if( !isset( $organization ) || strlen( $organization ) == 0 )
      return -2;
        
    $data = array( "username" => $username, 
                 "orgName" => $organization );
    
    $curl = curl_init("http://localhost:4000/users");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode( $data ) );
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true );
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('content-type: application/x-www-form-urlencoded') );
    curl_setopt($curl, CURLOPT_MUTE, 1); //Silent mode active
    
    //Get server response
    $result = curl_exec( $curl );
            
    //Check if an error occurred
    if( curl_errno($curl) ){  
      echo 'Curl error: ' . curl_error($curl);
      return null;
    }
    
    $response = json_decode( $result );
    
    curl_close($curl);
    
    //Check if response is null
    if( $response == null )
      return null;
    
    if( !isset( $response->success ) )
      return null;
        
    //Check if request success
    if( $response->success == true )
      return $response->token;
    else if( $response->success == false ) //Request error
      return null;
    
    return null;
        
  }
  
  public static function createChannel( $channelName, $channelConfigPath, $jwt ){
        
    $data = array( "channelName" => $channelName, 
                   "channelConfigPath" => $channelConfigPath );
    
    $curl = curl_init("http://localhost:4000/channels");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data) );
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true );
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$jwt,
                                               "content-type: application/json") );
    curl_setopt($curl, CURLOPT_MUTE, 1); //Silent mode active
    
    //Get server response
    $result = curl_exec( $curl );
    
    echo print_r($result);
    
    //Check if an error occurred
    if( curl_errno($curl) ){  
      echo 'Curl error: ' . curl_error($curl);
      return null;
    }
    
    $response = json_decode( $result );
    
    curl_close($curl);    
    
    //Check if response is null
    if( $response == null )
      return null;
    
    if( !isset( $response->success ) )
      return null;
        
    //Check if request success
    if( $response->success == true )
      return true;
    else if( $response->success == false ) //Request error
      return false;
    
    return null;
    
  }
  
  public static function joinChannel( $channelName, $peers, $jwt ){
    
    $data = array( "peers" => $peers);
    
    $curl = curl_init("http://localhost:4000/channels/".$channelName."/peers");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true );
    curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode( $data ) );
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$jwt,
                                               "content-type: application/json") );
    
    curl_setopt($curl, CURLOPT_MUTE, 1); //Silent mode active
    
    //Get server response
    $result = curl_exec( $curl );
    
    echo print_r($result);
    
    //Check if an error occurred
    if( curl_errno($curl) ){  
      echo 'Curl error: ' . curl_error($curl);
      return null;
    }
    
    $response = json_decode( $result );
    
    curl_close($curl);    
    
    //Check if response is null
    if( $response == null )
      return null;
    
    if( !isset( $response->success ) )
      return null;
        
    //Check if request success
    if( $response->success == true )
      return true;
    else if( $response->success == false ) //Request error
      return false;
    
    return null;
    
  }
  
   public static function installChaincode( $peers, $chaincodeName, $chaincodePath, $chaincodeType, $chaincodeVersion, $jwt ){
    
    $data = array( "peers" => $peers, 
                   "chaincodeName" => $chaincodeName, 
                   "chaincodePath" => $chaincodePath, 
                   "chaincodeType" => $chaincodeType, 
                   "chaincodeVersion" => $chaincodeVersion );
    
    $curl = curl_init("http://localhost:4000/chaincodes");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true );
    curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode( $data ) );
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("authorization: Bearer ".$jwt,
                                               "content-type: application/json") );
    
    curl_setopt($curl, CURLOPT_MUTE, 1); //Silent mode active
    
    //Get server response
    $result = curl_exec( $curl );
    
    echo print_r($result);
    
    //Check if an error occurred
    if( curl_errno($curl) ){  
      echo 'Curl error: ' . curl_error($curl);
      return null;
    }
    
    $response = json_decode( $result );
    
    curl_close($curl);    
    
    //Check if response is null
    if( $response == null )
      return null;
    
    if( !isset( $response->success ) )
      return null;
        
    //Check if request success
    if( $response->success == true )
      return true;
    else if( $response->success == false ) //Request error
      return false;
    
    return null;
    
  }
  
  
  
  
  
}



?>