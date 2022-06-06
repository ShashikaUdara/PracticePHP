<?php
    class Fruit
    {
        public $name;
        public $color;

        // classes has methods
        function set_name($name)
        {
            $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();

    $apple->set_name("Apple");
    $banana->set_name("Banana");

    echo $apple->get_name();
    <br>
    echo $banana->get_name();
?>