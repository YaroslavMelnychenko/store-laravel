<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CryptAuthData
{
    private function decrypt($data) {
        $sessid = trim(Session::get('rsa_sessid'));
        $prikey = trim(Session::get('rsa_prikey'));
        $data = base64_decode($data);
        if(openssl_private_decrypt($data, $decrypted, openssl_pkey_get_private($prikey, $sessid))){
            return $decrypted;
        } else {
            return false;
        }
    }

    private function destroySession() {
        Session::forget('rsa_sessid');
        Session::forget('rsa_prikey');
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Session::has('rsa_sessid')){
            return response('RSA session not exists', 500);
        } else {
            $decrypted_email = $this->decrypt($request->email);
            $decrypted_password = $this->decrypt($request->password);
            if(!$decrypted_email || !$decrypted_password){
                return response('RSA decryption error', 500);
            } else {
                $request->email = $decrypted_email;
                $request->password = $decrypted_password;
            }
            $this->destroySession();
        }
        return $next($request);
    }
}
