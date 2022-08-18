<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacultyRequest;
use App\Models\Faculty;
use Exception;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties=Faculty::select()->paginate(PAGINATION_COUNT);
        return view('admin.faculty.index',compact('faculties'));
    }
    public function create()
    {
        return view('admin.faculty.create');
    }
    public function store(FacultyRequest $request)
    {
        try{
            $faculties=Faculty::create($request->except(['_token']));
            if($faculties)
            {
                return redirect()->route('admin.faculties')->with(['status'=>'Data Inserted Sucessfully']);
            }
            else
            {
                return redirect()->route('admin.faculties')->with(['error'=>'Please Try Again']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.faculties')->with(['error'=>'something went wrong']);
        }
    }
    public function destroy($id)
    {
        try{
            $faculties=Faculty::find($id);
            if(!$faculties)
            {
                return redirect()->route('admin.faculties')->with(['error'=>'Please Try Again']);
            }
            else
            {
               $faculties->delete();
               return redirect()->route('admin.faculties')->with(['status'=>'Data Deleted Sucessfully']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.faculties')->with(['error'=>'something went wrong']);
        }
    }
}
