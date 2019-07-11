<?php
namespace App\Services;

use Curl\Curl as Curl;
class CurlService{

    public function get($url,$data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        $curl->get($url,$data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;
    }

    public function post($url, $data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        //$curl->setCookie('key', 'value');
        $curl->post($url, $data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;

//        var_dump($curl->request_headers);
//        var_dump($curl->response_headers);
    }

    public function put($url, $data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        //$curl->setCookie('key', 'value');
        $curl->put($url, $data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;

//        var_dump($curl->request_headers);
//        var_dump($curl->response_headers);
    }

    public function patch($url, $data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        //$curl->setCookie('key', 'value');
        $curl->put($url, $data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;

//        var_dump($curl->request_headers);
//        var_dump($curl->response_headers);
    }

    public function delete($url, $data = [])
    {
        $curl = new Curl();
        //$curl->setBasicAuthentication('username', 'password');
//        $curl->setUserAgent('');
//        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        //$curl->setCookie('key', 'value');
        $curl->put($url, $data);

        if ($curl->error) {
            return $curl->error_code;
        }
        return $curl->response;

//        var_dump($curl->request_headers);
//        var_dump($curl->response_headers);
    }

}