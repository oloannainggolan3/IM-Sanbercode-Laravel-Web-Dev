<?php
class animal{
    public $name;
    public $legs = 4;
    public $cold_blooded = false;

    public function __construct($str) {
        $this->name = $str;
    }
}
?>