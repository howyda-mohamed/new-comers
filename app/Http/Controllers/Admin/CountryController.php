<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Exception;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries=Country::select()->paginate(PAGINATION_COUNT);
        return view('admin.countries.index',compact('countries'));
    }
    public function create()
    {
        return view('admin.countries.create');
    }
    public function store(CountryRequest $request)
    {
        try{
            $countries=Country::create($request->except(['_token']));
            if($countries)
            {
                return redirect()->route('admin.Countries')->with(['status'=>'Data Inserted Sucessfully']);
            }
            else
            {
                return redirect()->route('admin.Countries')->with(['error'=>'Please Try Again']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.Countries')->with(['error'=>'something went wrong']);
        }
    }
    public function destroy($id)
    {
        try{
            $countries=Country::find($id);
            if(!$countries)
            {
                return redirect()->route('admin.Countries')->with(['error'=>'Please Try Again']);
            }
            else
            {
               $countries->delete();
               return redirect()->route('admin.Countries')->with(['status'=>'Data Deleted Sucessfully']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.Countries')->with(['error'=>'something went wrong']);
        }
    }
}
