@props(['action', 'post' => null, 'put' => null, 'delete' => null])
<form action="{{ $action }}" method="post" {{ $attributes }}>
    @csrf

    @if ($put)
        @method('put')
    @endif

    @if ($delete)
        @method('delete')
    @endif

    {{ $slot }}

</form>
