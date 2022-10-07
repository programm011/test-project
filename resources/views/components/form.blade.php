@section('content-header')
    @include('layouts.content-header',['title'=>$title])
@endsection

<div class="container-fluid">
    <div class="card">
        <form action="{{$action}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method($method)
            <div class="card-body">
                <div class="row row-cols-2">
                    @foreach($fields as $field)
                        <x-forms.field :field="$field"/>
                    @endforeach
                </div>
                <x-show-errors/>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{__('common.create')}}/{{__('common.edit')}}</button>
            </div>
        </form>
    </div>
</div>
