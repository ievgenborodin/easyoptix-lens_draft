angular.module('draft', [])

.controller('draftCtrl', function($scope) {

$scope.typeTitle = 'Lens Type';
$scope.typeDescription = 'Choose the lens type';
$scope.lensTypes = [
	{
		title: 'Single vision',
		price: '39.00',
		src: 'SingleVision.png',
		why: "It will be enough for your vision and it will save you money"
	},
	{
		title: 'Bifocals',
		price: '69.00',
		src: 'Bifocal.png',
		why: "Because you have multiple problems"
	},
	{
		title: 'Progressive',
		price: '99.00',
		src: 'Progressives.png',
		why: "Because of multiple problems. It's more expensive than Bifocal, but it looks better"
	}
];

$scope.materialTitle = 'Lens Material';
$scope.materialDescription = 'Choose the material for your lens';
$scope.lensMaterials = [
	{
		title: 'Plastic (CR-39)',
		price: '39.00',
		src: 'Plastic.png',
		why: "Has something to do with index 0"
	},
	{
		title: 'Thin (Polycarbonate)',
		price: '69.00',
		src: 'Polycarbonate.png',
		why: "Has something to do with index 1"
	},
	{
		title: 'Thinner (hindex 1.67)',
		price: '99.00',
		src: 'ThinnerHiIndex167.png',
		why: "Has something to do with index 2"
	},
	{
		title: 'Thinnest (hindex 1.74)',
		price: '189.00',
		src: 'ThinnestHiIndex174.png',
		why: "Has something to do with index 3"
	},
	{
		title: 'Thinnest Cryzal (hindex 1.74)',
		price: '229.00',
		src: 'ThinnestHiIndex174.png',
		why: "The thinnest."
	}
];

$scope.transitionTitle = 'Lens Transition';
$scope.transitionDescription = 'Add transition or polarization to lens';
$scope.transitionLogo = 'img/adds/TransitionsMen.jpg';
$scope.lensTransitions = [
	{
		title: 'None',
		price: '0',
		why: "Has something to do with index 0"
	},
	{
		title: 'Grey',
		price: '69.00',
		src: 'Polycarbonate.png',
		why: "Has something to do with index 1"
	},
	{
		title: 'Brown',
		price: '69.00',
		why: "Has something to do with index 2"
	},
	{
		title: 'Polarized',
		price: '99.00',
		why: "Has something to do with index 3"
	}
];

$scope.reflectionTitle = 'Lens Anti-Reflaction';
$scope.reflectionDescription = 'Add anti-reflaction to lens';
$scope.reflectionLogo = 'img/adds/AntiReflective.jpg';
$scope.lensReflections = [
	{
		title: 'None',
		price: '0',
		why: "Has something to do with index 0"
	},
	{
		title: 'Generic',
		price: '39.00',
		src: 'Polycarbonate.png',
		why: "Has something to do with index 1"
	},
	{
		title: 'Premium',
		price: '69.00',
		why: "Has something to do with index 2"
	}
];
    
});