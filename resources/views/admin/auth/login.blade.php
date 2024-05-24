
<form action="{{ route('admin.login') }}" method="post">
    @csrf
    <input type="text" name="UserName" placeholder="username" required><br>
    <input type="Password" name="Password" placeholder="password" required>
    <button type="submit">Login</button>
</form>
@if($errors->has('login'))
    <p>{{ $errors->first('login') }}</p>
@endif
