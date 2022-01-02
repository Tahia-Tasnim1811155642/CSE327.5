<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\WithPagination;
use Livewire\Component;
use Cart;
use App\Models\Category;

class SearchComponent extends Component
{
    public $sorting;

    public $search;
    public $product_cat;
    public $product_cat_id;


    public function mount(){
        $this->sorting = "default";
        $this->fill(request()->only('search', 'product_cat','product_cat_id'));
    }
    public function store($product_id, $product_name, $product_price){
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in the cart');  
        return redirect()->route('product.cart');
     }

    use WithPagination;
    public function render()
    {
        if($this->sorting == 'date'){
            $products = Product::where('name', 'like', '%'.$this->search.'%')->where('category_id', 'like','%'.$this->$product_cat_id.'%')->orderBy('created_at', 'DESC')->paginate(12);
        }

        else if($this->sorting == 'price'){
            $products = Product::where('name', 'like', '%'.$this->search.'%')->where('category_id', 'like','%'.$this->$product_cat_id.'%')->orderBy('regular_price', 'ASC')->paginate(12);
        }

        else if($this->sorting == 'price-desc'){
            $products = Product::where('name', 'like', '%'.$this->search.'%')->where('category_id', 'like','%'.$this->$product_cat_id.'%')->orderBy('regular_price', 'DESC')->paginate(12);
        }
        else {
            $products = Product::paginate(12);
        }

        $categories = Category::all();

        return view('livewire.search-component', ['products'=> $products, 'categories'=> $categories])->layout("layouts.base");
       
    }
}
