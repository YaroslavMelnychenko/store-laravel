<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RsaController extends Controller
{
    private
            $sessid,
            $publicKey,
            $privateKey;

    private function generateString() {
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
        $numChars = strlen($chars);
        $string = '';
        for($i = 0; $i < 16; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

    private function storeSession() {
        Session::put('rsa_sessid', $this->sessid);
        Session::put('rsa_prikey', $this->privateKey);
    }

    public function generateKeyPair(){
        $this->sessid = md5($this->generateString());
        $config = array('private_key_bits' => 2048);
        $res = openssl_pkey_new($config);
        openssl_pkey_export($res, $privateKey, $this->sessid);
        $publicKey = openssl_pkey_get_details($res);
        $this->publicKey = trim($publicKey['key']);
        $this->privateKey = trim($privateKey);
        $this->storeSession();
        return response($this->publicKey);
    }
}
