<?php

//All VoiceBase API calls will require a bearer token to authenticate.
//Make sure to add your bearer token
require('bearertoken.php');

class VBAPIs {

    public static function uploadMediaUrl($mediaUrl, $configuration, $metadata) {

        global $bearertoken;
        $url = "https://apis.voicebase.com/v3/media";
        $headers = array(
            'Authorization: Bearer ' . $bearertoken,
	        'Content-Type: multipart/form-data'
        );
        set_time_limit(0);
        $curl = curl_init();
        $params = array(
        "configuration" => $configuration,
        "metadata" => $metadata,
        "mediaUrl" => $mediaUrl
        );
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);	
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
          return $err;
        } else {
          echo $response;
          return $response;
        }

    }

    public static function uploadMediaFile($file, $configuration, $metadata) {

        global $bearertoken;
        $url = "https://apis.voicebase.com/v3/media";
        $headers = array(
            'Authorization: Bearer ' . $bearertoken,
	        'Content-Type: multipart/form-data'
        );
        set_time_limit(0);
        $curl = curl_init();
        $params = array(
        "configuration" => $configuration,
        "metadata" => $metadata,
        "media" => $file
        );
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);	
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
          return $err;
        } else {
          echo $response;
          return $response;
        }

    }

    public static function getAllMedia() {

        global $bearertoken;
        $url = "https://apis.voicebase.com/v3/media";
        $headers = array(
            'Authorization: Bearer ' . $bearertoken,
	        'Content-Type: application/x-www-form-urlencoded'
        );
        set_time_limit(0);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_GET, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);	
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
          return $err;
        } else {
          echo $response;
          return $response;
        }

    }

    public static function getSingleMedia($mediaId) {

        global $bearertoken;
        $url = "https://apis.voicebase.com/v3/media/" . $mediaId;
        $headers = array(
            'Authorization: Bearer ' . $bearertoken,
	        'Content-Type: application/x-www-form-urlencoded'
        );
        set_time_limit(0);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_GET, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);	
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
          return $err;
        } else {
          echo $response;
          return $response;
        }

    }

};

?>