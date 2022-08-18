<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationRequest;
use App\Models\Notification;
use Exception;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications=Notification::select()->paginate(PAGINATION_COUNT);
        return view('admin.notification.index',compact('notifications'));
    }
    public function create()
    {
        return view('admin.notification.create');
    }
    public function store(NotificationRequest $request)
    {
        try{
            $notifications=Notification::create($request->except(['_token']));
            if($notifications)
            {
                return redirect()->route('admin.notifications')->with(['status'=>'Data Inserted Sucessfully']);
            }
            else
            {
                return redirect()->route('admin.notifications')->with(['error'=>'Please Try Again']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.notifications')->with(['error'=>'something went wrong']);
        }
    }
    public function destroy($id)
    {
        try{
            $notifications=Notification::find($id);
            if(!$notifications)
            {
                return redirect()->route('admin.notifications')->with(['error'=>'Please Try Again']);
            }
            else
            {
               $notifications->delete();
               return redirect()->route('admin.notifications')->with(['status'=>'Data Deleted Sucessfully']);
            }
        }catch(Exception $ex)
        {
            return redirect()->route('admin.notifications')->with(['error'=>'something went wrong']);
        }
    }
}
