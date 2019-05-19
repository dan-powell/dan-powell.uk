@if(isset($items) && count($items))
    <div class="PortfolioStack">
    	@foreach($items as $key => $item)
    	    <div class="PortfolioStack-item">
                @include('main.portfolio.excerpt.lead', ['item' => $item, 'slug' => $key])
    	    </div>
    	@endforeach
    </div>
@endif
