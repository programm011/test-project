<div class="form-group">
    <label for="{{$name.$id}}">
        {{$label}} @if($required)
            <i class="text-danger">*</i>
        @endif
    </label>
    <select class="form-control @if($multiple)select{{$id}}@endif" @if($multiple)multiple="multiple"@endif name="{{$name}}" @if($required) required @endif>
        @if(!$multiple)<option value=""> -- {{__('common.select')}} --</option>@endif
        @foreach($options as $key => $option)
            <option value="{{$key}}" @selected(is_array($value) && in_array($key,$value)) @selected(!is_array($value) && $key == $value)>
                {{$option}}
            </option>
        @endforeach
    </select>
    @if($errors->has($name))
        <small class="form-text text-danger">{{$errors->first($name)}}</small>
    @endif
</div>

@if($multiple)
@push('scripts')
    $(function () {
    //Initialize Select2 Elements
    $('.select{{$id}}').select2()
    })
@endpush

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
@endsection
@endif



