@if($errors->any())
    <div class="form-group">
        @foreach($errors->all() as $error)
            <small class="text-danger"> {{$error}} </small>
        @endforeach
    </div>
@endif
