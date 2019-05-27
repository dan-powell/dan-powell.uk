@extends('main.base')

@push('class', 'Projects _show -static')

@section('buttons')
    @parent
    @component('sidebar.components.button')
        @slot('url', route('portfolio.index'))
        @slot('icon', asset('img/sidebar/icons.svg#return'))
        @slot('label', 'More Portfolio Work')
    @endcomponent
@endsection

@section('main')
    @yield('content')

    @if(count($items))
        <section class="Section Section--primary Section--md">
            <div class="Section-container Section--center">
                <h3>Other work I have completed</h3>
            </div>
        </section>
        <section class="Section  Section--lightGrad Section--lg Section--center">
            <div class="Section-container">
                @include('main.portfolio.list', ['items' => $items])
            </div>
        </section>
    @endif
@endsection
