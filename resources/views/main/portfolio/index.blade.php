@extends('main.base')

@section('meta')
<title>My Portfolio | Dan Powell</title>
<meta name="description" content="Here's a selection of my best work.">
@stop

@section('class', 'Portfolio _index')

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
	    </div>
    </section>

    <section class="Section">
        <div class="Section-container Section--center Section--md">
            @include('main.portfolio.list.stack', ['items' => $lead])
        </div>
    </section>

    <section class="Section Section--primary Section--md">
	    <div class="Section-container Section--center">
    	    <p>Here are some projects and other things that I've done.</p>
	    </div>
    </section>

    <section class="Section">
        <div class="Section-container Section--center Section--md">
            @include('main.portfolio.list', ['items' => $items])
        </div>
    </section>
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
