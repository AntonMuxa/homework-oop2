<?php


class Driver {
/*это класс водителя мотоцикла, метод take_transport принимает объект (скутераб мотоцикла или гидроцикла)
затем добавляет в объект имя и в поле transport добавляет весь объект и возвращает его. Метод move берет объект из поля
move и вызывает его собственный метод move который наследовался от мотомеханики*/
    public $name;
    private $transport;

    function __construct($name)
    {
        $this->name = $name;
    }

    function take_transport(Mototechnics $mototechnics) { /*Тут полиморфизм*/

        $mototechnics->byname = $this->name;
        $this->transport = $mototechnics;
        return $this;
    }

    function move(){
        $this->transport->move();
    }

    function stop(){
        $this->transport->stop();
    }

}