<?php
/*
Queremos hacer un sistema para elaborar varios tipos de pizza para el dueño del negocio,
... tenomos dos pizzas bas o tradicionales: Pizza Margarita y Pizza Vegetariana, los cleientes
... ahora quieren ageragerle ingredientes extra: Albahaca, Tocino, Peperoni, Aceitunas

*/

//1. Interface (proceso padre) de nuestros componentes(pizzas) origianles base

interface Pizza {
    public function preparar();
}

//2. Crear los componentes concretos (pizzas orignales base)
class Vegetariana implements Pizza
{
    public function preparar()
    {
        return "Prepare una Pizza Vegetariana";
    }
}

class Margarita implements Pizza
{
    public function preparar()
    {
        return "Prepare una Pizza Margarita";
    }
}

//3. Declarar nuestra clase Decoradora (decoradora padre)
class PizzaExtras implements Pizza
{
    //El decorador delega como va a querer su pizza
    protected $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function preparar()
    {
        return $this->pizza->preparar();
    }
}

//4. Crear las Clases Concretas Decoradoras
class Albahaca extends PizzaExtras
{
    public function preparar()
    {
        //PizzaExtras::preparar()
        //instanciar la clase padrea
        return parent::preparar() . " con extra Albahaca";
    }
}

class Tocino extends PizzaExtras
{
    public function preparar()
    {
        return parent::preparar() . " con extra Tocino";
    }
}

class Aceitunas extends PizzaExtras
{
    public function preparar()
    {
        return parent::preparar() . " con extra Aceitunas";
    }
}

//5. Mostrar el pedido realizado (preparacion final)
function hacerPizza(Pizza $pizza)
{
    echo "Su orden es: " . $pizza->preparar() . "\n";
}


// Instaciamos
$pizza1 = new Margarita();
$pizza1 = new Aceitunas($pizza1);
$pizza1 = new Tocino($pizza1);
$pizza1 = new Albahaca($pizza1);

//Preparar la pizza y ver resultado
hacerPizza($pizza1);



class Slack2{

    public static function saludar(){
        return "Estamos un enviando un mensaje desde slack";
    }
}

?>