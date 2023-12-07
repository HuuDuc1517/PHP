<?php
    class Shape{
        abstract public function dientich();
    }

    class Tamgiac extends Shape{
        private $base;
        private $height;
        public function __construct($base, $height){
            $this->base=$base;
            $this->height=$height;
        }
        public function dientich(){
            return 0.5*$this->base*$this->height;
        }
    }

    class ChuNhat extends Shape{
        private $width;
        private $length;
        public function __construct($width, $length){
            $this->width=$width;
            $this->length=$length;
        }
        public function dientich(){
            return $this->width * $this->length;
        }
    }

    $tamgiac = new Tamgiac(5,7);
    echo 'Dien tich tam giac = '.$tamgiac->dientich();
    echo '<br>';
    $chunhat = new ChuNhat(4,6);
    echo 'dien tich hinh chu nhat = '.$chunhat->dientich();
?>