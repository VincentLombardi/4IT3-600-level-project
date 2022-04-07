<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;
use Carbon\Carbon;

class landingController extends Controller
{
    function thirtydaystotalusers() {

        $data['users'] = User::where('created_at', '>', now()->subDays(30)-> endOfDay())->count();

        $data['orders'] = Orders::where('created_at', '>', now()->subDays(30)-> endOfDay())->count();

        $data['inventory'] = Inventory::where('created_at', '>', now()->subDays(30)-> endOfDay())->count();

        return view('landing', ['data'=>$data]);
    }


}
