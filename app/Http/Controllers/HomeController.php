<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\CustomersOrder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard() {
        $title = "Dashboard";
        $total_customer = Customer::all()->count();
        $total_order = CustomersOrder::all()->count();
        $recent_orders = CustomersOrder::limit(5)->orderBy('createdAt', 'DESC')->get();
        // $recent_orders = CustomersOrder::find('654cbb45fe88eb8b650af1e0');
        // dd($recent_orders->items_list);

        $compact = compact('title', 'total_customer', 'total_order', 'recent_orders');
        return view('admin.dashboard', $compact);
    }
}
