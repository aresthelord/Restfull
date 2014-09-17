app.controller('WelcomeCtrl',function ($location,$scope,$http) {
	$scope.user ={};
	
    $scope.authenticate = function() {
        $http({
            method: 'POST',
            url: "domain/login/",
            headers: { 'Content-Type': undefined },
            data: {user:$scope.user }
        }).success(function(data) {
		          
	            if (!data.success) {
		            	// if not successful, bind errors to error variables
		                $scope.message = data.message
						
		                
			} else {
		            	// if successful, bind success message to message
		                $scope.message = data.message + " Please Wait Redirecting " ;
				$location.path('/admin');
				
		            }
		        })
			.error(function (data, status, headers, config) {
            alert("failed!");
        });
			};
                
        
   
	 });
	