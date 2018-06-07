<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Bucomp;
use App\Country;
use App\Company;
use App\Item;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{

     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function home_admin()
    {
        return view('app/home_admin');
    }
    public function barkod()
    {
        return view('app/barkode_jepang');
    }

    //view buyer
    public function buyer()
    {
        $buyers = Buyer ::all();
        $hak_akses = DB::table('buyers')->where('hak_akses', '1')->pluck('hak_akses');
        return view('app/buyer',['buyers' => $buyers]);
    }
    public function show($id)
    {
        $buyers = Buyer ::find($id);
        return view('app/buyer',['buyer' => $buyer]);
    }

    //view bucomp
    public function bucomp()
    {
        $bucomps = Bucomp ::all();
        return view('app/bucomp',['bucomps' => $bucomps]);
    }
    public function showBucomp($id)
    {
        return view('app.bucomp', ['bucomp' => Bucomp::findOrFail($id)]);
    }
    public function showBucompid($id)
    {
        $bucomps = Bucomp ::find($id);
        return view('app/bucomp',['bucomp' => $bucomp]);
    }

  
    //view country
    public function country()
    {
        $countries = Country ::all();
        return view('app/country',['countries' => $countries]);
    }
    public function showCountry($id)
    {
        $countries = Country ::find($id);
        return view('app/country',['country' => $country]);
    }


    //view company join menggunakan query builder
    public function company()
    {
        $companies = Company ::all();
        $companies = DB::table('companies')
        ->join('countries', 'countries.id', '=', 'companies.id_country')
        ->select('companies.*','companies.id', 'countries.country_name')
        ->get();
        return view('app.company',['companies' => $companies]);
        // return view('app/company',['companies' => $companies]);
    }
    public function showCompanyid($id)
    {
        $companies = Company ::find($id);
        return view('app/company',['company' => $company]);
    }

    //View Item
    public function item()
    {
        $items = Item ::all();
        return view('app/item',['items' => $items]);
    }
    public function showItem($id)
    {
        return view('app.item', ['item' => Item::findOrFail($id)]);
    }
    public function showItemid($id)
    {
        $items = Item ::find($id);
        return view('app/item',['item' => $item]);
    }

    //view Member
    public function member()
    {
        $buyers = DB::table('buyers')->where('hak_akses', '1')->get();
        $hak_akses = DB::table('buyers')->where('hak_akses', '1')->pluck('hak_akses');
        // $buyers = Buyer ::all();
        return view('app/member',['buyers' => $buyers]);
    }


    //crud buyer
    public function create_buyer()
    {
        return view('app/aksi/add_buyer');
    }
    public function store_buyer(Request $request)
    {
        $this->validate($request,[
            'id_buyer'      => 'required',
            'name_buyer'    => 'required',
            'images_buyer'  => 'mimes:jpeg,jpg,png',
            'hak_akses'     => 'required'
          
        ]);
            $filename = time(). '.png';
            $request->file('images_buyer')->storeAs('public/buyer',$filename);

        $buyer = new Buyer;
        $buyer->id_buyer        = $request->id_buyer;
        $buyer->name_buyer      = $request->name_buyer;
        $buyer->images_buyer    = $filename;
        $buyer->hak_akses       = $request->hak_akses;
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
        $buyer->id_buyer        = $request->id_buyer;
        $buyer->name_buyer      = $request->name_buyer;
        $buyer->images_buyer    = $filename;
        $buyer->hak_akses       = $request->hak_akses;
        $buyer->save();
        return redirect('/buyer');
    }
    public function destroy($id)
    {
        $buyer = Buyer::find($id);
        $buyer->delete();
        return redirect('/buyer');
    }


    //crud bucomp
    public function create_bucomp()
    { $buyers = Buyer::all();
        return view('app/aksi/add_bucomp',compact('buyers'));
    }
    public function store_bucomp(Request $request)
    {
        $this->validate($request,[
            'kode_bucomp'      => 'required',
            'bucomp_name'      => 'required',
            'city'             => 'required',
            'address'          => 'required',
            'buyers'         => 'required'
          
        ]);

        $bucomp = new Bucomp;
        $bucomp->kode_bucomp = $request->kode_bucomp;
        $bucomp->bucomp_name = $request->bucomp_name;
        $bucomp->city        = $request->city;
        $bucomp->address     = $request->address;
        $bucomp->buyer_id    = $request->buyers;
        $bucomp->save();

        return redirect('bucomp');
    }
    public function edit_bucomp($id)
    {
        $buyers = Buyer::all();
        $bucomp = Bucomp::find($id);
        return view('app/aksi/edit_bucomp', ['bucomp' =>$bucomp],compact('buyers'));
    }
    public function update_bucomp(Request $request, $id)
    {
        $bucomp = Bucomp::find($id);
        $bucomp->kode_bucomp = $request->kode_bucomp;
        $bucomp->bucomp_name = $request->bucomp_name;
        $bucomp->city        = $request->city;
        $bucomp->address     = $request->address;
        $bucomp->buyer_id    = $request->buyers;
        $bucomp->save();
        return redirect('/bucomp');
    }
    public function delete_bucomp($id)
    {
        $bucomp = Bucomp::find($id);
        $bucomp->delete();
        return redirect('/bucomp');
    }


    //crud country
    public function create_country()
    {
       return view('app/aksi/add_country');
    }
    public function store_country(Request $request)
    {
        $this->validate($request,[
            'kode_country'      => 'required',
            'country_name'      => 'required',
            'num_code'          => 'required',
            'alpha_code'        => 'required',
            'code_iso'          => 'required'
          
        ]);

        $country = new Country;
        $country->country_id   = $request->kode_country;
        $country->country_name = $request->country_name;
        $country->num_code     = $request->num_code;
        $country->alpha_code   = $request->alpha_code;
        $country->code_iso     = $request->code_iso;
        $country->save();

        return redirect('country');
    }
    public function edit_country($id)
    {
        $country = Country::find($id);
        return view('app/aksi/edit_country', ['country' =>$country]);
    }
    public function update_country(Request $request, $id)
    {
        $country = Country::find($id);
        $country->country_id   = $request->kode_country;
        $country->country_name = $request->country_name;
        $country->num_code     = $request->num_code;
        $country->alpha_code   = $request->alpha_code;
        $country->code_iso     = $request->code_iso;
        $country->save();
        return redirect('/country');
    }
    public function delete_country($id)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect('/country');
    }


    //crud company
    public function create_company()
    { $countries = Country::all();
        return view('app/aksi/add_company',compact('countries'));
    }
    public function store_company(Request $request)
    {
        $this->validate($request,[
            'kode_company'      => 'required',
            'company_name'      => 'required',
            'company_address'   => 'required',
            'company_city'      => 'required',
            'id_country'        => 'required'
          
        ]);

        $company = new Company;
        $company->company_id        = $request->kode_company;
        $company->company_name      = $request->company_name;
        $company->company_address   = $request->company_address;
        $company->company_city      = $request->company_city;
        $company->id_country        = $request->id_country;
        $company->save();

        return redirect('company');
    }
    public function edit_company($id)
    {
        $countries = Country::all();
        $company = Company::find($id);
        return view('app/aksi/edit_company',['company' =>$company],compact('countries'));
    }
    public function update_company(Request $request, $id)
    {
        $company = Company::find($id);
        $company->company_id        = $request->kode_kompany;
        $company->company_name      = $request->company_name;
        $company->company_address   = $request->company_address;
        $company->company_city      = $request->company_city;
        $company->id_country        = $request->id_country;
        $company->save();

        return redirect('company');
    }
    public function delete_company($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect('company');
    }


    //crud item
    public function create_item()
    {   $buyers = Buyer::all();
        return view('app/aksi/add_item',compact('buyers'));
    }
    public function store_item(Request $request)
    {
        $this->validate($request,[
            'item_id'          => 'required',
            'item_name'        => 'required',
            'buyers'            => 'required'
        ]);

        $item = new Item;
        $item->item_id     = $request->item_id;
        $item->item_name   = $request->item_name;
        $item->buyer_id    = $request->buyers;
        $item->save();
        return redirect('item');
    }
    public function edit_item($id)
    {
        $buyers = Buyer::all();
        $item = Item::find($id);
        return view('app/aksi/edit_item', ['item' =>$item],compact('buyers'));
    }
    public function update_item(Request $request, $id)
    {
        $item = Item::find($id);
        $item->item_id     = $request->item_id;
        $item->item_name   = $request->item_name;
        $item->buyer_id    = $request->buyers;
        $item->save();
        return redirect('/item');
    }
    public function delete_item($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/item');
    }

    //crud member
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
