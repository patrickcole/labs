<?php

    class DB {

        public static function ping(){

            echo "<p>Database PING!</p>";
        }
    }

    class Cart {

        var $items;

        function add_item($artnr, $num){

            $this->items[$artnr] = $num;
        }
    }

    class NamedCart extends Cart {

        var $owner;

        function __construct($name){

            $this->owner = $name;
        }

        function show_items(){

            echo('Cart: ' . $this->owner . ' <br />');
            print_r( $this->items );
        }
    }

    $cart = new NamedCart("PenguinGear");
    $cart->add_item(0, 2);
    $cart->show_items();

    DB::ping();
?>