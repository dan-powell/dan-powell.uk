{!! '<'.'?'.'xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	@foreach($pages as $key => $page)
        @if(isset($key))
	       <url>
              <loc>{{ route('page', $key) }}</loc>
              @if(isset($page['updated_at']))
                  <lastmod>{{ $page['updated_at'] }}</lastmod>
              @endif
              <changefreq>monthly</changefreq>
              <priority>0.8</priority>
           </url>
       @endif
	@endforeach
</urlset>
