@if(isset($items) && count($items))
    <div class="PortfolioList">
        <div class="PortfolioList-heading">
            <h3 class="PortfolioList-title"><a href="{{ route('portfolio.index') }}">Work</a></h3>
        </div>
    	@foreach($items as $key => $item)
    	    <div class="PortfolioList-item PortfolioList-item--{{$loop->iteration}}">
                @include('main.portfolio.excerpt', ['item' => $item, 'slug' => $key])
    	    </div>
    	@endforeach
        <div class="PortfolioList-more"><a href="{{ route('portfolio.index') }}">More</a></div>
    </div>
@endif
