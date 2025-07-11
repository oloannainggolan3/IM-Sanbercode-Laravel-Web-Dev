<?php
require_once ("animal.php");
class frog extends animal 
{
    public $legs = 4;

    public function Jump() {
        return "Hop hop";
    }
}
?>