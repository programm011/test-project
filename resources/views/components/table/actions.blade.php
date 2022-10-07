<td class="align-middle">
    @if(auth()->user()->hasRole('admin'))
        <a href="{{route("$route.edit",$id)}}" class="badge badge-primary btn-sm">
            <i class="fas fa-pencil-alt"></i>
        </a>
    @endif
    <a href="{{route("$route.show",$id)}}" class="badge badge-info">
        <i class="fas fa-eye"></i>
    </a>
    @if(auth()->user()->hasRole('admin'))
        <form action="{{route("$route.destroy",$id)}}" class="d-inline" method="post"
              onsubmit="return confirm('{{__('common.are_you_sure')}}')">
            @csrf
            @method("DELETE")
            <button type="submit" class="border-0 badge badge-danger">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    @endif
</td>
