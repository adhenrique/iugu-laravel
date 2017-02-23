<?php

namespace Iugu\iugu;

class IuguService{

    public function iuguInit(){
        $builder = new \Iugu\Lib\IuguInit();

        return $builder;
    }
}