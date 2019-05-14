@if(isset($items) && count($items))
    <div class="PortfolioList">
    	@foreach($items as $key => $item)
    	    <div class="PortfolioList-item">
                @include('main.portfolio.excerpt', ['item' => $item, 'slug' => $key])
    	    </div>
    	@endforeach
    </div>
@endif
