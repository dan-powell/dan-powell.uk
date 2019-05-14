@if(isset($items) && count($items))
    <div class="ProjectList">
    	@foreach($items as $key => $item)
    	    <div class="ProjectList-item">
                @include('main.project.excerpt', ['item' => $item, 'slug' => $key])
    	    </div>
    	@endforeach
    </div>
@endif
