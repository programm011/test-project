@extends('layouts.main')

@section('content')
    <x-form :title="__('common.create')" :action="route('users.store')" :fields="[
        ['type'=> 'hidden','name'=>'person_id','label'=>'person_id','value'=>1],
        ['type'=>'text','name'=>'login','label'=>__('auth.login.login'),'required'=>true],
        ['type'=>'text','name'=>'password','label'=>__('auth.login.password'),'required'=>true],
        ['type'=>'select','name'=>'role_id','label'=>__('sidebar.roles'),'required'=>true,'options'=>$roles],
        ['type'=>'select','name'=>'is_active','label'=>__('sidebar.is_active'),'required'=>true,'options'=>['0'=>__('common.is_not_active'),1=>__('common.active')]],
    ]"/>
@endsection
