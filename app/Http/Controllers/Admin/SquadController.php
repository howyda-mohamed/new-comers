<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SquadRequest;
use App\Models\Squad;
use Exception;
use Illuminate\Http\Request;

class SquadController extends Controller
{
    public function index()
    {
        $squads=Squad::select()->paginate(PAGINATION_COUNT);
        return view('admin.squad.index',compact('squads'));
    }
    public function create()
    {
        return view('admin.squad.create');
    }
    public function store(SquadRequest $request)
    {
        try{
            $squads=Squad::create($request->except(['_token']));
            if($squads)
            {
                return redirect()->route('admin.squads')->with(['status'=>'Data Inserted Sucessfully']);
            }
            else
            {
                return redirect()->route('admin.squads')->with(['error'=>'Please Try Again']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.squads')->with(['error'=>'something went wrong']);
        }
    }
    public function destroy($id)
    {
        try{
            $squads=Squad::find($id);
            if(!$squads)
            {
                return redirect()->route('admin.squads')->with(['error'=>'Please Try Again']);
            }
            else
            {
               $squads->delete();
               return redirect()->route('admin.squads')->with(['status'=>'Data Deleted Sucessfully']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.squads')->with(['error'=>'something went wrong']);
        }
    }

}
