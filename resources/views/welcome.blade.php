@extends('layouts.app2')
@section('content')

<!-- Header -->
<header id="head">
		<div class="container">
			<div class="row">
				
				<h1 class="lead">Mental health, Campus events, Confidentiality</h1>
				<p class="tagline">Cette application est conçue pour aider les étudiants à prendre soin de leur santé globale en leur fournissant des informations et des ressources pertinentes et en leur permettant de suivre les événements sur le campus en temps réel.</p>
				<p><a class="btn btn-default btn-lg" role="button">MORE INFO</a> <a class="btn btn-action btn-lg" role="button">VISIT NOW</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<nav class="text-black text-lg hidden lg:flex items-center">
</nav>
		<h2 class="thin">Welcome to our health and wellness app for students</h2>
		<p class="text-muted">
		Whether you're looking to improve your physical health, manage stress, or access support for mental health,
our application has everything you need to stay healthy and thrive during your time at university
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Reasons to use this template</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 ">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Support for mental health</h4></div>
					<div class="h-body text-center">
						<p>The app provides resources and support for mental health, including stress management and counseling services, which can be particularly important for students facing the pressures of academic life.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Real-time updates</h4></div>
					<div class="h-body text-center">
						<p>Students can stay up-to-date with the latest campus events related to health and wellness, such as yoga sessions and support groups, and easily register for them directly from the app.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Improved overall health</h4></div>
					<div class="h-body text-center">
						<p>By providing easy access to health resources and information, the app can help students make healthier choices and improve their overall health and well-being.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Author's support</h4></div>
					<div class="h-body text-center">
						<p>Overall, this application can be a useful tool for students looking to take care of their health and well-being during their time at university.</p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Frequently Asked Questions</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Are the health information provided on the application reliable?</h3>
				<p>The health information provided in the application will be verified and provided by qualified healthcare professionals. However, it is important to remember that the information
							provided does not replace the advice of a healthcare professional.</p>
			</div>
			<div class="col-sm-6">
				<h3>How can I access mental health resources through the application?</h3>
				<p>You can access mental health resources in the application by searching for articles or guides on stress management, meditation, anxiety management, and by consulting information on support groups and counseling services available on campus.</p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>How can I register for campus events?</h3>
				<p>You will be able to register for campus events directly from the application by following the instructions provided for each event.</p>
			</div>
			<div class="col-sm-6">
				<h3>Can other students see my health data or personal information?</h3>
				<p>No, health data and personal information are strictly confidential and only accessible to you and qualified healthcare professionals who provide counseling services and mental health resources. Your datawill not be shared with other students without your prior consent.</p>
			</div>
			<br><br><br><br><br><br>
		<div class="jumbotron top-space">
			<h4>Our application is designed to help you take care of your overall health and well-being by providing you with reliable health information and resources, as well as real-time updates on campus events related to health and wellness. With our app, you can easily access personalized recommendations, register for campus events, and find information on mental health resources and counseling services available on campus. Our app is designed to keep your health data and personal information confidential, and our team of qualified healthcare professionals ensures that the information and resources provided are reliable and accurate. </h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>

@endsection