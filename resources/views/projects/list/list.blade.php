@if(isset($items) && count($items))
    <div class="ProjectList">
    	@foreach($items as $key => $item)
    	    <div class="ProjectList-column">
                @include('projects.excerpt.thumb', ['item' => $item, 'slug' => $key])
    	    </div>
    	@endforeach
    </div>
@else
	<p>&hellip;or not. There aren&lsquo;t any projects to show at the moment, probably because I&lsquo;m fiddling around with something on this site.</p>
	<p>Sorry, please check back later and there might be something to see.</p>
@endif
