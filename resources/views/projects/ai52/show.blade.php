@extends('projects.ai52.base')

@section('meta')
    <title>Exploring AI Art - Dan Powell Design</title>
    <meta name="description" content="">
@stop

@push('class', 'Show')

@section('main')

<section class="Container">
    <section class="Show-inner">
        <header class="HeaderShow">
            <a class="HeaderShow-logo" href="/">
                <img src="{{ asset('assets/ai52_logo.svg') }}" class="HeaderShow-logo-img"/>
            </a>
            <div class="HeaderShow-theme">
                <h2 class="HeaderShow-theme-week">Week {{ $piece->theme->date->format('W') }}</h2>
                <h2 class="HeaderShow-theme-theme">{{ $piece->theme->name }}</h2>
            </div>
            <h1 class="HeaderShow-title">{{ $piece->name }}</h1>
        </header>

        <div class="Show-media">

            <a class="Show-image" href="{{ asset(app('image')->url($piece->image_url)) }}">
                <img class="Show-image-img" src="{{ asset(app('image')->size('2560')->url($piece->image_url)) }}"/>
            </a>

            @if($piece->description || $piece->video)
                <div class="Show-aside">
                
                    @if($piece->description)
                        <div class="Show-desc u-content">
                            {!! Str::markdown($piece->description) !!}
                        </div>
                    @endif

                    @if($piece->video)
                        <video class="Show-video" controls>
                            <source src="{{ asset('/assets/' . $piece->video_url) }}">
                        </video>
                    @endif

                </div>
            @endif

            @if(count($piece->process))
                <div class="Show-process">
                    <h2 class="Show-process-heading">Process</h2>
                    <div class="Show-process-list">
                        @foreach($piece->process as $key => $process)
                            <div class="Show-process-group">
                                <h4 class="Show-process-group-heading">
                                    {{ $key + 1 }} <span class="Show-process-group-heading-h">{{ $process['caption'] ?? '' }}</span>
                                </h4>
                                <div class="Show-process-group-list">
                                    @foreach($process['images'] as $image)
                                        <a class="Show-process-item js-lightbox" data-type="image" href="{{ asset(app('image')->url($piece->fixPath($image))) }}" title="{{ $process['caption'] ?? '' }}">
                                            <img class="Show-process-item-img" src="{{ asset(app('image')->size(null, '300')->url($piece->fixPath($image))) }}"/>
                                        </a>
                                    @endforeach
                                </div>
                                @if(isset($process['description']))
                                    <div class="Show-desc u-content">
                                        {!! Str::markdown($process['description']) !!}
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    
    
        @if(isset($piece->metadata_json) && count($piece->metadata_json) > 1)
            <details class="Show-metadata">
                <summary class="Show-metadata-heading">Metadata</summary>
                <dl class="Show-metadata-list">
                    @each('projects.ai52.components._metadata', $piece->metadata_json, 'metadata')
                </dl>
            </details>
        @endif
    
        @if(count($piece->theme->pieces))
            <div class="Show-more">
                <h2 class="Show-more-heading">More in <span class="Show-more-heading-theme">{{ $piece->theme->name }}</span></h2>
                <div class="Show-more-list">
                    @foreach($piece->theme->pieces as $subpiece)
                        @if($subpiece->id != $piece->id)
                            <div class="Show-more-item">
                                @include('projects.ai52.components._excerpt', ['piece' => $subpiece])
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    </section>
    <div class="Container-side">
        <div class="HeaderShow-pagination">
            @if($previous)
                <div class="HeaderShow-pagination-item -prev">
                    @include('projects.ai52.components._excerpt', ['piece' => $previous])
                </div>
            @endif
            @if($next)
                <div class="HeaderShow-pagination-item -next">
                    @include('projects.ai52.components._excerpt', ['piece' => $next])
                </div>
            @endif
        </div>
    </div>
@endsection