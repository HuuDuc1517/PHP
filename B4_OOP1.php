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
            public function __construct($length, $width){
                $this->length=$length;
                $this->width=$width;
            }
            public function getArea(){
                return $this->length+$this->width;
            }
            public function getPerimeter(){
                return 2*($this->length+$this->width);
            }
        }
        $rec = new Rectangle(12, 9);
        echo 'dien tich hinh chu nhat la = '.$rec->getArea();
        echo '<br>';
        echo 'chu vi hinh chu nhat la = '.$rec->getPerimeter();
    ?>
</body>
</html>