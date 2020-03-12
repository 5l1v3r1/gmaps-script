<?php
	error_reporting(0);
	function veriCek($url){
		
		$data = array(
			"version" => "2"
		);                                                                    
		$data_string = json_encode($data);                                                                                   
		
		$ch = curl_init($url);
		
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(    
			'Accept:application/json, text/plain, */*',                                                      
			'Host:banaozel.sahibinden.com',                                                      
			'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.86 Safari/537.36 OPR/46.0.2597.19 (Edition beta)',                                                      
			'x-api-key:94931ab85d095c37cb78f7bd2061922e32d235e6',
			'Content-Type:application/json;charset=UTF-8',  		
			'Content-Length: ' . strlen($data_string))                                                                     
		);                                                                                                                   
																															 
		$result = curl_exec($ch);

		return $result;
		
	}

?>