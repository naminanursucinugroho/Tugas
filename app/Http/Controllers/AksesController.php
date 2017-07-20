<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Facades\Datatables;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Support\Facades\Session;

class AksesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = User::all();
        return view('indonesia.backend.akses.index')->with(compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indonesia.backend.akses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberRequest $request)
    {
        $password = str_random(6);
        $data = $request->all();
        $data['password']=bcrypt($password);
        $data['is_verified']=1;
        $member = User::create($data);

        $memberRole = Role::where('name',$data['role'])->first();
        $member->attachRole($memberRole);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Member Dengan Email "."<strong>".$data['email']."</strong>".
            " Dan Password <strong>".$password."</strong>"
        ]);
        return redirect()->route('hak-akses.index');
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
        $member=User::find($id);
        return view('indonesia.backend.akses.edit')->with(compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberRequest $request, $id)
    {
        $member=User::find($id);
        $member->update($request->only('name','email'));
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $member->name"
        ]);
        return redirect()->route('hak-akses.index');
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
