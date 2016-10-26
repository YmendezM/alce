@extends('layouts.master')
@section('content')
<script>
function sendAjax(id_category){

    var myPath = '{{ route("message-type/update") }}';
    
    var value = $("[name='myCheck["+id_category+"]']").val();
    
    $.ajax({
        
    // En data puedes utilizar un objeto JSON, un array o un query string
    data: {"id" : id_category, "value" : value},
    //Cambiar a type: POST si necesario
    type: "GET",
    // Formato de datos que se espera en la respuesta
    dataType: "json",
    // URL a la que se enviará la solicitud Ajax
    url: myPath ,
    })
     .done(function( data, textStatus, jqXHR ) {
         if ( console && console.log ) {
             //console.log( "La solicitud se ha completado correctamente." );
         }
     })
     .fail(function( jqXHR, textStatus, errorThrown ) {
         if ( console && console.log ) {
             //console.log( "La solicitud a fallado: " +  textStatus);
         }
    });
    
    $("[name='myCheck["+id_category+"]']").prop('disabled', true);
}
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ trans('form.message-type.title') }}            
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
                    {!! Form::open(['route' => 'message-type/create', 'method'=>'POST', 'class' => 'form']) !!}

                    <div class="form-group">
                        <label>{{ trans('form.label.message-type') }}</label>
                        {!! Form::input('text', 'typename', '', ['class'=> 'form-control']) !!}
                    </div>
                    <div>
                        {!! Form::submit(trans('form.rol.submit'),['class' => 'btn btn-theme']) !!}
                    </div>
                    {!! Form::close() !!}
                </div> 
            </div>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> {{ trans('form.list-message-type.title') }} </h4>
                            <hr>
                            <thead>
                                <tr>
                                    <th><i class="fa fa-bullhorn"></i> {{ trans('nav.category') }}</th>
                                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> {{ trans('nav.description') }}</th>
                                    <th></th>
                                    <th><i class=" fa fa-edit"></i> {{ trans('nav.status') }}</th>
                                    <th><i class="fa fa-bookmark"></i> {{ trans('nav.new') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list_type as $list_category)   
                                <tr>
                                    <td>{{$list_category->id}}</td>
                                    <td>{!! Form::text("myCheck[$list_category->id]", $list_category->typename, ['class'=> 'form-control', 'disabled' => 'disabled']) !!}</td>
                                    <td></td>
                                    <td><span class="label label-warning label-mini">{{ trans('nav.activo') }}</span></td>
                                    <td>
                                        <button class="btn btn-success btn-xs" onclick="sendAjax({{$list_category->id}})"><i class="fa fa-check"></i></button>
                                        
                                        <button class="btn btn-primary btn-xs" onclick="undisable({{$list_category->id}})"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs" onclick="disable({{$list_category->id}})" ><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>  
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div>
        </div>
    </div>
</div>
@endsection