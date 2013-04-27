northWind.controller('productListController', function($scope, $routeParams, sharedCategories) {
	/*getting the categories from shared object*/
	sharedCategories.getCategories().then(function(categories) {
		$scope.categories = categories;
	});
});

northWind.controller('categoryProductController', function($scope, $routeParams, $http, $rootScope, sharedCategories) {
	/*getting the categories from shared object*/
	sharedCategories.getCategories().then(function(categories) {
		$scope.categories = categories;
	});

	/*getting products based on category selected*/
	$scope.products = $http.get(base_url + 'products/products_ajax_by_cat/' + $routeParams.id).then(function(response) {
		$rootScope.$broadcast('getProductByCatList',$scope.products);
		return response.data;
	});
});