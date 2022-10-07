@section('content-header')
    @include('layouts.content-header',['title'=>$title])
@endsection

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex mb-2">
                <div class="input-group input-group-sm" style="width: 125px">
                    <a href="{{route("$route.create")}}"
                       class="form-control float-right btn btn-primary">{{__('common.create')}}</a>
                </div>
                <x-table.search route="{{$route}}"/>
            </div>
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover table-sm text-nowrap">
                        <thead>
                        <tr>
                            @foreach($columns as $key => $column)
                                @if($key == 'relations' || $key == 'parent')
                                    @foreach($column as $val)
                                        <th>{{ucfirst(explode('.',$val)[0])}}</th>
                                    @endforeach
                                @elseif($key == 'resource')
                                    @foreach($column as $val)
                                        <th>{{ucfirst($val)}}</th>
                                    @endforeach
                                @else
                                    <th>{{(ucfirst($column))}}</th>
                                @endif
                            @endforeach
                            <th style="width: 40px">{{__('common.actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($model as $item)
                            <tr>
                                @foreach($columns as $key => $column)
                                    @if($key=='relations')
                                        @foreach($column as $relation)
                                            <td class="align-middle">
                                                @foreach($item->{explode('.',$relation)[0]} as $val)
                                                    <div class="p-1">{{$val->{explode('.',$relation)[1]} }}</div>
                                                @endforeach
                                            </td>
                                        @endforeach
                                    @elseif($key=='parent')
                                        @foreach($column as $relation)
                                            <td class="align-middle">
                                                <div
                                                    class="p-1">{{$item->{explode('.',$relation)[0]}->{explode('.',$relation)[1]}??null }}</div>
                                            </td>
                                        @endforeach
                                    @elseif($key == 'resource')
                                        @foreach($column as $relation)
                                            <td class="align-middle">
                                                <x-table.resource :resource="$item->{$relation}"/>
                                            </td>
                                        @endforeach
                                    @else
                                        <td class="align-middle">{{$item->$column}}</td>
                                    @endif
                                @endforeach
                                <x-table.actions route="{{$route}}" id="{{$item->id}}"/>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            {{$model->links()}}
        </div>
    </div>
</div>
