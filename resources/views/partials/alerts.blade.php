@foreach(['success', 'warning', 'info', 'danger'] as $type)
@if (session()->has($type))
<div class="alert alert-success" role="alert">
    {{ session()->get($type) }}
</div>
@endif
@endforeach