@component('admin.layouts.default')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    	<h1 class="h2">{{ $title }} - <small>{{ $description }}</small></h1>
  	</div>

    {{ $slot }}
@endcomponent