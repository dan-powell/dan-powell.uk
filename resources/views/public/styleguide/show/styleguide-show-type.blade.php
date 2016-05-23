@section('meta')
<meta name="robots" content="noindex">
@stop

@section('main')
    @parent
    <section class="Section">
        <div class="_container -lg Content">
            {!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-type')) !!}
        </div>
    </section>
@stop