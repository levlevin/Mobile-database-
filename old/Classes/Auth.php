<?php

class Auth{
	private $_siteKey;
	
public function __construct()
	{
		$this->_siteKey = 'My site key';
	}
	
private function randomString($length = 50)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxuz';
		$string = ' ';
		
		for ($p = 0; $p < $length; $p++){
			$string .= $characters[mt_rand(0, strlen($characters))];
		}
			return $string;
	}
	
protected function hash($data)
	{
		return hash_mac('sha512', $data, $this->_siteKey);
	}
	
public function isManager()
	{		
		if($selection['type'] == 'manager')
			{
			return true;
			}
		return false;
	}

public function isClient()
	{		
		if($selection['type'] == 'client') 
			{
			return true;
			}
		return false;
	}

public function login($login, $password)
	{
		//$selection = ...
		$password = $selection[0] ['user_salt'] . $password;
		$password = $this->hashData($password);
		
		if($match == true)
			{
			$random	= $this->randomString();
			$token = $_SERVER['HTTP_USER_AGENT'] . $random;
			$token = $this->hashData($token);
			
			session_start();
			$_SESSION['token'] = $token;
			$_SESSION['user_id'] = $selection[0] ['id'];
			//$inserted = ...
			
			if($inserted != false)
				{
				return 0;
				}
			return 3;
			}
		return 4;
	}

public function checkSession()
	{
		//$selection = ...
		if($selection)
			{
			if(session_id() == $selection['session_id'] && $_SESSION['token'] == $selection['token'])
				{
					$this->refreshSession();
					return true;
				}
			}
		return false;
	}
	
private function reshreshSession()
	{
		session_regenerate_id();
		$random = $this->randomString();
		$token = $_SERVER['HTTP_USER_AGENT'] . $random;
		$token = $this->hashData($token);
		$_SESSION['token'] = $token;
	}
	

	
	
}
?>