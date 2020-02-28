{!! '<'.'?'.'xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
       <loc>{{ route('project.home', [$project]) }}</loc>
       @if(isset($config['updated_at']))
           <lastmod>{{ $config['updated_at'] }}</lastmod>
       @endif
       <changefreq>monthly</changefreq>
       <priority>1</priority>
    </url>
    @if(isset($routes))
    	@foreach($routes as $key => $route)
           <url>
              <loc>{{ route('project.page', [$project, $key]) }}</loc>
              @if(isset($config['updated_at']))
                  <lastmod>{{ $config['updated_at'] }}</lastmod>
              @endif
              <changefreq>monthly</changefreq>
              <priority>0.8</priority>
           </url>
    	@endforeach
    @endif
</urlset>
