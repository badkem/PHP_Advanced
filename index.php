<?php
class MyClass {
    public function construct(array $kem) {
        echo count($kem);
        var_dump($kem);
    }

    public function destruct() {}
}

$allZones = array(
    'userName'    =>  "Kem",
    'userEmail'   =>  "hoangdinhthangloi@gmail.com"
);
$hello = new MyClass($allZones);