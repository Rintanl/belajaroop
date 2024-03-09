<?php
    class Motor
{
    // property
    public $kenalpot = 1;
    public $sepion = 2 ;
    public $velg = 'palang';
    public $ban = 'batlax';

    //method
    public function jalan()
    {
        echo "motor sudah berjalan yang memiliki knalpon sebanyak ".$this->kenalpot.
        "<br>";
    }
          
}
// instansiasi
$rxing = new Motor();
$rxing->jalan();
// $srxing->rem();
// $srxing->mogok();

// $vario = new Motor();
// $vario->jalan();





?>