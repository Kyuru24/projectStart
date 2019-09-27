@extends('layouts.app')
@section('content')
<div class="container">
    <div> <h1>Dashboard</h1> 
    	<div>
    		@if(count($posts) > 0)
    			@foreach($posts as $posts)
    				<div class="well">
    					<h3>{{$posts->fname}}</h3>
    				</div>
    			@endforeach
    		@else
    			<p>no posts</p>
			@endelse    	
    	</div>
    </div>

</div>
@endsection