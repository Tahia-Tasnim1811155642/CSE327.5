<?php

namespace App\Http\Livewire;
use Cart;

use Livewire\Component;

class CartComponent extends Component
{
    public function increaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
    }

    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
    }

    public function destroy($rowId){
        Cart::instance('cart')->remove($rowId);
        session()->flash('success_message', 'Item has been remove.');
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
