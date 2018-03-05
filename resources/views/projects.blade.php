@extends('layouts.app')

@section('style')
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
@endsection

@section('body')
<div class="full-height" id="projects">
	<!--<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-12">
				<nav class="navbar navbar-light bg-light back-to-home">
					<a href="/"><i class="fa fa-arrow-left my-auto ml-3" aria-hidden="true"></i><span class="back-text ml-3">&nbsp;Retour</span></a>
				</nav>
			</div>
		</div>
	</div>-->
	<div class="container-fluid p-0 h-100">
		<div class="row no-gutters h-100">
			<div class="col-12 h-25" id="projects">
				<div class="projects-tile w-100 h-100">
					<h2>URL Shortner</h2>
					<h5>Un raccourcisseur d'URL sans recueil de données.</h5>
					<a class="btn btn-outline-white btn-showmore">En voir plus</a>
				</div>
			</div>
			<div class="col-12 h-25">
				<div class="empty-tile w-100 h-100"></div>
			</div>
			<div class="col-12 h-25">
				<div class="empty-tile w-100 h-100"></div>
			</div>
			<div class="col-12 h-25">
				<div class="empty-tile w-100 h-100"></div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script>
	$("#projects").click(function() {
		window.location = '/short';
	});
</script>
@endsection
