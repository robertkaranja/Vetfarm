<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Notification;
use App\User;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    

    public function them() 
    {

        $users = User::all();

        return view('users.index')->with('users', $users);
    }
     */

    public function index()
    {
        //
        $notifications = Notification::where('approve', '1')->paginate(3);
        return view('notification')->with('notifications', $notifications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function manage(Notification $notification){
        $notifications = Notification::all();
        return view('dash')->with('notifications', $notifications);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $notification = Notification::create([
            
            
            'description'=> $request->input('description'),
            'user_id'=> Auth::user()->id,
            'username'=> Auth::user()->name,
        ]);
            return back();
    }

     public function approval(Request $request, Notification $notification)

    {
        //

        $notification = Notification::find($request->notificationId);
        $approveVal = $request->approve;

        if ($approveVal == 'on') {
                
                $approveVal=1;
            } 
            else
            {
                $approveVal=0;
            }  

            $notification->approve=$approveVal;
            $notification->save();

            return back();
            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
        $findnotification = Notification::find($notification->id);
        If($findnotification->delete()){
            //redirect
            return back()
            ->with('success', 'notification removed successfully');
        }
        
        return back()->withInput()->with('error', 'user was not removed');
    }
    
}
