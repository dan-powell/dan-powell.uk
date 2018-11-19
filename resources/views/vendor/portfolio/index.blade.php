@extends('public.publicBase')

@section('meta')
<title>My Portfolio | Dan Powell</title>
<meta name="description" content="Here's a selection of my best work.">
@stop

@section('class')Projects _index @stop

@section('main')

    <section class="Section Section--lightGrad Section--md">
        <div class="Section-container">
            <h1 class="pageHeading">
                My Portfolio
            </h1>
        </div>
    </section>

    <section class="Section Section--primary Section--md">
	    <div class="Section-container Section--center">
    	    <p>Here are some projects and other things that I've done.</p>
            <!-- <p>View the   most recent        examples of my    illustration        work</p> -->

            <button class="Button" data-filter=".project" onclick="iso.arrange({filter: '*'})">All</button>

            @if(isset($tags) && count($tags) > 0)
                @foreach($tags as $tag)
                    <button class="Button" data-filter=".project" onclick="iso.arrange({filter: '.-{{ str_slug($tag->title) }}'})">{{ $tag->title }}</button>
                @endforeach
            @endif

	    </div>
    </section>

    <section class="Section">
        <div class="Section-container Section--center Section--md">

            @if(isset($projects) && count($projects) > 0)
                <div class="ProjectList" id="isotope">
                	@foreach($projects as $project)
                	    <div class="ProjectList-column {{ $project->allTags }}" data-order-type="{{ $project->allTags }}" data-order-created="{{ $project->created_at }}">
                            @include('portfolio::partials.thumb', ['project' => $project])
                	    </div>
                	@endforeach

                	@if(isset($tags) && count($tags) > 0)
                        @foreach($tags as $tag)
                            <div class="ProjectList-column ProjectList--{{ str_slug($tag->title) }} ProjectList--type" data-order-type="-{{ str_slug($tag->title) }}" data-order-created="0000">
                                <a class="Project Project--divider" data-filter=".project" onclick="iso.arrange({filter: '.-{{ str_slug($tag->title) }}'})">
                                    <img src="{{ url('/') }}/img/logo_symbol.svg" onerror="this.onerror=null; this.src='{{ url('/') }}/img/logo_symbol.png'" alt="{{{ $project->title }}}"/>
                                    <div class="Project-titleWrapper">
                    	                <h3 class="Project-title">{{ $tag->title }}&nbsp;</h3>
                    	            </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            @else
            	<p>&hellip;or not. There arn&lsquo;t any projects to show at the moment, probably because I&lsquo;m fiddling around with something on this site.</p>
            	<p>Sorry, please check back later and there might be something to see.</p>
            @endif

        </div>
    </section>
@stop

@section('sidebar')
@stop

@section('scripts')
    <script src="{{ url('/') }}/js/portfolio.js" type="text/javascript"></script>

    <script type="text/javascript">
        // or with vanilla JS
		var container = document.querySelector('#isotope');
		var iso;
		// initialize Isotope after all images have loaded
		imagesLoaded( container, function() {
		  iso = new Isotope( container, {
		    // options
		    itemSelector: '.ProjectList-column',
            //layoutMode: 'packery'
            //filter: '.image'

            getSortData: {
                type: '[data-order-type]',
                created: '[data-order-created]' // value of attribute
            },

            sortBy: [ 'type', 'created' ],
            sortAscending: {
                type: true,
                created: false
            }

		  });

		  //iso.options.filter = '.image';

		  iso.arrange({
			  // item element provided as argument
			  //filter: '.project'
		   });





		  console.log(iso);
		  //.isotope();
		});
    </script>

@stop