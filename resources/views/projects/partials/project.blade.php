<a href="{{ (isset($project->url) && $project->url != '') ? $project->url : route('projects.show', $project->slug) }}" class="Project">
    @if(File::exists('projects/' . $project->slug . '/thumb.jpg'))
        <img
            srcset="{{ url() }}/img/projects/{{ $project->slug }}/thumb.jpg?w=800&h=800&fit=crop 2x"
            src="{{ url() }}/img/projects/{{ $project->slug }}/thumb.jpg?w=400&h=400&fit=crop"
            alt="{{{ $project->title }}}"/>
    @else
        <img src="{{ url() }}/img/logo_symbol.svg" onerror="this.onerror=null; this.src='{{ url() }}/img/logo_symbol.png'" alt="{{{ $project->title }}}"/>
    @endif

    <div class="_titleWrapper">
        <h3 class="_title">{{ str_limit($project->title, 60) }}&nbsp;</h3>
    </div>
</a>