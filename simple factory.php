<?php 


class Factory
{
    public function create($product, $id){
        switch ($product) {
            case 'Book':
                return new $product($id);
                break;
            case 'Pdf':
                return new $product($id);
                break;
            case 'Music':
                return new $product($id);
                break;
            default:
                throw new Exception("Invalid product $product", 1);
                break;
        }
    }
}

class Book
{
    private $id;
    private $price;
    private $delivery;
    function __construct($id){
        $this->id = $id;
        $this->getData($this->id);
    }

    private function getData(){
        $this->price = 40; //query from db
        $this->delivery = 'fedex'; //query from db
    }

    function __toString(){
        return $this->id ." ". $this->price ." ". $this->delivery.PHP_EOL;
    }
}

class Pdf
{
    private $id;
    private $price;
    private $delivery;
    function __construct($id){
        $this->id = $id;
        $this->getData($this->id);
    }

    private function getData(){
        $this->price = 35; //query from db
        $this->delivery = 'DPD'; //query from db
    }

    function __toString(){
        return $this->id ." ". $this->price ." ". $this->delivery.PHP_EOL;
    }
}

class Music
{
    private $id;
    private $price;
    private $delivery;
    function __construct($id){
        $this->id = $id;
        $this->getData($this->id);
    }

    private function getData(){
        $this->price = 25; //query from db
        $this->delivery = 'fedex'; //query from db
    }

    function __toString(){
        return $this->id ." ". $this->price ." ". $this->delivery.PHP_EOL;
    }
}