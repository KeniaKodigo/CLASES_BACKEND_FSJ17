<?php

#aplicando el patron decorator


interface Personajes{
    public function recursos();
}

#clases que van a implementar la interfaz
class Zelda implements Personajes{
    public function recursos()
    {
        return "Zelda cuenta con una espada";
    }
}

class Batman implements Personajes{
    public function recursos()
    {
        return "Batman cuenta con un boomeran";
    }
}

class SkyWolker implements Personajes{
    public function recursos()
    {
        return "SkyWolker cuenta con un sable de luz";
    }
}

#agregando nuevos recursos a los personajes
/** Clase Decoradora */
class DecoratorPersonaje implements Personajes{
    //atributo protegido
    protected $personaje;

    //metodo donde pedimos el personaje a decorar
    /**
     * $personajes = Personajes (interface)
     * 
     * instancia
     */
    public function __construct(Personajes $personajes)
    {
        $this->personaje = $personajes;
        //metodo recursos()
    }

    public function recursos()
    {
        return $this->personaje->recursos();
        /**
         * return "Zelda cuenta con una espada";
         *  return "Batman cuenta con un boomeran";
         * return "SkyWolker cuenta con un sable de luz";
         */
    }
}

#clases decoradoras (clases extras)
class Bomba extends DecoratorPersonaje{

    //sobreescribo el metodo recursos()
    public function recursos()
    {
        //hacemos referencia de la clase padre (DecoratorPersonaje)
        return parent::recursos() . " ,lleva una bomba";
    }
}


class Escudo extends DecoratorPersonaje{

    //sobreescribo el metodo recursos()
    public function recursos()
    {
        //hacemos referencia de la clase padre (DecoratorPersonaje)
        return parent::recursos() . " ,lleva un escudo";
    }
}

class Navaja extends DecoratorPersonaje{

    //sobreescribo el metodo recursos()
    public function recursos()
    {
        //hacemos referencia de la clase padre (DecoratorPersonaje)
        return parent::recursos() . " ,lleva una navaja";
    }
}

//creando el metodo para decorar el personaje
function decorarPersonaje(Personajes $personajes){
    return $personajes->recursos();
}

$personaje = new Zelda();
#decorar el personaje
$personaje = new Navaja($personaje);

$personaje2 = new SkyWolker();
$personaje2 = new Navaja($personaje2);
$personaje2 = new Bomba($personaje2);

echo decorarPersonaje($personaje);
echo "<h3>Decorando otro personaje</h3>";
echo decorarPersonaje($personaje2);


?>