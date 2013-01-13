<?php

function islogin(){
		$mvc =& getInstance();
		if($mvc->session->_get('islogin')==true){
			return true;
		}else{
			return false;
	}
}

function isadmin(){
	$mvc =& getInstance();
	return ($mvc->session->_get('usertype')==0) ? true : false;
}

function rel(){
	$mvc=& getInstance();

	return $mvc->session->_get('religion');
}

function getRandomString($length = 6) {
            $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ+-*#&@!?";
            $validCharNumber = strlen($validCharacters);

            $result = "";

            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, $validCharNumber - 1);
                $result .= $validCharacters[$index];
            }

            return $result;
}
