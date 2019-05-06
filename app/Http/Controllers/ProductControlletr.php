<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductControlletr extends Controller
{
  protected $product;

     public function __construct(HomeRepository $product)
     {
         $this->product = $product;
     }

     public function index()
 	  {
 	    	$data['products'] = $this->product->getProduct();
 		    return response()->json($data, 200);
 	   }

     public function store(Request $request)
    {
       $this->cart->saveProduct($request->all());
       return response()->json('success');
    }
}
