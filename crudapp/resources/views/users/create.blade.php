<div>
    <form action="/user" Method="POST" >
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="user_name" value="">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="user_email" value="">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="user_pass" value="">
        </div>
        <button type="submit">submit</button>
    </form>
</div>