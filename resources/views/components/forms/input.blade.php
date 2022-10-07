<div class="form-group">
    <label for="{{$name.$id}}">
        {{$label}} @if($required)
            <i class="text-danger">*</i>
        @endif
    </label>
    @if($type == 'file')
        <a href="{{asset($value)}}">{{$value}}</a>
    @endif
    <input type="{{$type}}" class="form-control @if($errors->has($name)) border-danger @endif"
           name="{{$name}}"
           value="{{$value}}"
           id="{{$name.$id}}" placeholder="{{$placeholder}}"
           @if($required) required @endif
           @if($disabled) disabled @endif
           @if($autofocus) autofocus @endif/>
    @if($errors->has($name))
        <small class="form-text text-danger">{{$errors->first($name)}}</small>
    @endif
</div>
