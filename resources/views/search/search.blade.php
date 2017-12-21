@extends('main')

@section('title', '| Search User')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8 text-center">
            <div class="form-group">
               
            </div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>                        
                        <th>Email ID</th>
                        <th>Phone Number</th>
                        <th>Country</th>
                        <th>State</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name }}</td>                        
                            <td>{{$user->email}}</td>                        
                            <td>{{$user->number}}</td> 
                            <td>{{$user->country}}</td> 
                            <td>{{$user->state }}</td>                         
                        </tr>
                    @endforeach
                
                

                </tbody>
            </table>
        </div>
    </div>
</div>
<!--
<script type="text/javascript">
    $('#search').keyup(function(){
         $value = $(this).val();
         
         $.ajax({
            type : 'get',
            url  : '{{URL::to('search')}}',
            data :{'search':$value},
            success:function(data){
               console.log(data);
            }
            
        });
    })
 

</script>
-->

@stop