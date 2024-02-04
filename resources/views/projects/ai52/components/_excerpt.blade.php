<div class="PieceExcerpt">  
    <a href="{{ $piece->url }}" class="PieceExcerpt-link">
        {{-- <h3>{{ $piece->name }}</h3> --}}
        <img src="{{ asset(app('image')->crop(null, '300')->url($piece->thumbnail_url)) }}"/>
    </a>
</div>