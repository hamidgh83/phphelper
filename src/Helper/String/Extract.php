<?php

namespace Helper\String;

class Extract
{
    private $str;

    public function __construct(String $str)
    {
        $this->str = $str;
    }

    public function email(): array
    {
        preg_match_all("/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i", $this->str, $matches);
    
        return $matches[0];
    }

    public function url(): array
    {
        preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $this->str, $matches);

        return $matches[0];
    }

    public function __call($method, $args){}
}