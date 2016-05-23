@section('meta')
<meta name="robots" content="noindex">
@stop

@section('main')
    @parent
    <article class="">
        <section class="Section Section--lightGrad Section--animated">
            <div class="Section-container Section--md Content">
                <h1 class="pageHeading">
    				Sections
    			</h1>
            </div>
        </section>

        <section class="Section Section--dark Section--center Content">

<code>&lt;section class=&quot;Section -dark -center Content&quot;&gt;
    ...
&lt;/section&gt;</code>
        <spacer class="-xl"/>
            <img src="{{ url() }}/img/img/test-hero/hero_2x1_1.jpg?w=1920&h=480&fit=crop"/>
        </section>

        <section class="Section Section--primary">
            <div class="Section-container Section--lg Content">

<code>&lt;section class=&quot;Section -primary&quot;&gt;
    &lt;div class=&quot;_container -lg Content&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/section&gt;</code>


                {!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-basic')) !!}
            </div>
        </section>

        <section class="Section">
        	<div class="Section-container Section--light Section--xl Content">
<code>&lt;section class=&quot;Section&quot;&gt;
	&lt;div class=&quot;_container -light -xl Content&quot;&gt;
        ...
	&lt;/div&gt;
&lt;/section&gt;</code>

                {!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-basic')) !!}
    		</div>

    		<div class="Section-container Section--secondaryGrad Section--xl Section--center Content Section--animated">

<code>&lt;div class=&quot;_container -secondaryGrad -xl -center Content -animated&quot;&gt;
    ...
&lt;/div&gt;</code>

                {!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-basic')) !!}
    		</div>

    		<div class="Section-container Section--light Section--xl Content">

                {!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-basic')) !!}

    	        <div class="Section-fullWidth">
    	        <img src="{{ url() }}/img/img/test-hero/hero_2x1_1.jpg?w=1140&h=285&fit=crop" alt="alt text" class=""/>
    	        </div>

                {!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-basic')) !!}

    		</div>

    		<div class="Section-container Section--tertiary Section--xl Content">
<code>&lt;div class=&quot;_container -tertiary -xl Content&quot;&gt;
    ...
&lt;/div&gt;</code>
                {!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-basic')) !!}

    		</div>

        </section>

    	<section class="Section Section--dark Section--center Section--lg">
    		<div class="Section-container Section--light Section--rounded Section--lg Content">

<code>&lt;section class=&quot;Section -dark -center -lg&quot;&gt;
...
&lt;/section&gt;</code>

                {!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-basic')) !!}

    		</div>

    		<div class="Section-container Section--lg Content">

<code>&lt;div class=&quot;_container -lg Content&quot;&gt;
    ...
&lt;/div&gt;</code>

    		{!! Markdown::parse(View::make('public.styleguide.markdown.styleguide-markdown-basic')) !!}

        </section>
    </article>
@stop
