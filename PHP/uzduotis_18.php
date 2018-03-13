<?php

class c{
    private $mas = [];
    function add($skaicius) {
        $this->mas[] = $skaicius;

    }
    function info (){

        $x = 0;
        foreach ($this->mas as $value) {

            $x += $value;


        }
        return $x / count($this->mas );


    }

}
$p = new c();

$p->add(20);
$p->add(50);
$p->add(52);
$p->add(40);

var_dump($p->info());