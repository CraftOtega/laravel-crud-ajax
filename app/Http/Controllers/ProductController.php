<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

public function products(){

$products = Product::latest()->paginate(5);

return view('products', compact('products'));

}






//add product
public function addproduct(Request $request){

$request->validate([

'name' =>'required|unique:products',
'price' =>'required',
],


[

'name.required' => 'Name Is Required',
'name.unique' => 'product already exist',
'price.required' => 'Price Is Required',
]
);

$product = new Product();
$product->name = $request->name;
$product->price = $request->price;
$product->save();


return response()->json([

    'status' => 'success',

]); 
}






 



//update product
public function updateproduct(Request $request){

    $request->validate([
    
    'up_name' =>'required|unique:products,name,'.$request->up_id,
    'up_price' =>'required',
    ],
    
    
    [
    
    'up_name.required' => 'Name Is Required',
    'up_name.unique' => 'product already exist',
    'up_price.required' => 'Price Is Required',
    ]
    );
     

Product::where('id', '=', $request->up_id)->update([

'name' => $request->up_name,
'price' => $request->up_price,



]);
    
    return response()->json([
    
        'status' => 'success',
    
    ]); 
    }
    
    







 public function deleteproduct(Request $request){

Product::findOrfail($request->product_id)->delete();


return response()->json([
    
    'status' => 'success',

]); 

    }











    public function pagination(Request $request){



        $products = Product::latest()->paginate(5);

        return view('pagination_products', compact('products'))->render();


    }




//searching  product
public function  searchproduct(Request $request){

$products = Product::where('name', 'like', '%'.$request->search_string.  '%')
                      ->orWhere('price', 'like', '%'.$request->search_string.  '%')
                       ->orderBy('id', 'desc')
                        ->paginate(5);


                        if($products->count() >=1 ){

                 return view('pagination_products', compact('products'))->render();


                }else{



              return response()->json([

               'status' =>  'nothing_found',

              ]);

                }

                       

}




}
