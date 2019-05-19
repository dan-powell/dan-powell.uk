<a class="Sidebar-button" href="{{ is_array($url) ? route($url[0], $url[1] ?? null, $url[2] ?? null) : url($url) }}">
    <svg class="Sidebar-button-icon" viewBox="0 0 512 512">
        <use xlink:href="{{ asset($icon) }}"></use>
    </svg>
    @isset($label)
        <span class="Sidebar-button-inner">
            <span class="Sidebar-button-label">{{ $label }}</span>
        </span>
    @endisset
</a>
