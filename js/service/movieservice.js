var movieservice = angular.module("movieservice",["ngResource"]);
movieservice.constant("baseUrl","/test/");
movieservice.$inject = ["$resource", "baseUrl"];
movieservice.factory("movieFactory", function(baseUrl, $resource){
	return $resource(baseUrl+"Model/movie.json",{},{});
})