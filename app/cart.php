<?php
	namespace App;
	class Cart{
		public $products = null;
		public $totalPrice = 0;
		public $totalQuanty = 0;

		public function __construct($cart){
			if($cart){
				$this->products = $cart->products;
				$this->totalPrice = $cart->totalPrice;
				$this->totalQuanty = $cart->totalQuanty;
			}
		}

		public function AddCart($product, $id)
		{
			$newProduct = ["quanty"=>0,"price"=>$product->spGia,"productInfo"=>$product];
			if($this->products)
			{
				if(array_key_exists($id, $this->products))
				{
					$newProduct =$this->products[$id];
				}
			}
			$newProduct['quanty']++;
			$newProduct['price'] = $newProduct['quanty'] * $product->spGia;
			$this->products[$id]=$newProduct;
			$this->totalPrice += $product->spGia;
			$this->totalQuanty++;
		}

		public function DeleteItem($id)
		{
			$this->totalQuanty-= $this->products[$id]['quanty'];
			$this->totalPrice -= $this->products[$id]['price'];
			unset($this->products[$id]);
		}
	} 
?>