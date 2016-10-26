@extends('layouts.master')
@section('content')
</script>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="dropdown">  
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ trans('form.message.title') }}            
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
                    <div class="dropdown">
                        {!! Form::open(['route' => '/', 'method'=>'POST', 'class' => 'form']) !!}
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
                        <textarea name="message" id="description" rows="10" class="form-control"></textarea>  
                    </div>    
                    <div>

                        {!! Form::submit(trans('form.rol.submit'),['class' => 'btn btn-theme']) !!}
                    </div>               
                </div> 
                {!! Form::close() !!}
            </div>
            @if(empty($flights)== true)
             <div id="dialogo">
               <div class="alert alert-warning" role="alert">{{ trans('form.alert.title') }}</div>
            </div>    
            @else
            @foreach($flights as $message)          
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="desc">
                            <div class="col-xs-4">
                                <img class="img-circle" src="{{ asset('assets/img/ui-divya.jpg') }}" width="35px" height="35px" align="">    
                            </div>
                            <div class="col-xs-4" style="Position:Absolute; left:10%">
                                <p><a href="#">{{$message->user->name}}</a><br/>
                                <muted>{{$message->created_at}}</muted>                          
                            </div>
                            <div class="col-xs-4" style="Position:Absolute; left:85%">
                                @if ($message->visibility->visibilityname == 'Group')
                                <span class="label label-success">{{$message->rol->rolname}}</span>  
                                @else
                                <span class="label label-success">{{$message->visibility->visibilityname}}</span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="dropdown">  
                                <address>                  
                                    {!! Html_entity_decode($message->message) !!}
                                </address>
                            </div>   
                        </div>    
                    </div> 
                </div>  
            </div>
            @endforeach
            @endif
        </div>

<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Trigger Modal in iFrame</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
          <iframe src="/" width="100%" height="100%" frameborder="0" allowtransparency="true"></iframe>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection