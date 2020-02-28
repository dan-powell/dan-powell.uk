{!! '<'.'?'.'xml version="1.0" encoding="UTF-8"?>' !!}
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ route('sitemap.xml') }}</loc>
    </sitemap>
    @if(isset($projects) && count($projects))
        @foreach($projects as $key => $project)
            @if(isset($project['url']) && is_array($project['url']))
                <sitemap>
                    <loc>{{ route($project['url'][0], $project['url'][1] ?? null) }}/sitemap.xml</loc>
                </sitemap>
            @endif
        @endforeach
    @endif
</sitemapindex>
