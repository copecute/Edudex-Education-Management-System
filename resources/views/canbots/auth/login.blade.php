
<form action="{{ url('/login') }}" method="post">
    @csrf
    <input type="text" name="MaCBTS" placeholder="MaCBTS" required><br>
    <input type="password" name="password" placeholder="password" required>
    <button type="submit">Login</button>
</form>
@if($errors->has('login'))
    <p>{{ $errors->first('login') }}</p>
@endif
