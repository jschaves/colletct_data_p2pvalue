<?php
class share {
	private $url,$timeout;
	
	function __construct($url, $timeout = 10) {
		$this->url = rawurlencode($url);
		$this->timeout = $timeout;
	}

	function get_linkedin() { 
		$json_string = $this->file_get_contents_curl("https://www.linkedin.com/countserv/count/share?url=$this->url&format=json");
		$json = json_decode($json_string, true);
		return isset($json['count'])?intval($json['count']):0;
	}
	
	function get_fb() {
		$json_string = $this->file_get_contents_curl('http://api.facebook.com/restserver.php?method=links.getStats&format=json&urls='.$this->url);
		$json = json_decode($json_string, true);
		$res2 = isset($json[0]['share_count'])?intval($json[0]['share_count']):0;
		$res3 = isset($json[0]['like_count'])?intval($json[0]['like_count']):0;
		return  $res2. '","' .$res3;
	}

	function get_fb_like() {
		$json_string = $this->file_get_contents_curl('https://graph.facebook.com/' . $this->url . '?fields=likes');
		$json = json_decode($json_string, true);
		return  $json['likes'];
	}
	
	private function file_get_contents_curl($url){
		$ch	=	curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($ch, CURLOPT_FAILONERROR, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
		$cont = curl_exec($ch);
		if(curl_error($ch)) {
			die(curl_error($ch));
		} else {
			return $cont;
		}
	}
}
?>