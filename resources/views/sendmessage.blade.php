@extends('layouts.app')
@section('content')


    <div class="container">
        
        <div class="panel panel-default">

           @foreach($user as $users) 
            <div class="panel-body">
                    <h4 class=" text-center"><b>{{$users->name}}</b></h4>
                        <form method="POST" action="/messagesend/{{$users->id}}">
                        {{ csrf_field() }}
                            <div class="col-md-12">
                                <textarea  rows="5" name="text" maxlength="700" class="form-control remove-border"></textarea>
                            </div>
            @endforeach
                </br>

                            <div class="col-md-12">
                                <div class="sendiv">
                                    <button type="submit" class="btn btn-info send" ><i class="fas fa-pencil-alt"></i> Send </button>
                                </div>
                            </div>                        
                        </form>
            
            
            </div>

        
        </div>
    
    </div>



@stop