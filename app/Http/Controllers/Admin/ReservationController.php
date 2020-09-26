<?php

namespace App\Http\Controllers\Admin;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reserve;
class ReservationController extends Controller
{
    public function index ()
    {
        $reserves = Reserve:: All();
        return view ('admin.reserve.index', compact('reserves'));
    }
    public function status($id){
        $reservation = Reserve::find($id);
        $reservation->status = true;
        $reservation->save();

        Toastr::success('Reservation successfully confirmed.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function destory($id){
        reserve::find($id)->delete();
        Toastr::success('Reservation successfully deleted.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
