@extends('layouts.app') 
@section('content')

<section class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">
                <h1>All Contacts</h1>
                <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, illo reiciendis ex odio delectus quasi saepe veniam deserunt distinctio voluptatibus recusandae at sed consequatur laboriosam architecto inventore. Officia, nihil aut.
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="accordion accordion-2 accordion--oneopen">
                    @foreach ($contacts as $item)
                    <li>
                        <div class="accordion__title">
                            <span class="h5">{{$item->name}}
                            <small>
                                {{ $item->college }}                       
                            </small>
                        </span>
                        </div>
                        <div class="accordion__content">
                            {{ $item->email }}
                            <br>
                            <strong>Contact no: </strong> {{ $item->phone }}
                            <br>
                            <strong>CC Head: </strong> {{ $item->cc_head }}
                            <br>
                            <strong>Year</strong>: {{ $item->year }}
                            <br>
                            <strong>Max working hrs: </strong>: {{ $item->work_hrs }}
                            <br>
                            <strong>Why Join:</strong> {{ $item->join }}
                            <br>
                            <small>
                            Created <strong>{{ $item->created_at /*->diffForHumans() */ }}</strong>
                        </small>
                            <div class="text-right d-block">
                                
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection