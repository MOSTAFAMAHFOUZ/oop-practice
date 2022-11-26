# Shopping Cart Using PHP - OOP  
- implement oop of PHP to make a full customized shopping cart 

---
### How to use this code 
--- 

```PHP
$product1 = new App\Product(1,"product one",50,100);
$product2 = new App\Product(2,"product two",50,100);
$product3 = new App\Product(3,"product three",50,100);
$product4 = new App\Product(4,"product four",50,100);
$product5 = new App\Product(5,"product five",50,100);


$cart = new App\Cart;

```
  ## Methods for usage 
* getAllItems() 
  * to get all items from cart 
  ```PHP
    $cart->getAllItems() 
  ```
* insertItem(Product $product,$qty) 
  * to insert new item 
  * it takes object from the product and quantity for this product 
```PHP
    $cart->insertItem($product1,5);
    $cart->insertItem($product2,2); 
```
* updateQty($id,$qty) 
  * to insert new quantity or update quantity of specific product  

```PHP
    $cart->updateQty(2,10); 
```

* removeItem($id)
  * to remove item from cart 

```PHP
    $cart->removeItem(2); 
```

* getTotalPrice()
  * to get all total price of cart 

```PHP
    $cart->getTotalPrice()
```

* addDiscount($discount)
  * to applay discount for all items in the cart

```PHP
    $cart->addDiscount(10);
```

* addTax($tax)
  * to applay tax for all items in the cart  

```PHP
    $cart->addTax(10); 
```