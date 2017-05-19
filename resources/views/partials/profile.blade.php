@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Perfil</div>
					<div class="panel-body" style="">
						<div class="row" style="margin-bottom: 20px">
							<div class="col-md-5 " style="text-align: center; margin:0 auto;">
								<img src="https://placeimg.com/200/200/people" alt="profile_image" style="border-radius:20%; ">
							</div>
							<div class="col-md-7">
								<h4>{{$user->name}}</h4>
								<div class="info">
									<hr>
									<ul class="perfil" style="list-style: none; margin:0; padding:0;">
										<li>
											<i class="glyphicon glyphicon-envelope"></i>Email: <strong>{{$user->email}}</strong>
										</li>
										@if(isset($user->url))
											<li>
												<i class="glyphicon glyphicon-globe"></i><a href="{{$user->url}}">URL:{{$user->url}}</a>
											</li>
										@endif

										@if(isset($user->phone))
											<li>
												<i class="glyphicon glyphicon-envelope"></i>Telemóvel: <strong>{{$user->phone}}</strong>
											</li>
										@endif

										@if(isset($user->department_id))
											<li>
												<i class="glyphicon glyphicon-minus"></i>Departamento: <strong>{{$user->department_id}}</strong>
											</li>
										@endif

										@if(isset($user->presentation))
											<li>
												<i class="glyphicon glyphicon-minus"></i>Apresentação: <br><strong>{{$user->presentation}}</strong>
											</li>
										@endif
									</ul>
								</div>
							</div>
						</div>
						<hr>
						<div class="row" style="text-align: center">
							<form id="logout-form" action="{{ route('edit_user',Auth::user()) }}" method="GET" >
								{{ csrf_field() }}
								<button class="btn btn-primary" type="submit">Editar</button>
						</div>

						</form>
					</div>




				</div>

			</div>
		</div>
	</div>
@endsection
