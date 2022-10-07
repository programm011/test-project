@extends('layouts.main')

@section('content')
    <x-form :title="__('common.create')" :action="route('roles.store')" :fields="[
        ['type'=>'text','name'=>'title','label'=>'Title','required'=>true],
        ['type'=>'text','name'=>'name','label'=>'Name','required'=>true],
        ['type'=>'select','name'=>'permissions[]','label'=>__('common.permissions'),'required'=>true,'options'=>$permissions,'multiple'=>true],
    ]"/>
@endsection
