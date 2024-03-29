<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Mail\UserApproved;
use Illuminate\Support\Facades\Mail;


class ApproveController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:super-admin']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $users = User::where('approved', 0)->get();

        return view('dashboard.pending_users', compact('users', 'users'));
    }

    public function approve(User $user)
    {
        Mail::to($user['email'])
            ->send(new UserApproved($user['email'], $user['name'], route('login')));
        $user->approveUser();
        return redirect('/user/pending')->with([ 
            'message' => 'Approved successfully.', 
            'alert-type' => 'success'
        ]);
    }

    public function revoke(User $user)
    {
        // Mail::to($user['email'])
        //     ->send(new UserApproved($user['email'], $user['name'], route('login')));
        $user->revokeUser();
        return redirect('/user/approved')->with([ 
            'message' => 'Revoked access successfully.', 
            'alert-type' => 'success'
        ]);
    }


    public function approved(User $user)
    {
        $users = User::where('approved', 1)->doesntHave('roles')->get();
        return view('dashboard.approved_users', compact('users', 'users'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
