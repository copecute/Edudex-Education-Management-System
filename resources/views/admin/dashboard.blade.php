@if(Auth::guard('admin')->check())
    <p>Hello, {{ Auth::guard('admin')->user()->MaCBTS }}!</p>
    <form action="{{ route('admin.logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
    <p>Welcome! Please <a href="{{ route('admin.login') }}">login</a></p>
@endif
{{-- 
@if(Auth::guard('admin')->check())
    <p>đã đăng nhập</p>
@else
    <p>chưa đăng nhập</p>
@endif --}}