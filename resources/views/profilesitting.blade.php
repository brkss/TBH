@extends('layouts.app')
@section('content')

        <div class="container">
        

            <div class="panel panel-default">
               <div class="panel-heading">Profile Sitting </div>
            <div class="panel-body">
                <form method="POST" action="/savesitting/{{Auth::user()->id}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Name :</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                                </div>
                            </div>


                            <br/>
                            <br/>



                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Email :</label>

                                <div class="col-md-6">
                                    <input id="password" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required>
                                </div>
                            </div>
                            
                            <br/>
                            <br/>
                               
                                <div class="col-md-12">
                                    <button class="btn btn-info send" >Save <i class="fas fa-save"></i> </button>
                                </div>
                
                    </div>
                </form>
            
            </div>

        
        </div>

@stop