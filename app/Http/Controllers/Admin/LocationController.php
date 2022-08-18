<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LocationRequest;
use App\Models\Location;
use Exception;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
       $locations=Location::selection()->paginate(PAGINATION_COUNT);
       return view('admin.location.index',compact('locations'));
    }
    public function create()
    {
        return view('admin.location.create');
    }
    public function store(LocationRequest $request)
    {
        try{
            if ($request->has('image'))
            {
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $file_name=time().'.'.$ext;
                $path="assets/images/locations/".$file_name;
                $file->move('assets/images/locations',$file_name);
            }
            $locations=Location::create([
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'location'=>$request->location,
                'image'=>$path
            ]);
            if($locations)
            {
                return redirect()->route('admin.locations')->with(['status'=>'Data Inserted Sucessfully']);
            }
            else
            {
                return redirect()->route('admin.locations')->with(['error'=>'Please Try Again']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.locations')->with(['error'=>'something went wrong']);
        }

    }
    public function destroy($id)
    {
        try{
            $locations=Location::find($id);
            if(!$locations)
            {
                return redirect()->route('admin.locations')->with(['error'=>'Please Try Again']);
            }
            else
            {
               $locations->delete();
               return redirect()->route('admin.locations')->with(['status'=>'Data Deleted Sucessfully']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.locations')->with(['error'=>'something went wrong']);
        }
    }
}
