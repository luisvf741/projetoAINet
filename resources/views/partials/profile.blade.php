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
	                		<h4>Luís Valdez</h4>
	                		<div class="info">
		                        <small><cite title="Leiria, PT">Leiria, PT <i class="glyphicon glyphicon-map-marker">
		                        </i></cite></small>
	                        	<ul style="list-style: none; margin:0; padding:0;">
	                        		<li>
		                            <i class="glyphicon glyphicon-envelope"></i>l@l.com
		                            </li>
		                            <li>
		                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.valedy.com">www.valedy.com</a>
		                            </li>
		                            <li>
		                            <i class="glyphicon glyphicon-gift"></i>Julho 17, 1996
		                            </li>
		                            <li>
		                            <i class="glyphicon glyphicon-envelope"></i>915956736
		                            </li>
		                            <li>
	                            </ul>
                            </div>
	                	</div> 
	            	</div>
	            	<hr>
	            	<div class="row" style="text-align: center">
	                	<form id="logout-form" action="{{ route('edit') }}" method="GET" >
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
