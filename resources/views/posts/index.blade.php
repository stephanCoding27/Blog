@extends('main')

@section('title','| All Posts')

@section('content')
	
	<div class="row">
		<div class="col-md-9">
			<h1 class="index-title">All Posts</h1>
		</div>
		<div class="col-md-3">
			<a href="{{ route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Posts</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
		
	</div> {{-- end of the row --}}

	<div class="row">
		<div class="col-md-12">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Title</th>
			      <th scope="col">Body</th>
			      <th scope="col">Created At:</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($posts as $postNum)
				  	<tr>
				      <th>{{ $postNum->id }}</th>
				      <td>{{ $postNum->title }}</td>
				      <td>{{ substr($postNum->body, 0, 50) }}{{ strlen($postNum->body) > 50 ? "..." : ""}}</td>
				      <td>{{ date('M j, Y H:i', strtotime($postNum->created_at)) }}</td>
				      <td><a href="{{ route('posts.show',$postNum->id) }}" class="btn btn-light btn-sm">View</a> <a href="{{ route('posts.edit', $postNum->id) }}" class="btn btn-light btn-sm">Edit</a></td>
				    </tr>
			  	@endforeach
			  </tbody>
			</table> {{-- end of table --}}

		</div>
		
	</div>



@endsection