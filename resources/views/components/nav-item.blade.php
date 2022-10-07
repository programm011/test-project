@php
    $routeName = '/'.explode('.',request()->route()->getName())[0];
@endphp
<li class="nav-item">
    <a href="{{$route}}" class="nav-link @if(strstr($route,$routeName)) active @endif">
        <i class="nav-icon {{$icon}}"></i>
        <p>
            {{$text}}
        </p>
    </a>
</li>
