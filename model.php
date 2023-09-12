<?php

namespace mvc {
    public $content;

    //constructor
    public function __construct(){
        $this->content = "Hello World";

    }
    public function getContent(){
        return $this->content;
    }
    public function setContent(string $content){
        $this->content = $content;
    }
}