   

<?php $__env->startSection('style'); ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
	<div class="container-fluid full-height">
		<div class="row full-height">
			<div class="col-12 col-xl-6 left-col full-height">
				<div class="container full-height" id="parentCluster">
					<div id="cluster"></div>
					<div class="row full-height justify-content-center align-items-center position-relative">
						<div class="col-12 col-sm-8 center-block" align="center">
							<img src="assets/images/image015702.jpg?v13978417634941" alt="profile" class="rounded-circle profile">
							<h1 class="header-profile mt-3">Axel DENEU</h1>
							<h3 class="header-profile">Développeur Back-End</h3>
						</div>
					</div>
				</div>				
			</div>
			<div class="col-12 col-xl-6 right-col full-height">
				<div class="container full-height">
					<div class="row pt-5">
						<div class="col-12">
							<div class="text-block">
								<h3>Moi, c'est Axel !</h3>
								<p><i>Je suis un jeune développeur Web à la recherche du dépassement de soi.<br/>Je passe le plus clair de mon temps devant mon écran, les mains sur mon clavier, à développer des choses qui n'ont pas, tout le temps, de sens.<br/>Je fais partie de ces personnes qui veulent faire de leur passion, un métier. Et je compte bien y arriver.</i></p>
							</div>
						</div>
					</div>
					<div class="row pt-5">
						<div class="col-12 col-md-6">
							<div class="card c-shadow c-github mx-auto">
								<i class="fa fa-github" aria-hidden="true"></i>
							  	<div class="card-body">
							    	<h5 class="card-title text-center">Github
</h5>
							    	<p class="card-text">Lien vers mon Github où je poste des projets open-source que j'ai pu créer.</p>
							    	<div class="text-center">
							    		<a href="https://github.com/AxelDeneu" class="btn btn-outline-white btn-showmore card-link">En voir plus</a>
							    	</div>
							  	</div>
							</div>
							<div class="card c-shadow c-dribbble mx-auto mt-4">
							  	<div class="card-body">
							    	<h5 class="card-title text-center">Dribbble&nbsp;&nbsp;<i class="fa fa-dribbble" aria-hidden="true"></i>
</h5>
							    	<p class="card-text">Admirez mes créations sur Dribbble (où je poste des ébauches etc). N'hésitez pas à "liker" ce que vous appréciez.</p>
							    	<div class="text-center">
							    		<a href="https://dribbble.com/AxelDeneu" class="btn btn-outline-white btn-showmore card-link">En voir plus</a>
							    	</div>
							  	</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="card c-shadow c-projects mx-auto mt-4 mb-4 mt-xl-0">
							  	<div class="card-body">
							    	<h5 class="card-title text-center">Projets&nbsp;&nbsp;<i class="fa fa-cog" aria-hidden="true"></i>
</h5>
							    	<p class="card-text">Retrouvez à cet endroit tout les projets (en ligne) que j'ai pu réaliser que ce soit pour moi ou pour quelqu'un d'autre.</p>
							    	<div class="text-center">
							    		<a href="/projects" class="btn btn-outline-white btn-showmore card-link">En voir plus</a>
							    	</div>
							  	</div>
							</div>
							<div class="card c-shadow c-cv mx-auto mt-4 mb-4 mt-xl-0">
							  	<div class="card-body">
							    	<h5 class="card-title text-center">CV&nbsp;&nbsp;<i class="fa fa-user" aria-hidden="true"></i>
</h5>
							    	<p class="card-text">Si vous souhaitez en savoir plus sur moi, n'hésitez pas à consulter mon CV.</p>
							    	<div class="text-center">
							    		<a href="/cv" class="btn btn-outline-white btn-showmore card-link">En voir plus</a>
							    	</div>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>