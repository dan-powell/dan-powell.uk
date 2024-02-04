@extends('projects.ai52.base')

@section('meta')
    <title>Exploring AI Art - Dan Powell Design</title>
    <meta name="description" content="">
@stop

@push('class', 'Index')

@section('main')
    <section class="Container">
        <div class="Container-inner">
            <header class="Header">
                <img src="{{ asset('assets/ai52_logo.svg') }}" class="Header-logo"/>
                <p class="Header-desc">In this artistic journey of discovery, we explore the creative potential of AI by creating a unique piece of artwork each week for a span of one year. This experiment aims to uncover the boundless possibilities of a collaborative creative workflow involving both humans and artificial intelligence.</p>
            </header>
            <section class="Index">
                <div class="Index-list">
                    @foreach($dates as $date => $themes2)
                        <div class="Index-list-item">
                            <div class="Index-list-month">
                                <h4 class="Index-list-month-h">{{ $date }}</h4>
                            </div>
                            <div class="Index-list-inner">
                                @foreach($themes2 as $theme)
                                    <div class="Index-list-group">
                                        <section class="Index-list-group-heading">
                                            <h2 class="Index-list-group-week">Week {{ $theme->date->format('W') }}</h2>
                                            <h3 class="Index-list-group-theme">{{ $theme->name }}</h3>
                                        </section>
                                        <div class="Index-list-group-items">
                                            @each('projects.ai52.components._excerpt', $theme->pieces, 'piece')
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="Index-pagination">
                    {{ $themes->links() }}
                </div>
            </section>
        </div>
    </section>
@endsection