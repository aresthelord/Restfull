<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error
 *
 * @author dnz
 */
class Result {
    public $error;
    public $message;
    public $data;
    public $success;
    //put your code here
    function __construct() {
        
    }
    public function getError() {
        return $this->error;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getData() {
        return $this->data;
    }

    public function getSuccess() {
        return $this->success;
    }

    public function setError($error) {
        $this->error = $error;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setSuccess($success) {
        $this->success = $success;
    }



}
