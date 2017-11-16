<!doctype html>

<!-- Author: Susie Kuo (susan_kuo@hms.harvard.edu) -->
<!-- Date created: 11/14/17 --> 
<!-- Version: 1.0 --> 
<!-- Purpose: index.php (1) displays a table of current records in the mysql table; (2) permits users to input a new record, modify an old record, or delete an old record.  -->

<html>
<head>
<meta charset="UTF-8"> 
<meta name="robots" content="noindex">



<title>InfoSAGE</title>  

<!-- Stylesheets here affect the buttons on this page as well as the Text Angular HTML editor where users input content -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300">
<link rel="stylesheet" href="http://textangular.com/dist/textAngular.css" type="text/css">

<style>
h1 small {
    font-size: 60%;
}
textarea.ta-bind {
    width: 100%;
}
</style>

<!-- Scripts here support AngularJS and the Text Angular HTML editor -->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
<script src='http://textangular.com/dist/textAngular-rangy.min.js'></script>  
<script src='http://textangular.com/dist/textAngular-sanitize.min.js'></script><script src='http://textangular.com/dist/textAngular.min.js'></script>

</head>  
<body>  
<div class="col-md-12">
	<h3 align="center">InfoSAGE | Provider Content</h3>
	<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">
		<!-- Table for users to input their data to be inserted into the mysql table. -->
		<div class="col-md-6">
			<label>Type</label>
			<select ng-model="type" ng-options="x for x in types">
			</select>
			<br/>
			<label>Title</label>
			<input type="text" name="title" ng-model="title" class="form-control">
			<br/>
			<label>Author's First Name</label>
			<input type="text" name="firstname" ng-model="firstname" class="form-control">
			<br/>
			<label>Author's Last Name</label>
			<input type="text" name="lastname" ng-model="lastname" class="form-control">
			<br/>
			<label>Author's Institution</label>
			<input type="text" name="institution" ng-model="institution" class="form-control">
			<br/>
			<label>Content</label>
			<text-angular name="content" ng-model="content"></text-angular>
			<br/>
			<input type="hidden" ng-model="id">
			<input type="submit" name="insert" class="btn btn-primary" ng-click="insert()" value="{{btnName}}">
		</div>
		<!-- Table for users to view data currently in the mysql table. -->
		<div class="col-md-6">
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Type</th>
					<th>Title</th>
					<th>Author's First Name</th>
					<th>Author's Last Name</th>
					<th>Institution</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr ng-repeat="x in ids">
					<td>{{x.id}}</td>
					<td>{{x.type}}</td>
					<td>{{x.title}}</td>
					<td>{{x.firstname}}</td>
					<td>{{x.lastname}}</td>
					<td>{{x.institution}}</td>
					<td>
						<button class="btn btn-success btn-xs" ng-click="update_data(x.id, x.type, x.title, x.firstname, x.lastname, x.institution, x.content)">
							<span class="glyphicon glyphicon-edit"></span> Edit
						</button>
					</td>
					<td>
						<button class="btn btn-danger btn-xs" ng-click="delete_data(x.id )">
							<span class="glyphicon glyphicon-trash"></span> Delete
						</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<!-- $scope functions -->
<!-- Insert() alerts if fields are not filled, then passes on data to insert.php to update the mysql table. --> 
<!-- Show_data() calls display.php which populates a table showing current mysql data. --> 
<!-- Update_data() reassigns newly input data to corrensponding $scope.variables. --> 
<!-- Delete() calls delete.php to delete a row from the mysql table, passing the record id. -->

<script>  
var app = angular.module("sa_app", ['textAngular']);
app.controller("controller", function controller($scope, $http, textAngularManager) {
	$scope.types = ["FAQ", "Article", "Blog"];
	$scope.btnName = "Insert";
	$scope.insert = function() {
		if ($scope.type == null) {
			alert("Enter Type");
		} else if ($scope.title == null) {
			alert("Enter Title");
		} else if ($scope.firstname == null) {
			alert("Enter Author's First Name");
		} else if ($scope.lastname == null) {
			alert("Enter Author's Last Name");
		} else if ($scope.institution == null) {
			alert("Enter Author's Institution");
		} else if ($scope.content == null) {
			alert("Enter Content");
		} else {
			$http.post(
				"insert.php", {
					'type': $scope.type,
					'title': $scope.title,
					'firstname': $scope.firstname,
					'lastname': $scope.lastname,
					'institution': $scope.institution,
					'content': $scope.content,
					'btnName': $scope.btnName,
					'id': $scope.id
				}
			).success(function(data) {
				alert(data);
				$scope.type = null;
				$scope.title = null;
				$scope.firstname = null;
				$scope.lastname = null;
				$scope.institution = null;
				$scope.content = null;
				$scope.btnName = "Insert";
				$scope.show_data();
			});
		}
	}
	$scope.show_data = function() {
		$http.get("display.php")
			.success(function(data) {
				$scope.ids = data;
			});
	}
	$scope.update_data = function(id, type, title, firstname, lastname, institution, content) {
		$scope.id = id;
		$scope.type = type;
		$scope.title = title;
		$scope.firstname = firstname;
		$scope.lastname = lastname;
		$scope.institution = institution;
		$scope.content = content;
		$scope.btnName = "Update";
	}
	$scope.delete_data = function(id) {
		if (confirm("Are you sure you want to delete?")) {
		$http.post("delete.php", {
			'id': id
		})
		.success(function(data) {
			alert(data);
			$scope.show_data();
		});
		} else {
			return false;
		}
	}
});
</script>  
</body>  
</html>  