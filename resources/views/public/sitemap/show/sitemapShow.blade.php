@extends('public.publicBase')

@section('meta')
<title>Sitemap | Dan Powell</title>
<meta name="description" content="A map of all the pages on this site.">
@stop

@section('class')System _sitemap @stop

@section('sidebar-buttons')
    <a href="{{ url('/') }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop


@section('main')
	<section class="Section Section--lightGrad">
    	<div class="Section-container Section--lg Section--center">
            <div class="Content">
				<h1 class="pageHeading">Sitemap</h1>
            </div>
    	</div>
	</section>

<section class="Section Section--primary">
    	<div class="Section-container Section--lg Section--center">
            <div class="Content">

            </div>
    	</div>
	</section>

	<section class="Section">
    	<div class="Section-container Section--lg">
            <div class="Content">

                <h2 class="alt">Pages</h2>
                <ul>
    				@foreach($pages->static as $page)
    				    @if($page['title'] != '')
    				        <li>
    				            <a href="{{ route($page['route']) }}" class="Button">{{ $page['title'] }}</a>
    				        </li>
    				    @endif
    				@endforeach
                </ul>

                <hr class="spacer">

                <h2 class="alt">Portfolio</h2>
                <ul>
    				@foreach($pages->projects as $project)
				        <li>
				            <a href="{{ (isset($project->url) && $project->url != '') ? $project->url : route('projects.show', $project->slug) }}" class="Button">{{ $project->title }}</a>
				        </li>

				        @if(isset($project->pages) && count($project->pages) > 0)
    				        <ul>
                                @foreach($project->pages as $page)
        				        <li>
        				            <a href="{{ (isset($page->url) && $page->url != '') ? $page->url : route('projects.page', [$project->slug, $page->slug]) }}" class="Button">{{ $project->title }} :: {{ $page->title }}</a>
        				        </li>
                                @endforeach
    				        </ul>
				        @endif

    				@endforeach
                </ul>

            </div>
    	</div>
	</section>
@stop

@section('sidebar')

@stop