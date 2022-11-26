<?php 


require_once 'vendor/autoload.php';


$product1 = new Src\Product(1,"product one",50,100);
$product2 = new Src\Product(2,"product two",50,100);
$product3 = new Src\Product(3,"product three",50,100);
$product4 = new Src\Product(4,"product four",50,100);
$product5 = new Src\Product(5,"product five",50,100);


$cart = new Src\Cart;

/**
 * insert new item to cart
 */
$cart->insertItem($product1,5);
$cart->insertItem($product2,2);


/**
 * update quantity for cart 
 */
$cart->updateQty(2,10);

/**
 * remove item from cart
 */
// $cart->removeItem(2); 


/**
 * add tax to total price of products  
 */
$cart->addTax(10);


/**
 * applay discount for all products 
 */
$cart->addDiscount(10);


echo "<pre>";
/**
 * get total price for all products 
 */
echo $cart->getTotalPrice() . "<br>";


/**
 * display all items in the cart 
 */
// print_r($cart->getAllItems());
foreach($cart->getAllItems() as $item){
    echo "productId: ". $item->getProduct()->getId() . "<br>";
    echo "product Price: ". $item->getProduct()->getPrice() . "<br>";
    echo "product Quantity: ". $item->getQty() . "<br>";
    echo "product Total Price: ". $item->getProductTotalPrice() . "<br>";
    echo "----------------------------- <br>";
}