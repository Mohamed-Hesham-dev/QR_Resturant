<?php


namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\AboutUsSetting;
use App\Models\ContactUsSetting;
use App\Models\feedback;
use App\Models\Reservation;
use App\Models\Resturant;
use App\Models\ResturantCategoryDashboard;
use App\Models\ResturantContactUsSetting;
use App\Models\ResturantOptionDashboard;
use App\Models\ResturantProductDashboard;
use App\Models\ResturantTableDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\Guard;


class WebSiteResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name, $id)
    {

        $resturant = Resturant::where('id', $id)->first();
        $tables = ResturantTableDashboard::where('resturant_id', $id)->get();

        $contactUs = ResturantContactUsSetting::where('resturant_id', $id)->first();
        $allproducts = ResturantProductDashboard::where('resturant_id', $resturant->id)->paginate(50);
        $categories = ResturantCategoryDashboard::where('resturant_id', $resturant->id)->get();

        return view('Front.resturant', compact('resturant', 'contactUs', 'allproducts', 'categories', 'tables'));
    }

    public function filter( Request $request){
        $resturant = Resturant::where('id',$request->restid)->first();
        $tables = ResturantTableDashboard::where('resturant_id', $request->restid)->get();

        $contactUs = ResturantContactUsSetting::where('resturant_id', $request->restid)->first();
        $categories = ResturantCategoryDashboard::where('resturant_id', $resturant->id)->get();

      $res=ResturantCategoryDashboard::findOrFail($request->id);
        $allproducts=$res->product;
  
        return view('Front.categoryproduct', compact('resturant', 'contactUs', 'allproducts', 'categories', 'tables'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function reservation(Request $request)
    {
        
        $resturant_name=Resturant::where('id',$request->resturant_id)->first();
        $request->validate([
                'phone' => 'required',
                'date' => 'required',
                'time' => 'required',
                'seats' => 'required',
                'message' => 'required',
                'email' => 'required|email|unique:reservations',
        ]);
        $data = [
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'resturant_id' => $request->resturant_id,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'seats' => $request->seats,
            'request' => $request->message
        ];

        $data = Reservation::create($data);
        return redirect('/resturant/'.$resturant_name->resturant_name.'/'.$request->resturant_id)->with('success', 'Reservation Created Successfully');
    }
    public function feedback(Request $request){
        $request->validate([
            'phone'=> 'required',
            'feedback'=>'required',
        ]);
        
        $data=[
       'phone'=> $request->phone,
       'feedback'=>$request->feedback,
       'resturant_id' => $request->resturant_id,
        ];
       
       feedback::create($data);
       return redirect('/resturant/'.$request->resturant_name.'/'.$request->resturant_id)->with('success', 'Thank you for your opinion');
    }
    public function getImages($resturantId)
    {
        $product = ResturantProductDashboard::findOrFail($resturantId);
        $images = $product->getMedia('images');

        $imageUrls = $images->map(function ($image) {
            return $image->getUrl(); // Get the URL for each image
        });

        $optionsWithValues = $product->options()
            ->with(['values.productOptionValues' => function ($query) use ($resturantId) {
                $query->where('product_id', $resturantId)
                    ->whereNotNull('price'); // Only select values with prices
            }])
            ->get();

        $result = [];

        foreach ($optionsWithValues as $option) {
            $optionName = $option->option_name;

            // Initialize the valuesData array for the option if it doesn't exist
            if (!isset($result[$optionName])) {
                $result[$optionName] = [
                    'option' => $optionName,
                    'values' => [],
                    'addedValues' => [], // Initialize addedValues array
                ];
            }

            $valuesData = $result[$optionName]['values'];

            foreach ($option->values as $value) {
                // Check if the value has a related productOptionValue with a price
                if ($value->productOptionValues->isNotEmpty()) {
                    $valueName = $value->value_name;
                    $price = $value->productOptionValues->first()->price;

                    // Check if the value is already added for this option
                    if (!in_array($valueName, $result[$optionName]['addedValues'])) {
                        $valuesData[] = [
                            'name' => $valueName,
                            'price' => $price,
                        ];
                        $result[$optionName]['addedValues'][] = $valueName;
                    }
                }
            }

            // Update the values for the option
            $result[$optionName]['values'] = $valuesData;
        }

        // Convert the result array back to indexed array
        $finalResult = array_values($result);

        return response()->json(['images' => $imageUrls, 'result' => $finalResult]);
    }

    public function scanQRCode(Request $request, $tableNumber, $restaurantId)
    {
     
        $resturant = Resturant::where('id', $restaurantId)->first();
        Session::put('table_number', $tableNumber);

        // Redirect the user to the desired page
        return redirect()->route('resturant', [$resturant->resturant_name, $resturant->id]); // Replace 'desiredRoute' with your actual route
    }
}
