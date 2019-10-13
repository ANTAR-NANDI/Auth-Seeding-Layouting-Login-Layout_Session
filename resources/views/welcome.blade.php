<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Dashboard</h2>
   @if(Session::has('userid') && Session::has('userrole') && Session::get('userrole')=='student')
    <ul>
        <li><a href="{{URL::to('view-ct')}}">View CT Marks</a></li>
        <li><a href="{{ URL::to('view-routine') }}">View Class Routine</a></li>

    </ul>
   @else
    <ul>
        <li><a href="{{ URL::to('create_ct') }}">Create CT</a></li>
        <li><a href="{{ URL::to('enter_ct') }}">Enter CT Marks</a></li>
        <li><a href="{{ URL::to('logout') }}">Logout</li>
    </ul>
   @endif
    
</body>
</html>