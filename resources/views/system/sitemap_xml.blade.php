{!! '<'.'?'.'xml version="1.0" encoding="UTF-8"?>' !!}

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

	@foreach($pages->static as $page)
	    @if($page['title'] != '')
	       <url>

              <loc>{{ route($page['route']) }}</loc>

              <lastmod>{{ $page['last_modified'] }}</lastmod>

              <changefreq>monthly</changefreq>

              <priority>0.8</priority>

           </url>
	    @endif
	@endforeach

    @foreach($pages->projects as $project)
        @if (!isset($project->url) || $project->url == '')
            <url>

              <loc>{{ route('projects.show', $project->slug) }}</loc>

              <lastmod>{{ $project->updated_at->toDateString() }}</lastmod>

              <changefreq>monthly</changefreq>

              <priority>0.8</priority>

           </url>
        @endif

        @if(isset($project->pages) && count($project->pages) > 0)
            @foreach($project->pages as $page)
                @if (!isset($page->url) || $page->url == '')
                    <url>

                      <loc>{{ route('projects.page', [$project->slug, $page->slug]) }}</loc>

                      <lastmod>{{ $page->updated_at->toDateString() }}</lastmod>

                      <changefreq>monthly</changefreq>

                      <priority>0.8</priority>

                   </url>
               @endif
            @endforeach
        @endif

    @endforeach




</urlset>