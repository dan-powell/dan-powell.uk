@extends('base')

@section('body-class')Projects _show -static @stop


@section('styles')
    @parent

    <style>
    .js-lazy {
        display: none;
    }
    </style>
@stop


@section('main')

<div class="container">
	<div class="row">

        @for ($month = 1; $month <= 12; $month++)
            @for ($day = 1; $day <= cal_days_in_month(CAL_GREGORIAN, $month, 2010); $day++)

                <div class="col-md-2 col-sm-3">
                    <a href="{{ url() }}/projects/three-six-five/full/{{ str_pad($month, 2, '0', STR_PAD_LEFT) }}-{{ str_pad($day, 2, '0', STR_PAD_LEFT) }}.jpg"
                        data-toggle="lightbox">
                        <p class="text-center">
                            <strong>
                                {{ Carbon::createFromDate(2010, $month, $day)->format('jS \\of F') }}
                            </strong>
                        </p>

                        <img data-original="{{ url() }}/projects/three-six-five/thumbs/{{ str_pad($month, 2, '0', STR_PAD_LEFT) }}-{{ str_pad($day, 2, '0', STR_PAD_LEFT) }}.jpg" class="-center js-lazy" width="260" height="120"/>
                        <noscript><img src="{{ url() }}/projects/three-six-five/thumbs/{{ str_pad($month, 2, '0', STR_PAD_LEFT) }}-{{ str_pad($day, 2, '0', STR_PAD_LEFT) }}.jpg" class="-center js-lazy" width="260" height="120"/></noscript>


                    </a>
                </div>

            @endfor
        @endfor

	</div>
</div>

@stop


@section('scripts')
    @parent
    <script src="{{ url() }}/js/vendor/jquery.min.js?rev=1423329234356" type="text/javascript"></script>
    <script src="{{ url() }}/js/vendor/jquery.lazyload.min.js?rev=1423329234356" type="text/javascript"></script>
    <script src="{{ url() }}/js/bootstrap.js?rev=1423329234356" type="text/javascript"></script>



    <script type="text/javascript">
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        $("img.js-lazy").show().lazyload({
            effect : "fadeIn"
        });

    </script>
@stop