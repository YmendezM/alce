@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                           {{ trans('form.rol.title') }}            
                        </button>   
                    </div>

                </div>
                <div class="panel-body">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                             {{$error}}
                        @endforeach
                    </div>
                    @endif
                    {!! Form::open(['route' => 'rol/create', 'method'=>'POST', 'class' => 'form']) !!}

                    <div class="form-group">
                        <label>{{ trans('form.label.rolcreate') }}</label>
                        {!! Form::input('text', 'rolname', '', ['class'=> 'form-control']) !!}
                        {!! Form::input('hidden', 'id_visibility', '3', ['class'=> 'form-control']) !!}
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