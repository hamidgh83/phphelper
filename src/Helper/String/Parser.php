<?php

namespace Helper\String;

class Parser
{
    private $str;

    public $extract;

    public function __construct(String $str = null)
    {
        if($str) {
            $this->setString($str);
        } else {
            $this->extract = new Extract("");
        }
    }

    public function setString(String $str): self
    {
        $this->str = $str;

        $this->extract = new Extract($str);
        
        return $this;
    }

    public function __call($method, $args){}
    
}
