<div>
    <div>
        {{$label}} @if($required)
            <i class="text-danger">*</i>
        @endif
    </div>
    <textarea id="{{$id}}" name="{{$name}}">{{$value}}</textarea>
</div>

@push('scripts')
    $(function () {
    // Summernote
    $('#{{$id}}').summernote()
    })
@endpush

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
@endsection
