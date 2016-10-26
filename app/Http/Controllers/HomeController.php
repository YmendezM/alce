<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\MessageRequest;
use App\Http\Controllers\Controller;
use App\Rol;
use App\User;
use App\Messages;
use App\Message_Type;
use App\Visibility;
use Auth;
use App\Users_Rol;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $type = Message_Type::lists('typename', 'id');
        $rol = Rol::lists('rolname', 'id');
        $visi = Visibility::lists('visibilityname', 'id');
        $user = User::lists('name', 'id');
        $list_messages = Messages::all();

        $user_roles = Users_Rol::where('id_users', Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->get();

        foreach ($user_roles as $control) {
            $id_roles = array($control->id_rol);
        }

        if (empty($id_roles) == true) {
            return \View::make('home', compact('type', 'rol', 'visi', 'user', 'list_messages', 'flights'));
        } else {
            $flights = Messages::whereIn('id_rol', $id_roles)
                    ->orwhere('id_users', Auth::user()->id)
                    ->orWhere('id_visibility', '1')
                    ->orderBy('created_at', 'desc')
                    ->get();

            return \View::make('home', compact('type', 'rol', 'visi', 'user', 'list_messages', 'flights'));
        }
    }

    public function create(MessageRequest $request) {

        if ($request['visibilityname'] == '3') {
            $rolname = $request['rolname'];
        } else {
            $rolname = null;
        }

        Messages::create([
            'id_users' => Auth::user()->id,
            'id_tipo' => $request['typename'],
            'id_visibility' => $request['visibilityname'],
            'id_rol' => $rolname,
            'message' => $request['message'],
        ]);
        $type = Message_Type::lists('typename', 'id');
        $rol = Rol::lists('rolname', 'id');
        $visi = Visibility::lists('visibilityname', 'id');
        $user = User::lists('name', 'id');
        $list_messages = Messages::all();

        $user_roles = Users_Rol::where('id_users', Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->get();

        foreach ($user_roles as $control) {
            $id_roles = array($control->id_rol);
        }

        if (empty($id_roles) == true) {
            return \View::make('home', compact('type', 'rol', 'visi', 'user', 'list_messages', 'flights'));
        } else {
            $flights = Messages::whereIn('id_rol', $id_roles)
                    ->orwhere('id_users', Auth::user()->id)
                    ->orWhere('id_visibility', '1')
                    ->orderBy('created_at', 'desc')
                    ->get();

            return \View::make('home', compact('type', 'rol', 'visi', 'user', 'list_messages', 'flights'));
        }
    }

    public function countMessages() {

        $user_roles = Users_Rol::where('id_users', Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->get();

        foreach ($user_roles as $control) {
            $id_roles = array($control->id_rol);
        }

        $countMessages = Messages::whereIn('id_rol', $id_roles)
                        ->orwhere('id_users', Auth::user()->id)
                        ->orWhere('id_visibility', '1')
                        ->orderBy('created_at', 'desc')
                        ->get()->count();

        return Response(array(
            'count_messages' => $countMessages,
            'code' => 1
        ));
    }

}
