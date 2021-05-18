<div>
    <form action="/user/{{$user->id}}" Method="POST" >
        @csrf
        @method('PUT')
        
        <div>
            <label>Name</label>
            <input type="text" name="user_name" value="{{$user->name}}">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="user_email" value="{{$user->email}}">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="user_pass" value="{{$user->password}}">
        </div>
        <button type="submit">submit</button>
    </form>
</div>