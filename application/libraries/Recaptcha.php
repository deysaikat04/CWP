<?php

class Recaptcha {
    private $secret;
    private $url;
    private $CI;
    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->config('recaptcha');
        $this->CI->load->config('recaptcha');
        $this->secret = $this->CI->config->item('secret_key');
        $this->url = $this->CI->config->item('verify_url');
    }

    public function is_valid($response='',$ip="") {
        if($response==''){
            $response = $this->CI->input->post('g-recaptcha-response');
        }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_POSTFIELDS,array(
            'secret'=>  $this->secret,
            'response'=>$response,
            'remoteip'=>$ip
        ) );

        $result_ = curl_exec($ch);
        curl_close($ch);
        $Result = json_decode($result_);
        if($Result->success == 'true'){
            return TRUE;
        } else{
            return FALSE;
        }
    }
}