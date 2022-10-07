@extends('layouts.main')

@section('content')
    @section('content-header')
        @include('layouts.content-header',['title'=>$product->title])
    @endsection

    <div class="container-fluid">
        <div class="card">
            title: {{$product->title}} <br>
            quantiy: {{$product->quantiy}} <br>
            price: {{$product->price}} <br>
            total_price: {{$product->total_price}} <br>
        </div>
    </div>

@endsection
