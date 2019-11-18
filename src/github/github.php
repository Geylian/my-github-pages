<?php

namespace geylian\github;

use \Curl\Curl;

class GitHub {

    public function __construct($token) {
        $this->token = $token;
    }

    public function getReposCurl() {
        $curl = new Curl();
        $curl->setBasicAuthentication($this->token);
        $curl->get('https://api.github.com/user/repos');
        return $curl->response;
    }
}