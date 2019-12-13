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

    function take_transport($transport) {
        if(!is_object($transport)) return false;
        $transport->byname = $this->name;
        $this->transport = $transport;
        return $this;
    }

    function move(){
        if(method_exists($this->transport, 'move')
            && is_subclass_of($this->transport, "Mototechnics"))
        {
            $this->transport->move();
        } else echo "No transport to use".PHP_EOL;
    }

    function stop(){
        if(method_exists($this->transport, 'stop')
            && is_subclass_of($this->transport, "Mototechnics"))
        {
            $this->transport->stop();
        } else echo "No transport in use".PHP_EOL;
    }

}