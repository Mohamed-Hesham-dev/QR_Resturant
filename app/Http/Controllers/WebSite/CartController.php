<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\optioncart;
use App\Models\Order;
use App\Models\Resturant;
use App\Models\ResturantCategoryDashboard;
use App\Models\ResturantContactUsSetting;
use App\Models\ResturantProductDashboard;
use App\Models\ResturantTableDashboard;
use COM;
use Dotenv\Parser\Value;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        if(session()->has('cart')){
            $data= session()->get('cart');
            $totalprice=0;
            $resturant_id=0;
            foreach($data as $item){
                $resturant_id= $item['resturant_id'];
            };
            $resturan=Resturant::where("id", $resturant_id)->first();
            foreach($data as $item){
                $totalprice+=$item['totalprice'];
            }
            return view('Front.cart',compact('data','resturan','totalprice'));
          }
          else {
             return view('Front.cart' );
          }
   

    }


    public function create(Request $request)
    {
  }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $options = array_filter($request->all(), function ($key) {
            return $key !== "resturant_id" &&$key !== "_token" && $key !== "productname" && $key !== "productdescription" && $key !== "productid" && $key !== "quantity"&& $key !== "totalprice";
        }, ARRAY_FILTER_USE_KEY);

        $data=['resturant_id'=>$request->resturant_id,'productid'=>$request->productid,'productname'=>$request->productname,'productdescription' => $request->productdescription,'productquantity' => $request->quantity,'totalprice' => $request->totalprice,'options'=> $options];
        $cart=session()->get('cart',[]);
        
        $cart[$request->productid]=$data;
        session()->put('cart',$cart);
        return redirect()->back()->with('success','product added to cart');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        if(session()->has('cart')){
            $data= session()->get('cart');
        
            return response()->json(['data' => $data]);
          }
          else {
             $data="No data on Cart";
          }
        return view('Front.resturant', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        dd("omar");
        $data= session()->get('cart');
        echo $data;
    }

    public function storee(Request $request){
 
 
    if(session()->has('cart')){
        $data= session()->get('cart');
  
        $resturant_ids = [];
      
        foreach($data as $item){
       $resturant_ids[]= $item['resturant_id'];
        }
        $unique_restaurant_ids = array_unique($resturant_ids);
 
    foreach($unique_restaurant_ids as $rest){
        $order=[
            'resturant_id'=>$rest,
            'clientname'=>$request->clientname,
            'phonenumber'=>$request->phonenumber,
            'address'=>$request->address,
            'payment'=>$request->paymentmethod,
            'tablemethod'=>$request->table ."/". $request->methodd,
            'Items'=>$request->itemcount,
            'PickupTime'=>$request->pickupTime,
            'price'=>$request->totalprice,
          
        ];
        $orderid=Order::create($order)->id;
       
        foreach($data as $item){ 
            if($item['resturant_id']==$rest){
            $database=[
                'resturant_id'=>$item['resturant_id'],
                'productid'=>$item['productid'],
                'productname'=>$item['productname'],
                'productdescription'=>$item['productdescription'],
                'productquantity'=>$item['productquantity'],
                'totalprice'=>$item['totalprice'],
                'order_id'=>$orderid
            ];
            $id= Cart::create($database)->id;

            foreach($item['options'] as $key => $value){
            $options=[
                'cart_id'=>$id,
                'key'=>$key,
                'value'=>$value
            ];
            optioncart::create($options);
            }
            
        }
        }
    }
    
        session()->forget('cart');

        return view('Front.success', compact('id','request') );
    
    }
      else {
         
        return view('Front.cart')->with('error', ' Plese Go to resturant and select item'
);
      }


    }
}
