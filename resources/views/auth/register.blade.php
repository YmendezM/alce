@extends('layouts.master-login')
@section('content')
            <div class="container">
                {!! Form::open(['route' => 'auth/register', 'class' => 'form-login']) !!}

                <h2 class="form-login-heading">Registration</h2>
                <div class="login-wrap">
                    {!! Form::input('text', 'name', '', ['class'=> 'form-control', 'placeholder' => 'Name']) !!}
                    <br>
                    {!! Form::email('email', '', ['class'=> 'form-control', 'placeholder' => 'Email']) !!}
                    <br>
                    {!! Form::password('password', ['class'=> 'form-control', 'placeholder' => 'Password']) !!}
                    <br>
                    {!! Form::password('password_confirmation', ['class'=> 'form-control', 'placeholder' => 'Password Confirmation']) !!}
                    <label class="checkbox">
                        <span class="pull-right">
                           <!-- <a data-toggle="modal" href="#"> Forgot Password?</a>-->
                        </span>
                    </label>
                    {!! Form::submit(trans('form.login.submit'),['class' => 'fa fa-lock', 'class' => 'btn btn-theme btn-block']) !!}

                    {!! Form::close() !!}
                   <!-- <div class="login-social-link centered">
                        <p>or you can sign in via your social network</p>
                        <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                        <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                    </div> -->
                   <br>
                     <div class="registration">
                        Don't have an account yet?<br/>
                       <a href="{{route('auth/login')}}">{{ trans('nav.login') }}</a>
                    </div>
                </div>
            </div>
@endsection  

