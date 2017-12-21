@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 >Welcome @if(Auth::check()) <label style="text-transform: uppercase">{{Auth::user()->name}}</label> @endif</h1>
                </div>
            </div>
        </div> <!-- end of header .row -->

        <div class="row">
            <div class="col-md-8">
                
               

            </div>

        </div>
@stop