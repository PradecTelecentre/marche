@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('inc.leftPicture')
        <div class="col-md-8 ">
            <div class="row">
                <div class="col-md-12 clearfix">
                        <a type="button" class="btn float-right" href="/marche/create" style="background-color: darkorange">Ajouter un object</a>
                </div>
                    @if (count($products) > 0)
                        @foreach ($products as $item)
                            <div class="col-md-6 col-lg-6">
                                <br><br>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="row">
                                            <h6 class="col-md-12 col-lg-12" style="">{{$item->title}}</h6>
                                            <small class="col-md-12 col-lg-12" >{{$item->quantity}} disponible(s)</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="row">
                                            <h6 class="col-md-12 col-lg-12" style="">{{$item->number1}}</h6>
                                            <small class="col-md-12 col-lg-12" >Mr. {{$item->nom}}</small>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 productImage" style="height: 120px;">
                                        <img src="{{asset('storage/imagesItem/' .$item->image)}}" alt="" style="width: 100%; height: 100%">
                                        <div class="bottom-left">{{$item->prix}} fcfa</div>
                                    </div>
                                </div>
                                <br>
                            </div>

                        @endforeach
                    @endif

            </div>
            <p class="panel ">{{$products->links()}}</p>
        </div>
    </div>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
<div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
        Modal body..
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>

    </div>
</div>
</div>
@endsection

