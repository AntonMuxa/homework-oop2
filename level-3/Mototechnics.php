<?php


abstract class Mototechnics implements iTransport
/*создали абстрактный класс мотомеханика, который реализовал интерфейс транспорт
здесь указал необходимие поля которые необходимо реализовать в наследующих классах и реализовал два метода интерфейса
которые в свою очередь обращаются к текущему объекту также создал абстрактные методы */
{
    private $model;
    private $number_of_wheels;
    private $max_speed;

    public function move(){
        echo "This " .strtolower(get_class($this)). " " . $this->getModel() . " moving by " . $this->byname . " this max speed " . $this->getMaxSpeed() . " on " . $this->getNumberOfWheels() . ' wheels <br>';
    }
    public function stop(){
        echo "This " .strtolower(get_class($this)). " " . $this->getModel() . " stop moving by " . $this->byname . '<br>';
    }
    abstract protected function getModel();
    abstract protected function getNumberOfWheels();
    abstract protected function getMaxSpeed();
}