<!doctype html>
<html ng-app="draft">
<head>
<title>optix-draft</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<div class="main" ng-controller="draftCtrl">

		<!-- frames block -->
		<div class="frames">
			<?php include("html/frames.php");  ?>
		</div>

		<!-- optix block -->
		<div class="optica">

			<div class="prescription-block">
				<?php include("html/prescription.php"); ?>
			</div>

			<!-- lens type block -->
			<div class="lenstype-block">
				<info class="compare-wrap"><div class="compare"><i class="fa fa-question"></i></div></info>

				<div class="lens-section-title">
					<h4>{{ typeTitle }}</h4>
					{{ typeDescription }}
				</div>

				<div ng-repeat="lensType in lensTypes" class="lenstype-col">
					<recom class="recommended">
						<span class="why-text">{{ lensType.why }}</span>
					</recom>
					<div class="lenstype-title">
						<name>{{ lensType.title }}</name>
						<span>{{ lensType.price }}</span>
					</div>
					<img class="lens-img" ng-src="img/type/{{ lensType.src }}">
				</div>
			</div>

			<!-- lens material block -->
			<div class="lensmaterial-block">
				<info class="compare-wrap"><div class="compare"><i class="fa fa-question"></i></div></info>
	
				<div class="lens-section-title">
					<h4>{{ materialTitle }}</h4>
					{{ materialDescription }}
				</div>
				
				<div ng-repeat="lensMat in lensMaterials" class="lensmaterial-col">
					<recom class="recommended">
						<span class="why-text">{{ lensMat.why }}</span>
					</recom>
					<div class="lensmaterial-title">
						<name>{{ lensMat.title }}</name>
						<span>{{ lensMat.price }}</span>
					</div>
					<img class="lens-img" ng-src="img/material/{{ lensMat.src }}">
				</div>
			</div>

			<!-- lens addons block -->
			<div class="lensaddons-block">

				<!-- reflaction block -->
				<div class="antireflaction-block">
					<info class="compare-wrap"><div class="compare"><i class="fa fa-question"></i></div></info>
	
					<div class="lens-section-title">
						<h4>{{ reflectionTitle }}</h4>
						{{ reflectionDescription }}
					</div>
					
					<div class="lensreflaction-logo">
						<img class="lens-img" ng-src="{{ reflectionLogo }}">
					</div>

					<div ng-repeat="reflection in lensReflections" class="lensreflaction-col">
						<recom class="recommended">
							<span class="why-text">{{ reflection.why }}</span>
						</recom>
						<div class="lensreflaction-title">
							<name>{{ reflection.title }}</name>
							<span>{{ reflection.price }}</span>
						</div>
					</div>	
				</div>

				<!-- transition block -->
				<div class="transition-block">
					<info class="compare-wrap"><div class="compare"><i class="fa fa-question"></i></div></info>
					<div class="lens-section-title">
						<h4>{{ transitionTitle }}</h4>
						{{ transitionDescription }}
					</div>
					<div class="lenstransition-logo">
						<img class="lens-img" ng-src="{{ transitionLogo }}">
					</div>

					<div ng-repeat="transition in lensTransitions" class="lenstransition-col">
						<recom class="recommended">
							<span class="why-text">{{ transition.why }}</span>
						</recom>
						<div class="lenstransition-title">
							<name>{{ transition.title }}</name>
							<span>{{ transition.price }}</span>
						</div>
					</div>
				</div>

				<!-- add to cart -->
				<div class="addtocart-block">
					<div class="lens-button btn-to-cart">Add to cart</div>
				</div>

			</div> 

		</div>

		<!-- cart block -->
		<div class="cart-wrap">
			<?php include("html/cart.php"); ?>
		</div>

		<div class="dark-wrapper">
			<div class="dark"></div>
			<div class="imagination">
				<img src="img/compared/reflection.jpg">
			</div>
		</div>

		<div class="description-block">
			<div class="description"></div>
		</div>
	</div>

<!-- scripts -->
<script src="js/angular.min.js"></script>
<script src="js/app.js"></script>
<script src="js/events.js"></script>
</body>
</html>
