<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Point;
use DB;

class MapController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('logout');
        $this->middleware('Admin');
    }
    public function index(Point $point)
    {
        $point = Point::get()->all();
        return view('admin.maps.index', ['point' => $point]);
    }

    public function show()
    {
        //
    }

}
