@extends('public.publicBase')

@section('meta')
<meta name="robots" content="noindex">
@stop

@section('main')

	<section class="Section Section--center Section--sm">
		<div class="Section-container Section--light Section--rounded Section--sm">
            @include('public.styleguide.partials.styleguide-links')
		</div>
    </section>

    @if($view != null && $view != 'index')
        @include('public.styleguide.show.styleguide-show-' . $view)
    @else
        @include('public.styleguide.index.styleguide-index')
    @endif

@stop

@section('sidebar-buttons')
    <a href="{{ route('styleguide') }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop