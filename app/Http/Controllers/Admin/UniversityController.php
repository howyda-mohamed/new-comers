<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UniversityRequest;
use App\Models\University;
use Exception;
use Illuminate\Http\Request;


class UniversityController extends Controller
{
    public function index()
    {
        $universities=University::select()->paginate(PAGINATION_COUNT);
        return view('admin.university.index',compact('universities'));
    }
    public function create()
    {
        return view('admin.university.create');
    }
    public function store(UniversityRequest $request)
    {
        try{
            $universities=University::create($request->except(['_token']));
            if($universities)
            {
                return redirect()->route('admin.universities')->with(['status'=>'Data Inserted Sucessfully']);
            }
            else
            {
                return redirect()->route('admin.universities')->with(['error'=>'Please Try Again']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.universities')->with(['error'=>'something went wrong']);
        }
    }
    public function destroy($id)
    {
        try{
            $universities=University::find($id);
            if(!$universities)
            {
                return redirect()->route('admin.universities')->with(['error'=>'Please Try Again']);
            }
            else
            {
               $universities->delete();
               return redirect()->route('admin.universities')->with(['status'=>'Data Deleted Sucessfully']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.universities')->with(['error'=>'something went wrong']);
        }
    }

}
