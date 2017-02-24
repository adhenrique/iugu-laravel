<?php

namespace Iugu\iugu;

class IuguService{

    public function iuguInit(){
        $builder = new \Iugu\iugu\Lib\IuguInit();

        return $builder;
    }
}