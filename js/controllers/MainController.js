app.controller('MainController', ['$scope', function($scope) {
	$scope.titre= "salut ceci est mon blog";

	$scope.articles= [
		{
			title: "Tout sur node",
			content:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
			author: "erwan"
		},
		{
			title: "Tout sur angular",
			content:"ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
			author: "cheunn"
		}

	]
}]);