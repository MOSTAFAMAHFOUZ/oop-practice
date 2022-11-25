<?php 
namespace App;



class CartItem{

    private Product $product;
    private int $qty;
    private  $productTotalPrice;


    public function __construct(Product $product , $qty)
    {
        $this->product = $product;
        $this->qty = $qty;
        $this->productTotalPrice = $this->qty * $this->product->getPrice();
    }

    public function getProduct(){
        return $this->product;
    }

    public function getQty(){
        return $this->qty;
    }


    public function getProductTotalPrice(){
        return $this->productTotalPrice;
    }

    public function insertQty($qty):void{
        $this->qty = $qty;
        $this->productTotalPrice = $this->qty * $this->product->getPrice();
    }


}