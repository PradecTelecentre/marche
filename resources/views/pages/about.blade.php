@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('inc.leftPicture')
        <div class="col-md-8">
            <div class="row">
                @if (($products))
                    {{-- @foreach ($products as $item) --}}
                        <div class="col-6 col-md">
                            <h5>{{$products->title}}</h5>
                            <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                            </ul>
                        </div>
                    {{-- @endforeach --}}


                @else
                   <p>Le produit n'existe pas</p>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection

