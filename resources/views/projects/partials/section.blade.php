@section('styles')
    @parent
    @if (isset($section->style) && $section->style != '')
        <style type="text/css">
            {!! $section->style !!}
        </style>
    @endif
@stop

@if(isset($section->content) && $section->content != '')
    <section class="Section{{(isset($section->section_classes)) ? ' ' . $section->section_classes : ''}}" style>
        <div class="{{(isset($section->container_classes)) ? '_container ' . $section->container_classes : ''}}">
        	<div class="Content">
                {!! Markdown::convertToHtml($section->content) !!}
        	</div>
     	</div>
    </section>
@endif

@section('scripts')
    @parent
    @if (isset($section->script) && $section->script != '')
        <script type="text/javascript">
            {!! $section->script !!}
        </script>
    @endif
@stop