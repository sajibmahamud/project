@extends('main')

@section('title', '| Homepage')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                   <h2> Help Us !</h2>  
                    <h3>Send Donation with </h3>
                </div>
            </div>
            <div class="col-md-3">
                <h2 class="text-center"><a href="#"> PayPal</a></h2>
            </div>
            <div class="col-md-3">
                <h2 class="text-center"><a href="#"> Master Card</a></h2>
            </div>
            <div class="col-md-3">
                <h2 class="text-center"><a href="#"> Visa</a></h2>
            </div>
            <div class="col-md-3">
                <h2 class="text-center"><a href="#">JCB</a></h2>
            </div>
        </div>
    </div>
</section>
@stop