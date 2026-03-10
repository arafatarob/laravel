<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    @if(Session::has('loginName'))
        <h2>Welcome, Mr/Mst {{Session::get('loginName')}} to the Dashboard</h2>
    @endif
    @if(Session::has('loginEmail'))
        <h2>Email : {{Session::get('loginEmail')}}</h2>
    @endif
    @if(Session::has('loginNumber'))
        <h2>Number : {{Session::get('loginNumber')}}</h2>
    @endif
    @if(Session::has('loginCountry'))
        <h2>Country : {{Session::get('loginCountry')}}</h2>
    @endif
    <p>This is a simple dashboard page. You can extend it with navigation, user info, or other widgets as needed.</p>

    <a href="{{ route('login') }}" class="btn btn-secondary">Logout</a>
</div>
</body>
</html>
