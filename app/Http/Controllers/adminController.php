<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Buyer;
class adminController extends Controller
{
    public function home_admin()
    {
        return view('app/home_admin');
    }
    public function barkod()
    {
        return view('app/barkode_jepang');
    }
    public function buyer()
    {
        $buyers = Buyer ::all();
        return view('app/buyer',['buyers' => $buyers]);
    }
    public function show($id)
    {
        $buyers = Buyer ::find($id);
        return view('app/buyer',['buyer' => $buyer]);
    }
    public function bucomp()
    {
        return view('app/bucomp');
    }
    public function company()
    {
        return view('app/company');
    }
    public function country()
    {
        return view('app/country');
    }
    public function item()
    {
        return view('app/item');
    }
    public function member()
    {
        return view('app/member');
    }
    public function create_buyer()
    {
        return view('app/aksi/add_buyer');
    }
    public function store_buyer(Request $request)
    {
        $this->validate($request,[
            'id_buyer'      => 'required',
            'name_buyer'    => 'required',
            'images_buyer'  => 'mimes:jpeg,jpg,png'
          
        ]);
            $filename = time(). '.png';
            $request->file('images_buyer')->storeAs('public/buyer',$filename);

        $buyer = new Buyer;
        $buyer->id_buyer = $request->id_buyer;
        $buyer->name_buyer = $request->name_buyer;
        $buyer->images_buyer = $filename;
        $buyer->save();

        return redirect('buyer');
    }

    public function edit_buyer($id)
    {
        $buyer = Buyer::find($id);
        return view('app/aksi/edit_buyer', ['buyer' =>$buyer]);
    }
    public function update_buyer(Request $request, $id)
    {
        $filename = time(). '.png';
        $request->file('images_buyer')->storeAs('public/buyer',$filename);

        $buyer = Buyer::find($id);
        $buyer->id_buyer = $request->id_buyer;
        $buyer->name_buyer = $request->name_buyer;
        $buyer->images_buyer = $filename;
        $buyer->save();
        return redirect('/buyer');
    }
    public function destroy($id)
    {
        $buyer = Buyer::find($id);
        $buyer->delete();
        return redirect('/buyer');
    }

    public function add_bucomp()
    {
        return view('app/aksi/add_bucomp');
    }
    public function edit_bucomp()
    {
       return view('app/aksi/edit_bucomp');
    }
    public function add_company()
    {
       return view('app/aksi/add_company');
    }
    public function edit_company()
    {
       return view('app/aksi/edit_company');
    }
    public function add_country()
    {
       return view('app/aksi/add_country');
    }
    public function edit_country()
    {
       return view('app/aksi/edit_country');
    }
    public function add_item()
    {
       return view('app/aksi/add_item');
    }
    public function edit_item()
    {
       return view('app/aksi/edit_item');
    }
    public function add_member()
    {
       return view('app/aksi/add_member');
    }
    public function edit_member()
    {
       return view('app/aksi/edit_member');
    }
    public function report()
    {
       return view('app/report');
    }
    // //user
    // public function home_user()
    // {
    //    return view('app/user/home_user');
    // }
    // public function report_user()
    // {
    //    return view('app/user/report_user');
    // }
    // public function reprint_barcode_jepang()
    // {
    //    return view('app/user/reprint_barcode_jepang');
    // }
    // public function trans_barcode_jepang()
    // {
    //    return view('app/user/trans_barcode_jepang');
    // }
}
