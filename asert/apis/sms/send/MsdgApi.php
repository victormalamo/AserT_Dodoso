<?php 

date_default_timezone_set('Africa/Dar_es_Salaam');
class MsdgApi 
{
	const HTTP_INTERFACE = 'curl';
	const CLIENT_KEY = 'PhBt3cqTZLNx7gBhEvqTNy57ppJn2EUc1Q2tAeFU';    
	const REQUEST_SOURCE = 'api';
	private $user_id = 'shaaban.saidi@maliasili.go.tz';
	private $server_endpoint = "msdg.ega.go.tz/msdg/public/quick_sms";
	private $request_data = null;
	private $results = array();
	protected function generateAuthHeader()
	{
		return array(
			'X-Auth-Request-Hash:'.$this->getRequestHash(),
			'X-Auth-Request-Id:'.$this->user_id,
			'X-Auth-Request-Type:'.Msdgapi::REQUEST_SOURCE
		);
	}
	public function getRequestHash()
	{
		return base64_encode(hash_hmac('sha256', $this->request_data, Msdgapi::CLIENT_KEY, true));
	}
	protected function httpRequest($url, $get_variables=null, $post_variables=null, $headers=null)
	{
		$this->request_data = $post_variables['data'];
		if($headers != null)
		{
			$headers = array_merge($this->generateAuthHeader(),$headers);
		}
		else
		{
			$headers = $this->generateAuthHeader();
		}
		$interface = Msdgapi::HTTP_INTERFACE;
		if(Msdgapi::HTTP_INTERFACE =='auto')
		{
			if(function_exists('curl_exec'))
			{
				$interface = 'curl';
			}
			else 
			{
				$interface = 'fopen';
			}
		}

		if($interface == 'curl')
		{
			return $this->curlRequest($url, $get_variables, $post_variables, $headers);
		}
		elseif($interface == 'fopen') 
		{
			return $this->fopenRequest($url, $get_variables, $post_variables, $headers);
		}
		else 
		{
			return null;
		}
	}
	private function curlRequest($url, $get_variables=null, $post_variables=null, $headers=null)
	{
		$ch = curl_init();
		if(is_array($get_variables))
		{
			$get_variables = '?' . str_replace('&amp;','&',urldecode(http_build_query($get_variables)));
		}
		else 
		{
			$get_variables = null;
		}
		curl_setopt($ch, CURLOPT_URL, $url . $get_variables);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		if(is_array($post_variables))
		{
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_variables);
		}
		if(is_array($headers))
		{
			curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
		}
		$response = curl_exec($ch);
		$code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
		curl_close($ch);
		return array('body'=>json_decode($response),'code'=>$code);
	}

  public function sendQuickSms($post_variables)
  {
      $response = $this->httpRequest($this->server_endpoint, null, $post_variables);  
      return $this->printResponse($response);
  }  
	public function printResponse($response){
	    if(substr($response['code'],0,1) == '2')
	    {
	      return $response['body'];
	    }
	    else 
	    {
	    	return $response;
	    }
	}
}
 
?>