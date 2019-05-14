<a class="Sidebar-button" href="{{ $url }}">
    <svg class="Sidebar-button-icon" viewBox="0 0 512 512">
        <use xlink:href="{{ $icon }}"></use>
    </svg>
    @isset($label)
        <span class="Sidebar-button-inner">
            <span class="Sidebar-button-text">{{ $label }}</span>
        </span>
    @endisset
</a>
