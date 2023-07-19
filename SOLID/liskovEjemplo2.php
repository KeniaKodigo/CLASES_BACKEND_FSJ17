<?php
#clase base
class Animal{
    public function volar(){

    }

    public function nadar(){
        
    }

    public function caminar(){
        
    }
}

class Pinguino extends Animal{
    public function volar(){
        throw new Exception("el pinguino no vuela");
    }
}

class Serpiente extends Animal{

}

#cumpliendo el principio LISKOV => interfaz o clase abstracta

interface AnimalesAcuaticos{
    public function nadar();
}

interface AnimalesVoladores{
    public function volar();
}

interface AnimalesArrastran{
    public function arrastrar();
}

class Serpiente2 implements AnimalesArrastran,AnimalesAcuaticos{
    public function arrastrar(){

    }

    public function nadar(){

    }

}

class Aguila implements AnimalesVoladores{
    public function volar()
    {
        
    }
}


?>