@if(isset($items) && count($items))
    <div class="PortfolioListHero">
        <div class="PortfolioListHero-heading">
            <a href="{{ route('portfolio.index') }}">
                <h3 class="PortfolioListHero-title">
                    Some websites I have made
                </h3>
            </a>
        </div>
    	@foreach($items as $key => $item)
    	    <div class="PortfolioListHero-item PortfolioListHero-item--{{$loop->iteration}}">
                @include('main.portfolio.excerpt', ['item' => $item, 'slug' => $key])
    	    </div>
    	@endforeach
        <div class="PortfolioListHero-more">
            <a class="PortfolioListHero-more-btn" href="{{ route('portfolio.index') }}">
                View more</a>
        </div>
    </div>
@endif
