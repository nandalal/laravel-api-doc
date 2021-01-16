<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Order;
use App\Models\State;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Responses\SuccessResponse;
use App\Http\Responses\SuccessWithData;
use Illuminate\Support\Facades\Validator;

class OrderDetailsController extends Controller
{
    
    /**
     * getState
     *
     * @return void
     */
    public function getState()
    {
        $states = State::all();
        $data = $states->toArray();
        return new SuccessWithData($data);
    }    
    /**
     * getDistrict
     *
     * @param  mixed $state_id
     * @return void
     */
    public function getDistrict($state_id)
    {
        $districts = DB::table('district')->where('state_id', $state_id)->get();
        return new SuccessWithData($districts);
    }    
    /**
     * getProduct
     *
     * @return void
     */
    public function getProduct()
    {
        $products = Product::all();
        $data = $products->toArray();
        return new SuccessWithData($data);
    }
    
    
    /**
     * addOrder
     *
     * @param  mixed $request
     * @return void
     */
    public function addOrder(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required|string|max:60',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email|unique:users',
            'state' => 'required',
            'district' => 'required',
            'place' => 'required|regex:/^[\pL\s\-]+$/u',
            'product' => 'required|array|max:60',
            'quantity' => 'required|array',
            'rate' => 'required|array|between:0,1000.99',
            'total_rate' => 'required|array|between:0,1000.99'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 422);
        }

        $user = new User;
        $user->name = $request->input('name');
        $user->phone = $request->input('name');
        $user->email = $request->input('email');
        $user->state_id = $request->input('state');
        $user->district_id = $request->input('district');
        $user->place = $request->input('place');
        $user->password = Hash::make($request->input('password', 'secret'));

        $order = new Order;
        $order->product_id = $request->input('product') ?? [];
        $order->quantity = $request->input('quantity') ?? [];
        $order->rate = $request->input('rate') ?? [];
        $order->total_rate = $request->input('total_rate') ?? [];

        DB::transaction(function () use ($user, $order) {
            $user->save();

            $count = count($order->product_id);
            $i = 0;
            for ($i = 0; $i < $count; $i++) {
                if (
                    !empty($order->product_id[$i]) &&
                    !empty($order->quantity[$i]) &&
                    !empty($order->rate[$i]) &&
                    !empty($order->total_rate[$i])
                ) {
                    $inputOdata = array(
                        'customer_id' => $user->id,
                        'product_id' => $order->product_id[$i],
                        'quantity' => $order->quantity[$i],
                        'rate' => $order->rate[$i],
                        'total_rate' => $order->total_rate[$i]
                    );
                    DB::table('order')->insert($inputOdata);
                }
            }
        });

        $response = [
            'success' => true,
            'data' => $user,
            'message' => 'Order stored successfully.'
        ];

        return response()->json($response, 200);
    }

    
    /**
     * orderListing
     *
     * @param  mixed $request
     * @return void
     */
    public function orderListing(Request $request)
    {
        $search_term = $request->input('search_term');
        if ($search_term === null) {
            $orders = User::with('state', 'district')->orderBy('users.created_at', 'DESC')->get();
            return new SuccessWithData($orders);
        } else {
            $orders = User::with('state', 'district')->where('users.name', $search_term)->orderBy('users.created_at', 'DESC')->get();
            return new SuccessWithData($orders);
        }
    }
    
    /**
     * orderDetails
     *
     * @param  mixed $customer_id
     * @return void
     */
    public function orderDetails($customer_id)
    {
        if ($customer_id === '') {
            $ordersdetails = Order::with('productList')->where('order.customer_id', $customer_id)->orderBy('order.created_at', 'DESC')->get();
            return new SuccessWithData($ordersdetails);
        } else {
            return new SuccessResponse('No Order details for that customer.');
        }
    }
}
