<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 3/15/2018
 * Time: 11:31 AM
 */

/*Panaudodami prieš tai sukurtą klasę automobilis (8.1),
sukurkite klases lengvasis ir krovininis, kurios paveldi automobilis klasę.
 automobilis klasę papildykite metodu “duomenys”, kuris išvestų suformatuotą eilutę “gamintojas - modelis - metai”.
lengvasis klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “gamintojas, modelis, metai (lengvasis automobilis)”.
 lengvasis automobilis ‐ tiesiog paprastas žodis.
 */

class automobilis{
    public $gamintojas;
    public $modelis;
    public $metai;


    function  __construct($n, $a,$s){
        $this->gamintojas = $n;
        $this->modelis = $a;
        $this->metai = $s;
    }

    function duomenys (){
        $s = "%s - %s - %s <br> ";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }

}

class lengvasis extends automobilis {

    function duomenys (){
        $s = "%s , %s , %s lengvasis automobilis <br> ";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }

}

class krovininis extends automobilis {

}
$c = new automobilis('Audi', 'A6', 2012);
$f = new lengvasis('BMW', 530, 2017);
$g = new krovininis('Volvo', 'S200', 2013);

$c->duomenys();
$f->duomenys();
$g->duomenys();