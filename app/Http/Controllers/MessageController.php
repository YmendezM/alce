<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rol;
use App\Message_Type;
use App\Visibility;
use App\User;
use App\Messages;
use Auth;

class MessageController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $type = Message_Type::lists('typename', 'id');
        $rol = Rol::lists('rolname', 'id');
        $visi = Visibility::lists('visibilityname', 'id');
        $user = User::lists('name', 'id');
        return \View::make('messages/create', compact('type', 'rol', 'visi', 'user'));
    }

    public function getrol(Request $request, $id) {
        if ($request->ajax()) {
            $get_rol = Rol::select_rol($id);
            return response()->json($get_rol);
        }
    }

    public function gallery() {
        return \View::make('messages/gallery');
    }

    public function calendar() {
        return \View::make('messages/calendar');
    }

    public function create(Request $request) {

        if ($request['visibilityname'] == 'Group') {
            $rolname = $request['rolname'];
        } else {
            $rolname = null;
        }

        Messages::create([
            'id_users' => Auth::user()->id,
            'id_tipo' => $request['typename'],
            'id_visibility' => $request['visibilityname'],
            'id_rol' => $rolname,
            'message' => $request['messagename'],
        ]);
        $type = Message_Type::lists('typename', 'id');
        $rol = Rol::lists('rolname', 'id');
        $visi = Visibility::lists('visibilityname', 'id');
        $user = User::lists('name', 'id');
        return \View::make('messages/create', compact('type', 'rol', 'visi', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
