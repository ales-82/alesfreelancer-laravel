@extends('template')
@section('titulo','Contacto | AlesFreelancer')
<style>
	.error{			
		color:red;			
		font-size: 1em;
		padding:10px 5px;
	}
</style>
@section('header')
	@include('partials.header')
@endsection
@section('content')
<div id="fh5co-contact">
		<div class="container">
			<div class="row contact">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">						
						<h3>Contacto Información</h3>
						<ul>
							<!--<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li><--><br>
							<li class="phone"><a href="#">+54 9 11 5038-5604</a></li>
							<li class="email"><a href="mailto:ales.escobar@hotmail.com">ales.escobar@hotmail.com</a></li>
							<li class="url"><a href="AlesFreelancer.online">http://alesfreelancer.herokuapp.com/</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 animate-box">							
					@if(session('success'))
						  <div class="alert alert-success">
        						{{ session('success') }}
    					  </div>
					@endif
					@if(session('unsuccessful'))
						<div class="alert alert-danger">
        						{{ session('unsuccessful') }}
    					</div>
					@endif
					<h3>Ingrese sus Datos</h3>										
					<form action="{{ route('enviar') }}" method="post">	
						@csrf
						<div class="row">
							<div class="col-md-6 form-group">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" name="nombre" class="@error('nombre') is-invalid @enderror form-control" placeholder="Su nombre" value="{{ old('nombre') }}" >
								@error('nombre')
									<span class="error">{{ $message }}</span>
								@enderror		
								<!--<span class="error">* Campo requerido</span>-->
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" name="apellido" class="@error('apellido') is-invalid @enderror form-control" placeholder="Su apellido" value="{{ old('apellido') }}" >
								@error('apellido')
									<span class="error">{{ $message }}</span>
								@enderror
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" name="email" class="@error('email') is-invalid @enderror form-control" placeholder="Su correo electrónico" value="{{ old('email') }}" >	
								@error('email')
									<span class="error">{{ $message }}</span>
								@enderror
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" name="asunto" class="@error('asunto') is-invalid @enderror form-control" placeholder="Ingreso el asunto" value="" >
								@error('asunto')
									<span class="error">{{ $message }}</span>
								@enderror
							</div>
						</div>	
						<div class="row form-group">
							<div class="col-md-12">	
								<textarea name="message" id="message" name="message" cols="30" rows="5" class="@error('message') is-invalid @enderror form-control" placeholder="Comente su mensaje">{{ old('message') }}</textarea>
								<!-- <label for="message">Message</label> -->
								@error('message')
									<span class="error">{{ $message }}</span>
								@enderror
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar" name="submit" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
@endsection
@section('footer')
	@include('partials.footer')
@endsection

