@extends('projects.ai52.base')

@section('meta')
    <title>Exploring AI Art - Dan Powell Design</title>
    <meta name="description" content="">
@stop

@push('class', 'Show')

@section('main')

<section class="Container">

    <div class="Container-side">
        <div class="HeaderShow-pagination">
            <div>
                @if($previous)
                    <div class="HeaderShow-pagination-item -prev">
                        @include('projects.ai52.components._excerpt', ['piece' => $previous])
                    </div>
                @endif
            </div>
            <a class="HeaderShow-logo" href="/">
                <img src="{{ asset('assets/ai52_logo.svg') }}" class="HeaderShow-logo-img"/>
            </a>
            <div>
                <div class="HeaderShow-theme">
                    <h2 class="HeaderShow-theme-week">Week {{ $piece->theme->date->format('W') }}</h2>
                    <h2 class="HeaderShow-theme-theme">{{ $piece->theme->name }}</h2>
                </div>
            </div>
            <div>
                <div class="HeaderShow-theme">
                    <h2 class="HeaderShow-theme-week">Piece 00</h2>
                    <h2 class="HeaderShow-theme-theme HeaderShow-title">{{ $piece->name }}</h2>
                </div>
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
            </div>
            <div>
                @if($first)
                    <div class="HeaderShow-pagination-item -first">
                        @include('projects.ai52.components._excerpt', ['piece' => $first])
                    </div>
                @endif
            </div>
            {{-- <h2>More</h2>
            @foreach($piece->theme->pieces as $subpiece)
                @if($subpiece->id != $piece->id)
                    <div class="HeaderShow-pagination-item">
                        @include('projects.ai52.components._excerpt', ['piece' => $subpiece])
                    </div>
                @endif
            @endforeach --}}
        </div>
    </div>

    <section class="Show-inner">

        <div class="Show-media">

            <a class="Show-image" href="{{ asset(app('image')->url($piece->image_url)) }}">
                <img class="Show-image-img" src="{{ asset(app('image')->size('2560')->url($piece->image_url)) }}"/>
            </a>

        </div>

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
                                @foreach(array_reverse($process['images']) as $image)
                                    <a class="Show-process-item js-lightbox" data-type="image" href="{{ asset(app('image')->url($piece->fixPath($image))) }}" title="{{ $process['caption'] ?? '' }}">
                                        <img class="Show-process-item-img" src="{{ asset(app('image')->size(null, '300')->url($piece->fixPath($image))) }}"/>
                                    </a>
                                @endforeach
                                @if(isset($process['description']))
                                    <div class="Show-process-group-desc u-content">
                                        {!! Str::markdown($process['description']) !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    
        @if(isset($piece->metadata_json) && count($piece->metadata_json) > 1)
            <details class="Show-metadata">
                <summary class="Show-metadata-heading">Metadata</summary>
                <dl class="Show-metadata-list">
                    @each('projects.ai52.components._metadata', $piece->metadata_json, 'metadata')
                </dl>
            </details>
        @endif
    
        {{-- @if(count($piece->theme->pieces))
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
        @endif --}}

    </section>

    <div class="Container-side">
        <div class="HeaderShow-pagination">
            @if($next)
                <div class="HeaderShow-pagination-item -next">
                    @include('projects.ai52.components._excerpt', ['piece' => $next])
                </div>
            @endif
            <div>
                
            </div>
            @if($last)
                <div class="HeaderShow-pagination-item -last">
                    @include('projects.ai52.components._excerpt', ['piece' => $last])
                </div>
            @endif
        </div>
    </div>
    
</section>
    
@endsection