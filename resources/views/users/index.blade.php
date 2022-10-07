@extends('layouts.main')

@section('content')
    <x-table.index :title="__('sidebar.users')" route="users" :model="$users" :columns="['id','login','relations'=>['roles.title']]"/>
@endsection
