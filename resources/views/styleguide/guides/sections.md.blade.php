@section('meta')
<meta name="robots" content="noindex">
@stop

@section('main')
    @parent
    <article class="">
        <section class="Section -lightGrad -animated">
            <div class="_container -md Content">
                <h1 class="pageHeading">
    				Sections
    			</h1>
            </div>
        </section>

        <section class="Section -dark -center Content">

<code>&lt;section class=&quot;Section -dark -center Content&quot;&gt;
    ...
&lt;/section&gt;</code>
        <spacer class="-xl"/>
            <img src="{{ url() }}/img/img/test-hero/hero_2x1_1.jpg?w=1920&h=480&fit=crop"/>
        </section>

        <section class="Section -primary">
            <div class="_container -lg Content">

<code>&lt;section class=&quot;Section -primary&quot;&gt;
    &lt;div class=&quot;_container -lg Content&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/section&gt;</code>


                @include('styleguide.content.test')
            </div>
        </section>

        <section class="Section">
        	<div class="_container -light -xl Content">
<code>&lt;section class=&quot;Section&quot;&gt;
	&lt;div class=&quot;_container -light -xl Content&quot;&gt;
        ...
	&lt;/div&gt;
&lt;/section&gt;</code>

                @include('styleguide.content.test')
    		</div>

    		<div class="_container -secondaryGrad -xl -center Content -animated">

<code>&lt;div class=&quot;_container -secondaryGrad -xl -center Content -animated&quot;&gt;
    ...
&lt;/div&gt;</code>

                @include('styleguide.content.test')
    		</div>

    		<div class="_container -light -xl Content">

                @include('styleguide.content.test')

    	        <div class="_fullWidth">
    	        <img src="{{ url() }}/img/img/test-hero/hero_2x1_1.jpg?w=1140&h=285&fit=crop" alt="alt text" class=""/>
    	        </div>

                @include('styleguide.content.test')

    		</div>

    		<div class="_container -tertiary -xl Content">
<code>&lt;div class=&quot;_container -tertiary -xl Content&quot;&gt;
    ...
&lt;/div&gt;</code>
                @include('styleguide.content.test')

    		</div>

        </section>

    	<section class="Section -dark -center -lg">
    		<div class="_container -light -rounded -lg Content">

<code>&lt;section class=&quot;Section -dark -center -lg&quot;&gt;
...
&lt;/section&gt;</code>

                @include('styleguide.content.test')

    		</div>

    		<div class="_container -lg Content">

<code>&lt;div class=&quot;_container -lg Content&quot;&gt;
    ...
&lt;/div&gt;</code>

    		@include('styleguide.content.test')

        </section>
    </article>
@stop
