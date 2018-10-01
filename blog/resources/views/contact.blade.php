@extends('template')
@section('title','Gallery')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
   <main>
		<div class="contact-form">
			<h3>Contact Me</h3>
			<form action="" method="post">
				<label>
					<div>
						Email
					</div>
					<input id="user-email" type="email" name="user-email" value="" placeholder="username@example.com" required="required">
				</label>
				<label>
					<div>
						Subject
					</div>
					<input id="subject" type="text" name="subject" value="" placeholder="A short description about the matter" required="required">
				</label>
				<label>
					<div>
						Message
					</div>
					<textarea id="message" name="message" required="required"></textarea>
				</label>
				<div>
					<input id="submit-btn" type="submit" name="submit" value="Submit">		
				</div>
				
			</form>	
		</div>

		<div class="social-media">
			<h3>Get Connected</h3>

			<a href="https://facebook.com"><i class="fab fa-facebook"></i>Facebook</a>

			<a href="https://twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
			
			<a href="https://linkedin.com"><i class="fab fa-linkedin"></i>LinkedIn</a>
			
			<a href="https://github.com"><i class="fab fa-github"></i>Github</a>
			
			<a href="https://stackoverflow.com"><i class="fab fa-stack-overflow"></i>StackOverflow</a>
		</div>
	</main>
@endsection

@section('footer')
	@include('partials.footer')
@endsection	
