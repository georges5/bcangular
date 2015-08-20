angular.module('app', ['ngRoute', 'ngSanitize'])
.config(function($routeProvider, $locationProvider) {
	$locationProvider.html5Mode(true);

	$routeProvider
	.when('/', {
		templateUrl: myLocalized.partials + 'main.html',
		controller: 'Main'
	})
	.when('/:slug', {
		templateUrl: myLocalized.partials + 'content.html',
		controller: 'Content'
	});
})
.controller('Main', function($scope, $http, $routeParams) {
	$http.get('wp-json/posts/').success(function(res){
		$scope.posts = res;
	});
})
//Content controller
.controller('Content', ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams) {
	$http.get('wp-json/posts/?filter[name]=' + $routeParams.slug).success(function(res){
		$scope.post = res[0];
	});
}]);




