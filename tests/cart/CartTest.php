<?php 
namespace tests\cart;

use app\Exceptions\CartQuantityException;
use app\libraries\Product;
use app\libraries\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase {

    //private readonly Cart $cart;
    public function setup(): void {
        $this->cart = new Cart;
    }

    // testAlgumaCoisa
    // test_alguma_coisa
    public function test_if_cart_is_empty () {
        $this->assertEmpty($this->cart->getCart());
    }

    public function test_if_cart_is_not_empty () {
        $this->cart->add(new Product);

        $this->assertNotEmpty($this->cart->getCart());
    }

    public function test_catch_exception_if_cart_have_more_than_2_products () {
        
        $this->expectException(CartQuantityException::class);
        
        
        $this->cart->add(new Product);
        $this->cart->add(new Product);
        $this->cart->add(new Product);

        

        $this->assertNotEmpty($this->cart->getCart());
    }

    public function test_if_products_in_cart_id_greater_than_1() {
        $this->cart->add(new Product);
        $this->cart->add(new Product);
        $this->assertGreaterThan(1, count($this->cart->getCart()));
        //$this->assertGreaterThanOrEqual(1, count($this->cart->getCart()));
    }
}