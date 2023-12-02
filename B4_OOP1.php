<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP1</title>
</head>
<body>
    <?php
        class Rectangle{
            private $length;
            private $width;
            // public function __construct($length, $width){
            //     $this->length=$length;
            //     $this->width=$width;
            // }
            public function setLength($length){
                $this -> length=$length;
            }
            public function getLength(){
                return $this->length;
            }

            public function setWidth($width){
                $this -> width=$width;
            }
            public function getWidth(){
                return $this->width;
            }

            public function getArea(){
                return $this->length+$this->width;
            }
            public function getPerimeter(){
                return 2*($this->length+$this->width);
            }
        }
        // $rec = new Rectangle(12, 9);
        $rec = new Rectangle();
        $rec->setLength(12);
        $rec->setWidth(9);
        echo 'dien tich hinh chu nhat la = '.$rec->getArea();
        echo '<br>';
        echo 'chu vi hinh chu nhat la = '.$rec->getPerimeter();
        echo '<br>';
        $rec->setLength(10);
        $rec->setWidth(5);
        echo 'dien tich hinh chu nhat la = '.$rec->getArea();
        echo '<br>';
        echo 'chu vi hinh chu nhat la = '.$rec->getPerimeter();
        echo '<br>';
    ?>
</body>
</html>