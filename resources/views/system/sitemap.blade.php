@extends('base')

@section('body-class')System _sitemap @stop

@section('sidebar-buttons')
    <a href="{{ url() }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop


@section('main')
	<section class="Section -lightGrad">
    	<div class="_container -lg -center">
            <div class="Content">
				<h1 class="pageHeading">Sitemap</h1>
            </div>
    	</div>
	</section>

	<section class="Section -light">
    	<div class="_container -lg">
            <div class="Content">

                <h2 class="alt">Pages</h2>
                <ul>
    				@foreach($pages->static as $page)
    				    @if($page['title'] != '')
    				        <li>
    				            <a href="{{ route($page['route']) }}" class="btn">{{ $page['title'] }}</a>
    				        </li>
    				    @endif
    				@endforeach
                </ul>

                <hr class="spacer">

                <h2 class="alt">Portfolio</h2>
                <ul>
    				@foreach($pages->projects as $project)
				        <li>
				            <a href="{{ (isset($project->url) && $project->url != '') ? $project->url : route('projects.show', $project->slug) }}" class="btn">{{ $project->title }}</a>
				        </li>
    				@endforeach
                </ul>

            </div>
    	</div>
	</section>
@stop

@section('sidebar')

@stop