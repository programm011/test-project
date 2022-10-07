@extends('layouts.main')

@section('content')
    <x-form :title="__('common.edit')" :action="route('products.update',$product)" method="PUT" :fields="[
        ['type'=>'text','name'=>'title','label'=>'Title','required'=>true,'value'=>$product->title],
        ['type'=>'text','name'=>'quantiy','label'=>'Quantiy','required'=>true,'value'=>$product->quantiy],
        ['type'=>'text','name'=>'price','label'=>'Price','required'=>true,'value'=>$product->price],
           ]"/>
@endsection
