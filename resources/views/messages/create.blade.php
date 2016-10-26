@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="dropdown">  
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ trans('form.message.title') }}            
                        </button> 
                    </div>
                </div>             
                <div class="panel-body">   
                    <div class="dropdown">
                        {!! Form::open(['route' => 'messages/create', 'method'=>'POST', 'class' => 'form']) !!}
                        <div class="col-xs-4">
                            {!! Form::select('typename', $type, '', ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-xs-4">
                            {!! Form::select('visibilityname', $visi, '', ['class' => 'form-control', 'onchange' => 'funcion(this, this.form)']) !!}       
                        </div>
                        <div class="col-xs-4">
                            {!! Form::select('rolname', $rol, '', ['class' => 'form-control', 'disabled' => 'disabled']) !!}       
                        </div>              
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('form.description.title') }} </label>
                        <textarea name="messagename" id="description" rows="10" class="form-control"></textarea>  
     
                    </div>    
                    <div>
                        {!! Form::submit(trans('form.rol.submit'),['class' => 'btn btn-theme']) !!}
                    </div>               
                </div> 
                {!! Form::close() !!}
            </div>
        </div>
        

    </div>
</div> 
@endsection   
