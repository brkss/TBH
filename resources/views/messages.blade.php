@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            
            
            <div class="panel panel-default">
                
                    
                    <div class="panel-body">
                            
                            <div class="info">
                        
                                <span class="h3 col-md-12 col-sm-12 col-xs-12 text-center"><strong>{{Auth::user()->name}} </strong><a href="/profilesitting"><i class="fas fa-cog"></i></a></span>
                                <span class="h5 col-md-12 col-sm-12 col-xs-12 text-center"><strong><a href="/user/{{Auth::user()->username}}">sarahah.com/user/{{Auth::user()->username}}</a></strong></span>
                            
                            </div>
                        
                    </div>
            </div>
        

            <div class="panel panel-default">
                
                <div class="panel-body">
                        <h3 class="text-center" ><b>Messages  </b><i class="fas fa-comments"></i></h3>
                        


                                <!-- div Recieved Messages -->
                        <div class="tab-content">
                            
                            <div id="home" class="tab-pane fade in active">
                                
                            
                              <h3><b>Recieved</b> <span class="badge ">{{$num}}</span></h3>
                                    <!-- Messages -->
                                    @foreach($messages as $message)
                                <div class="panel panel-default">
                                        <a href="/delete/msg/{{$message->id}}" onclick="return confirm('Are you sure you want to delete this item?');" type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true" style="padding:7px;">&times;</span>
                                        </a>
                                        

                                        <div class="panel-body" style="word-break: break-all;">
                                            <strong>{{$message->messages}}</stong></br>
{{$message->id}}
                                        </div>
                                        
                                    
                                        <a href="#" type="button" class="close" aria-label="Close">
                                                <a aria-hidden="true" data-like="{{ $message->like}}" data-msgid="{{ $message->id}}" style="margin: 0 7px 7px;" class="btn btn-info btn-xs {{ $message->like == 1 ? 'like' : 'unlike' }} likebtn" ><i class="fas fa-heart"></i></a>
                                        </a>
                                    
                               
                                </div>
                                    @endforeach
                           
                           
                           </div>
                        
                

                        
                        
                
                
               
                        
                    </div>
            
            </div>

        
        </div>
    </div>
</div>

<script>
        
        
    
        
        $(document).ready(function (){
            $('.likebtn').on('click' ,function(){
                
                var url = ' {{ route("like") }} ' ;
                var token = ' {{ Session::token() }} ' ;
                var like_s = $(this).attr('data-like');
                var message_id = $(this).attr('data-msgid') ;

                 
                    $.ajax({
                        
                        type : 'POST',
                        url : url,
                        data : {like_s: like_s,message_id: message_id,_token: token},
                                success: function(data){
                                   if(data.is_like ==1){
                                    $('*[data-msgid="'+ message_id +'"]').removeClass('unlike').addClass('like') 
                                   }
                                   if(data.is_like == 0 ){
                                    $('*[data-msgid="'+ message_id +'"]').removeClass('like').addClass('unlike') 
                                   }
                                }
                    })

            });
        });

        
</script>
@endsection
