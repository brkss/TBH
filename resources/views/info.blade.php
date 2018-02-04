@extends('layouts.app')
@section('content')


        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Infos</b></div>
                
                <div class="panel-body">
                        &bull; This application web is a open source project Devloped by <span style="font-weight:bold;" class="text-info">Brahim Bekasse</span>
                         , The main idea belong to <a href="sarahah.com">Sarahah</a> I don't take any responsibility for any Copyright infringement you will do ,
                         <BR/>
                         <BR/>
                         
                         &bull; This is just application to understand how <a href="sarahah.com">Sarahah</a> or any application like that work

                         @guest
                          
                        <h2 class="text-center">Let's Start</h2>
                            <div class="col-md-12">
                                <a href="/login" class="btn btn-info send">Login</a> |
                                <a href="/register" class="btn btn-info send">Register</a>
                            </div>
                        @endguest
                
                </div>
            </div>
        </div>



@stop