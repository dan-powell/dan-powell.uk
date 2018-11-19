@section('meta')
<meta name="robots" content="noindex">
@stop

@section('main')
    @parent
    <section class="Section">
        <div class="Section-container Section--lg Content">
            {!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-type-advanced')) !!}
        </div>
    </section>
@stop