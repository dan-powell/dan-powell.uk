@if(isset($items) && count($items))
<div class="PortfolioListHero">
    @foreach($items as $key => $item)
        <div class="PortfolioListHero-item PortfolioListHero-item--{{$loop->iteration}}">
            @include('main.portfolio.excerpt', ['item' => $item, 'slug' => $key])
        </div>
    @endforeach
    {{-- <div class="PortfolioListHero-intro PortfolioListHero-intro--2">
        <svg class="PortfolioListHero-arrow PortfolioListHero-arrow--left" width="160" height="25" viewBox="0 0 160 25" xmlns="http://www.w3.org/2000/svg">
            <path d="M80 23.13C80-6.47 2.23 12.94 2.23 12.94L21.07 1.96l2.59 16.4-20.9-4.95" stroke="#979797" stroke-width="3" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p>
            &hellip;and these bits
        </p>
        <svg class="PortfolioListHero-arrow" width="25" height="70" viewBox="0 0 25 70" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.28 2.38C4.63 28.64 17.1 67.93 17.1 67.93L1.47 48.54l21.16-4.43-5.08 22.93" stroke="#979797" stroke-width="3" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <div class="PortfolioListHero-more">
        <p>View more on
            <a class="PortfolioListHero-more-btn" href="{{ route('portfolio.index') }}">my professional portfolio</a>
            or checkout some
            <a class="PortfolioListHero-more-btn" href="{{ route('portfolio.index') }}">random Projects</a>
        </p>
    </div> --}}
</div>
@endif
