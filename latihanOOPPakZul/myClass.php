<?php
class Lingkaran{
    protected $jariJari;

    public function __construct($r){
        $this->jariJari = $r;
    }

    public function getLuas(){
        $this->luas = 3.14 * ($this->jariJari * $this->jariJari);
        return $this->luas;
    }

    public function getKeliling(){
        $keliling = 2 * (3.14 * $this->jariJari);
        return $keliling;
    }
}


?>