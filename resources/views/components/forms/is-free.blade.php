@if($status)
    <span class="badge badge-success">{{__('common.free')}}</span>
@else
    <span class="badge badge-warning">{{__('common.is_not_free')}}</span>
@endif
