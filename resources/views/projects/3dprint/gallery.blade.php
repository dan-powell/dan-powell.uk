@extends('projects.365.base')

@push('class', 'Gallery')

@section('main')

	<div class="Gallery-header">
        <h1 class="Gallery-header-title">All 365 pieces</h1>
        <p class="Gallery-header-sub">Here's the complete list of all work from <a href="{{ route('project.home', '365') }}">my 365 2010 project</a></p>
	</div>

    <div class="Gallery-layout">
        <div class="Gallery-items">
            @for ($month = 1; $month <= 12; $month++)
                <section class="Gallery-section  js-waypoint" id="a-{{$month}}">
                    <h2 class="Gallery-section-title">{{ Carbon::createFromDate(2010, $month, 1)->format('F') }}</h2>
                    <div class="Gallery-list">
                        @for ($day = 1; $day <= cal_days_in_month(CAL_GREGORIAN, $month, 2010); $day++)
                            <div class="Gallery-item">
                                @if (in_array($month . '-' . $day, config('projects.365.videos')))
                                    <a class="Gallery-link js-lightbox" data-type="video" href="{{ asset('assets/' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-' . str_pad($day, 2, '0', STR_PAD_LEFT) . '.mp4') }}">
                                @else
                                    <a class="Gallery-link js-lightbox" data-type="image" href="{{ asset(app('image')->url('gallery/' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-' . str_pad($day, 2, '0', STR_PAD_LEFT) . '.jpg')) }}"
                                     title="{{ Carbon::createFromDate(2010, $month, $day)->format('jS F Y') }}">
                                @endif
                                    <p class="Gallery-date">
                                        {{ Carbon::createFromDate(2010, $month, $day)->format('jS') }}
                                    </p>
                                    <img
                                        data-src="{{ asset(app('image')->crop('300', '300')->url('gallery/' . str_pad($month, 2, "0", STR_PAD_LEFT) .'-'. str_pad($day, 2, "0", STR_PAD_LEFT).'.jpg'))}}"
                                        class="Gallery-thumb lazy"
                                        src="{{ asset(app('image')->crop('300', '300')->url('holding.png')) }}"
                                            />
                                    <noscript>
                                        <img class="Gallery-thumb" src="{{ asset(app('image')->crop('150', '150')->url('gallery/' . str_pad($month, 2, '0', STR_PAD_LEFT) .'-'. str_pad($day, 2, '0', STR_PAD_LEFT) . '.jpg')) }}"/>
                                    </noscript>
                                </a>
                            </div>
                        @endfor
                    <div>
                </section>
            @endfor
        </div>
        <div class="Gallery-nav">
            <ul class="Gallery-nav-root">
                @for ($month = 1; $month <= 12; $month++)
                    <li class="Gallery-nav-item">
                        <a class="Gallery-nav-link" href="#a-{{$month}}">
                            <span>{{ Carbon::createFromDate(2010, $month, 1)->format('M') }}</span>
                        </a>
                    </li>
                @endfor
            </ul>
        </div>
    </div>
@stop
