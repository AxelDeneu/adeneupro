@extends('layouts.app')

@section('style')
<link href="/assets/css/short.css" rel="stylesheet" type="text/css" />
@endsection

@section('body')
<div id="wrapper">
</div>
<div class="container-fluid">
	<div class="row align-items-center justify-content-center" id="globalRow">
		<div class="col-sm-6">
			<div class="card border-danger">
				<div class="card-header bg-danger text-white">
					<h3>URL Shortner <a href="" data-toggle="modal" data-target="#helpModal"><i class="fa fa-info-circle bounce-effect"></i></a></h3>
				</div>
		 		<div class="card-body text-danger">
					@if(isset($info))
						@component('alert')
							@slot('title')
								{{ $info['title'] }}
							@endslot
							@slot('alertType')
								{{ $info['alertType'] }}
							@endslot
						{!! $info['text'] !!}
						@endcomponent
					@endif
					<div class="container-fluid">
						<form action="/short" method="POST">
							<div class="form-group row align-items-center justify-content-center">
								<div class="col-12">
									<div class="input-group mb-4">
										<div class="input-group-addon bg-danger text-white"><i class="fa fa-link"></i></div>
										<input name="urlToShort" id="url" class="form-control form-control-lg" type="text" placeholder="URL"/>
									</div>
								</div>
								<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
								<div class="col-12" align="center">
									<button type="submit" class="btn btn-outline-danger btn-lg">Raccourcir !</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="card-footer">
					<small class="text-muted">Aucune donnée n'est collectée via ce formulaire ou via l'accès à une URL raccourcie.<br/>Pour toute plainte ou recommandation, merci d'adresser vos mails à : <a href="mailto:contact@adeneu.pro" target="_new" class="text-danger">contact@adeneu.pro</a></small>
				</div>
			</div>
		</div>
		<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
      				<div class="modal-header bg-danger text-white">
        				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        				<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          					<span aria-hidden="true">&times;</span>
        				</button>
      				</div>
      				<div class="modal-body">
        				<h3>Je vais faire court.</h3>
						<p>Voici mon raccourcisseur d'URL. Pas de récupération de données. Pas de tracking. Juste un gros lien qui se transforme en petit lien.</p>
      				</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Compris !</button>
      				</div>
    			</div>
  			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script>
	particlesJS.load('wrapper', '/assets/js/particlesjs-config.json', function() {
     	console.log('callback - particles.js config loaded');
   	});
</script>
@endsection
