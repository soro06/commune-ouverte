<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class License_model extends CI_Model {

    protected $cipher = 'AES-128-CBC';
    private $key = "MAINTEX";

    function __construct() {
        
    }

    public function license_get_status() {
        if (!file_exists('license.xml')) {
            return 'license_not_found';
        }
        $license = file_get_contents('license.xml');
        $xml = simplexml_load_string(tidy_repair_string($license, array('output-xml' => true, 'input-xml' => true)));
        $xml1 = simplexml_load_string(tidy_repair_string($this->decrypt($xml->activator), array('output-xml' => true, 'input-xml' => true)));
        $installation_code = ($xml1->activation_mode == 'local') ? $this->license_model->get_host_code() : $_SERVER['SERVER_NAME'];
        if ($xml1->hosting_serveur_code != trim($installation_code)) {
            return 'license_invalid';
        } elseif ($xml1['is_full_time'] != '1' && $xml1->end_date < date('Y-m-d')) {
            return 'license_expired';
        } else {
            return 'license_valid';
        }
    }

    public function license_get_tag_value($tag) {
        if (!file_exists('license.xml')) {
            return null;
        }
        $license = file_get_contents('license.xml');
        $xml = simplexml_load_string(tidy_repair_string($license, array('output-xml' => true, 'input-xml' => true)));
        $xml1 = simplexml_load_string(tidy_repair_string($this->decrypt($xml->activator), array('output-xml' => true, 'input-xml' => true)));

        if (isset($xml1[$tag])) {
            return $xml1[$tag];
        } else {
            $obj = (array) $xml1;
            if (isset($obj[$tag])) {
                return $obj[$tag];
            } else {
                return null;
            }
        }
    }

    function is_sys_function_enabled($function = "shell_exec") {
        return is_callable($function) && stripos(ini_get('disable_functions'), $function) === FALSE;
    }

    function get_host_code() {
        $code = '';
        $shell = '';
        switch (PHP_OS) {
            case 'Darwin': //for mac
                $shell = "ioreg -l | awk '/IOPlatformSerialNumber/ {print $4;}'";
                break;
            case 'Linux':
                $shell = "sudo dmidecode -t system | grep Serial";
                break;
            case 'WINNT':
            case 'WIN32':
            case 'Windows':
                $shell = 'wmic bios get serialnumber 2>&1';
                break;
            default:
                break;
        }
        if ($this->is_sys_function_enabled("shell_exec")) {
            $code = strrev(mb_strtoupper(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(array(" ", "SerialNumber", "serialnumber"), '', shell_exec($shell)))));
            if (empty($code))
                $code = filectime(__DIR__);
        } else {
            $code = filectime(__DIR__);
        }
        return $this->config->item('license_prefixe') . $code;
    }

    function encrypt($plaintext) {
        $ivlen = openssl_cipher_iv_length($this->cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext_raw = openssl_encrypt($plaintext, $this->cipher, $this->key, $options = OPENSSL_RAW_DATA, $iv);
        $hmac = hash_hmac('sha256', $ciphertext_raw, $this->key, $as_binary = true);
        return base64_encode($iv . $hmac . $ciphertext_raw);
    }

    function decrypt($ciphertext) {
        $c = base64_decode($ciphertext);
        $ivlen = openssl_cipher_iv_length($this->cipher);
        $iv = substr($c, 0, $ivlen);
        $hmac = substr($c, $ivlen, $sha2len = 32);
        $ciphertext_raw = substr($c, $ivlen + $sha2len);
        $original_plaintext = openssl_decrypt($ciphertext_raw, $this->cipher, $this->key, $options = OPENSSL_RAW_DATA, $iv);
        $calcmac = hash_hmac('sha256', $ciphertext_raw, $this->key, $as_binary = true);
        if (hash_equals($hmac, $calcmac)) {
            return $original_plaintext;
        } else {
            return FALSE;
        }
    }

}

?>