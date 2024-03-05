<form action="/post" method="post">
    @csrf

    <div>
        <p>Name</p>
        <input type="text" name="name" >
    </div>

    <div>
        <p>Username</p>
        <input type="text" name="username" >
    </div>

    <div>
        <p>Password</p>
        <input type="password" name="password" >
    </div>
    <br>

    <div>
        <button type="submit">Register</button>
    </div>
</form>