<div class="ml-auto">
    <form action="{{route("$route.index")}}" method="get">
        <div class="input-group input-group-sm">
            <input type="text" name="search" class="form-control float-right"
                   placeholder="{{__('common.search')}}" value="{{request()->get('search')}}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
