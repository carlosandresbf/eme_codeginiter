<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_PHPMailer {

    public function MY_PHPMailer() {
        //require_once('PHPMailer/class.phpmailer.php');
		require_once(APPPATH.'/third_party/PHPMailer/PHPMailerAutoload.php');
		
    }

}

?>