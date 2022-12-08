<a 
    href="{{ isset($id) ? route($route, $id) : route($route) }}" 
    class="{{ isset($class) ? $class : '' }}"
>
{{ $text }}
</a>