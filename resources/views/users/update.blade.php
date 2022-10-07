@extends('layouts.main')

@section('content')
    <x-form :title="__('common.edit')" :action="route('users.update',$user)" method="PUT" :fields="[
        ['type'=> 'hidden','name'=>'person_id','label'=>'person_id','value'=>$user->person_id],
        ['type'=>'text','name'=>'login','label'=>__('auth.login.login'),'required'=>true,'value'=>$user->login],
        ['type'=>'password','name'=>'password','label'=>__('auth.login.password')],
        ['type'=>'select','name'=>'role_id','label'=>__('sidebar.roles'),'required'=>true,'options'=>$roles,'value'=>$user->roles()->pluck('id')->toArray()],
        ['type'=>'select','name'=>'is_active','label'=>__('sidebar.is_active'),'required'=>true,'options'=>['0'=>__('common.is_not_active'),1=>__('common.active')],'value'=>$user->is_active]
    ]"/>
@endsection
