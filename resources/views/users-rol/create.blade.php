@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ trans('form.users-rol.title') }}            
                        </button>   
                    </div>

                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'users-rol/create', 'method'=>'POST', 'class' => 'form']) !!}
                    <div class="form-group">
                        <label>{{ trans('form.label.users-rolcreate') }}</label>                   
                        <div class="dropdown"> 
                            {!! Form::select ('name', $user, '', ['class' => 'form-control']) !!}
                            <br>
                            {!! Form::select('rol', $rol, '', ['class' => 'form-control']) !!} 
                            </select>                        
                        </div>   
                    </div>
                    <div>
                        {!! Form::submit(trans('form.rol.submit'),['class' => 'btn btn-theme']) !!}
                    </div>
                    {!! Form::close() !!}
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection