@extends('layouts.main')

@section('content')
    <x-table.index :title="__('sidebar.roles')" route="roles" :model="$roles" :columns="['title','name','relations'=>['permissions.title']]"/>
@endsection
