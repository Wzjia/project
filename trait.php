<?php
trait a{
    public function aa(){
        echo 111;
    }
}
trait b{
    public function aa(){
        echo 222;
    }
}
class c{
    use a;
    use b;

}

$a = new c();
$a->aa();






