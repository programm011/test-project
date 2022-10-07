@extends('layouts.main')

@section('content')
    <x-form :title="__('common.edit')" :action="route('roles.update',$role)" method="PUT" :fields="[
         ['type'=>'text','name'=>'title','label'=>'Title','required'=>true,'value'=>$role->title],
         ['type'=>'text','name'=>'name','label'=>'Name','required'=>true,'value'=>$role->name],
         ['type'=>'select','name'=>'permissions[]',
         'label'=>__('common.permissions'),'required'=>true,
         'options'=>$permissions,'multiple'=>true,'value'=>$role->getAllPermissions()->pluck('id')->toArray()],
    ]"/>
@endsection
