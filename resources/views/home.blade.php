@extends('layouts.app')

@section('content')
<section class="cover height-100 cover-blocks bg--dark">
   
    <div class="container pos-vertical-center">
        <div class="row">
            <div class="col-md-6">
                <p class="h2">
                    Welcome to the backdoor of Engifest.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <h1>3 Registered</h1>
                <p><a href="{{ route('contacts.index') }}">view all</a></p>
                
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection
