<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\MessageTypeRequest;
use App\Http\Controllers\Controller;
use App\Message_Type;
use Illuminate\Http\Response;

class Message_TypeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $list_type = Message_Type::all();
        return \View::make('message-type/create', compact('list_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MessageTypeRequest $request) {
        Message_Type::create([
            'typename' => $request['typename'],
        ]);
        $list_type = Message_Type::all();
        
        //return view('message-type/create', ['list_type' => $list_type]);
        
        return \View::make('message-type/create', compact('list_type'));
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
    public function update(Request $request) {
        
        $id = $request['id'];
        $value = $request['value'];
        
        $category = Message_Type::find($id);

        $category->typename = $value;

        if(!$category->save()){
            return Response(array(
                    'response' => 'no update',
                    'code'   => -1
                ));
        }  else {
              return Response(array(
                    'response' => 'Successfull update',
                    'code'   => 1
                ));
              
        }
        
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
