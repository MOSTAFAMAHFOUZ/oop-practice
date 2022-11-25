<?php 

namespace App;


class Product{

    private $id;
    private $name;
    private $price;
    private $qty;


    public function __construct($id,$name,$price,$qty)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }


    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * Get the value of qty
     */ 
    public function getQty()
    {
        return $this->qty;
    }

   
}