@section('meta')
<meta name="robots" content="noindex">
@stop

@section('main')
    @parent
    <section class="Section">
        <div class="_container -lg Content">
            @include('styleguide.content.advanced')
        </div>
    </section>
@stop