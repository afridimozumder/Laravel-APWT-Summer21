  
<html>
    <head></head>
    <body>
        <h1>  Welcome home!<br> {{$name}}</h1>
        <h3> ID : {{$id}}</h3>
        
        <a href='{{Route('user.create')}}'> Create User </a> |
        <a href='{{Route('user.userlist')}}'> User list </a> |
        <a href='{{Route('logout')}}'> LogOut </a>
    </body>
</html>