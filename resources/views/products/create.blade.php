@extends('layouts.main')

@section('content')
    <x-form :title="__('common.create')" :action="route('products.store')" :fields="[
        ['type'=>'text','name'=>'title','label'=>'Title','required'=>true],
        ['type'=>'text','name'=>'quantiy','label'=>'Quantiy','required'=>true],
        ['type'=>'text','name'=>'price','label'=>'Price','required'=>true],
    ]"/>
@endsection
