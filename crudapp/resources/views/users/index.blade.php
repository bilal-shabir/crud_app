@foreach ($users as $user)
 <div>
     <p> <label>User Name:</label> {{$user->name}}</p>
     <p><label>User Email: </label> {{$user->email}}</p>
     <a href="/user/{{$user->id}}">Show user</a> <a href="/user/{{$user->id}}/edit">edit</a> <a href="/user/{{$user->id}}/delete">delete user</a>
 </div>
 <hr style= "color: black">
 @endforeach

 <h1><a href="/user/create">Add user</a></h1>