<div class="p-1">
    @if(in_array($resource->type,['mp3']))
        <audio controls>
            <source src="{{asset($resource->path)}}" type="audio/{{$resource->type}}">
            Your browser does not support the audio element.
        </audio>
    @endif
    @if(in_array($resource->type,['mp4','mov','ogg']))
        <video width="200" controls>
            <source src="{{asset($resource->path)}}" type="video/{{$resource->type}}">
            Your browser does not support the video tag.
        </video>
    @endif
    @if(in_array($resource->type,['jpg','png','gif','jpeg']))
        <img src="{{asset($resource->path)}}" alt="{{$resource->path}}" width="200">
    @endif
    @if(in_array($resource->type,['pdf','doc','docx']))
            <a href="{{$resource->url_path}}">
                <img src="{{asset('assets/img/pdf.png')}}" alt="" title="Скачать">
            </a>
    @endif
</div>
