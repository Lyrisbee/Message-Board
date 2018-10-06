@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			@foreach ($post as $p)
			<div class="card mb-3">
				<div class="card-body">
					<h4 class="card-title">{{$p->users->name}}</h4>
					<h6 class="text-muted" style="font-size: 10px;" title="<?php echo $p->updated_at;?>">
						<?php echo explode(' ', $p->updated_at)[1];?>
					</h6>
					<div class="card-text p-5">
						<h5>{{$p->content}}</h5>
					</div>
				</div>
			</div> 
			@endforeach
			<div class="">
				<form action="/home" method="post">
					@csrf
					<div class="form-group">
						<textarea class="form-control" name="content" id="content" cols="100" rows="10" placeholder="Leave your message" style="resize:none;"></textarea>
					</div>
					<div class="form-group">
						<button class="form-control btn btn-primary" type="submit"> Submit </button>
					</div>
				</form>                
			</div>
		</div>
	</div>
</div>
@endsection
