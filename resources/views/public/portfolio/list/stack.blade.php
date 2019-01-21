@if(isset($items) && count($items))
    <div class="ProjectStack">
    	@foreach($items as $key => $item)
    	    <div class="ProjectStack-item">
                @include('portfolio.excerpt.lead', ['item' => $item, 'slug' => $key])
    	    </div>
    	@endforeach
    </div>
@endif
