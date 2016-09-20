<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Users</title>
	<link rel="stylesheet" href="/css/app.css">
	<style type="text/css">
		body {
			padding: 10em;
		}
	</style>
</head>
<body>
	<h1>Users</h1>
	@foreach($users as $user)
		<li>{{ $user->name }}</li>
	@endforeach

	{{ $users->links() }}

</body>
</html>