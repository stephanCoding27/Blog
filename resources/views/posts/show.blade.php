@extends('main')

@section('title','| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1 class="posts-title">{{ $post->title }}</h1>

			<p class="lead-show" >{{ $post->body }} </p>
		</div> {{-- 8 col --}}

		<div class="col-md-4">
			<div class="card bg-light mb-3 card-show " >
				<dl class="dl-horizontal"> 
					<dt>Created At:</dt>
					<dd>{{date('M j, Y H:i',strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{date('M j, Y H:i',strtotime($post->updated_at)) }}</dd>
				</dl>
				
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit','Edit', array($post->id), array('class' => 'btn btn-primary btn-block btn-1-show')) !!}
					</div>
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block btn-2-show')) !!}
					</div>
				</div> {{-- row --}}

			</div> {{-- well --}}
		</div> {{-- 4 col --}}
	</div>
	<hr>

@endsection