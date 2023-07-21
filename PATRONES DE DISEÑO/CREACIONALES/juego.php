<?php
/**
 * crear un videojuego en base al nivel crear un nuevo personaje
*nivel facil
*nivel intermedio
*nivel dificil
*3 personajes
*Zelda
*Batman
*luck skywalker
 */

#aplicando el metodo de fabrica

interface Personaje{
    public function golpear();
    public function vida();
}

class Zelda implements Personaje{
    public function golpear()
    {
        return "Zelda da un corbazo";
    }

    public function vida()
    {
        return "Zelda tiene 9 corazones de vida";
    }
}

class Batman implements Personaje{
    public function golpear()
    {
        return "Batman da batigolpe";
    }

    public function vida()
    {
        return "Batman tiene 12 corazones de vida";
    }
}

class Skywalker implements Personaje{
    public function golpear()
    {
        return "skywalker da un corbazo azul";
    }

    public function vida()
    {
        return "skywalker tiene 20 corazones de vida";
    }
}

//crear el metodo fabrica
abstract class NivelesJuego{
    //metodo abstracto
    abstract function obtenerPersonaje() : Personaje;

    //metodo para imprimir el comportamiento de los personajes
    public function imprimirPersonajes(){
        $personaje = $this->obtenerPersonaje();
        echo $personaje->golpear() . "<br>";
        echo $personaje->vida();
    }
}

//clases hijas de la fabrica
class NivelFacil extends NivelesJuego{
    public function obtenerPersonaje(): Personaje
    {
        return new Zelda;
    }
}

class NivelIntermedio extends NivelesJuego{
    public function obtenerPersonaje(): Personaje
    {
        return new Batman;
    }
}

class NivelDificil extends NivelesJuego{
    public function obtenerPersonaje(): Personaje
    {
        return new Skywalker;
    }
}

//metodo para obtener los niveles del juego
function obtenerNivelJuego(NivelesJuego $nivel){
    echo $nivel->imprimirPersonajes();
}

obtenerNivelJuego(new NivelIntermedio); //

?>