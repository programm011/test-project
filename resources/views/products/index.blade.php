@extends('layouts.main')

@section('content')
    <x-table.index title="Products" route="products" :model="$products"
                   :columns="['title','quantiy','price','total_price']"/>
@endsection
