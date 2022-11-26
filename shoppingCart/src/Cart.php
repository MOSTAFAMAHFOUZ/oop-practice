<?php 

namespace Src;

class Cart{

    private $items = [];
    private $totalPrice = 0;
    private $discount = 0;


    public function insertItem(Product $product,int $qty):array{
        $cartItem = $this->checkIfExists($product->getId());
        if(empty($cartItem)){
            // add item to cart 
            $cartItem = new CartItem($product,$qty);
            $this->items[$product->getId()] = $cartItem;
            // update total price
            $this->setTotalPrice(0,$cartItem->getProductTotalPrice());
            // $this->totalPrice = $this->totalPrice + ($product->getPrice() * $qty);
        }else{
            $this->updateQty($product->getId(),$qty);
        }
        return $this->getAllItems();
    }



    public function getItem($id):array{
        return $this->checkIfExists($id);
    }


    public function updateQty($id,$qty){
        $cartItem = $this->checkIfExists($id);
        if(!empty($cartItem)){
            $oldItemPrice = $cartItem->getProductTotalPrice();
            $cartItem->insertQty($qty);

            $cartItemPrice = $cartItem->getProductTotalPrice();
            $this->setTotalPrice($oldItemPrice,$cartItemPrice);
        }else{
            throw new \Exception("Item not Foun!");
        }
    }



    public function setTotalPrice($oldItemPrice,$cartItemPrice){
        $this->totalPrice = $this->totalPrice - $oldItemPrice;
        $this->totalPrice = $this->totalPrice + $cartItemPrice;
    }



    public function checkIfExists($id){
        if(array_key_exists($id,$this->items)){
            return $this->items[$id];
        }
        return false;
    }


    public function removeItem($id){
        $cartItem =  $this->checkIfExists($id);
        if($cartItem){
            $removedItemPrice = $cartItem->getProductTotalPrice();
            unset($this->items[$id]);
            $this->setTotalPrice($removedItemPrice,0);
        }
    }


    public function getAllItems(){
        return $this->items;
    }


    public function getTotalPrice(){
        return $this->totalPrice;
    }


    public function addTax($tax){
        return $this->totalPrice = $this->totalPrice + (($tax/100) * $this->totalPrice);
    }



    public function addDiscount($discount){
        return $this->totalPrice = $this->totalPrice - (($discount/100) * $this->totalPrice);
    }


    




}