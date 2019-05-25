@extends('projects.365.base')

@push('class', 'Projects _show -static')

@section('main')
    <div class="Section Section--lightGrad">
        <div class="Section-container Section--md Section--center">
        	<div class="Content">
                <h1>All 365 pieces</h1>
        	</div>
     	</div>
    </div>
    <div class="Section Section--primary">
        <div class="Section-container Section--md Section--center">
        	<div class="Content">
                <p class="lead">Here's the complete list of all work from <a href="{{ route('project.home', '365') }}">my 365 2010 project</a></p>
        	</div>
     	</div>
    </div>
    <div class="Section">
        <div class="Section-container Section--sm Section--center">

        	<div class="row js-lightbox">
            	@php
                	$swf = [
                        "2-9",
                        "2-10",
                        "5-7",
                        "5-8",
                        "5-9",
                        "5-29",
                        "5-31",
                        "6-3",
                        "6-5",
                        "7-3",
                        //"2-28",
                        "9-1"
                        ];
                @endphp
                @for ($month = 1; $month <= 12; $month++)
                    @for ($day = 1; $day <= cal_days_in_month(CAL_GREGORIAN, $month, 2010); $day++)
                        <div class="col-md-2 col-sm-3">
                            @if (in_array($month . '-' . $day, $swf))
                                <a href="{{ asset('assets/' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-' . str_pad($day, 2, '0', STR_PAD_LEFT) . '.swf') }}" class="Button Button--secondary Button--md">
                            @else
                                <a href="{{ asset(app('image')->url('all/' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-' . str_pad($day, 2, '0', STR_PAD_LEFT) . '.jpg')) }}"
                                data-title="{{ Carbon::createFromDate(2010, $month, $day)->format('jS \\of F') }}" class="Button Button--light Button--md">
                            @endif
                                <p class="text-center">
                                    <strong>
                                        {{ Carbon::createFromDate(2010, $month, $day)->format('jS \\of F') }}
                                    </strong>
                                </p>
                                <img
                                    data-src="{{ asset(app('image')->crop('300', '300')->url('all/' . str_pad($month, 2, "0", STR_PAD_LEFT) .'-'. str_pad($day, 2, "0", STR_PAD_LEFT).'.jpg'))}}"
                                    class="-center lazy"
                                    src="{{ asset(app('image')->crop('300', '300')->url('holding.png')) }}"
                                        />
                                <noscript>
                                    <img src="{{ asset(app('image')->crop('150', '150')->url('all/' . str_pad($month, 2, '0', STR_PAD_LEFT) .'-'. str_pad($day, 2, '0', STR_PAD_LEFT) . '.jpg')) }}"/>
                                </noscript>
                            </a>
                        </div>
                    @endfor
                @endfor
        	</div>
        </div>
    </div>
@stop
