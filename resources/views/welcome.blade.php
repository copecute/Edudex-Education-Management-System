@if(Auth::guard('canbots')->check())
    <p>Hello, {{ Auth::guard('canbots')->user()->MaCBTS }}!</p>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
    <p>Welcome! Please <a href="{{ route('login') }}">login</a></p>
@endif

{{-- @if(Auth::guard('canbots')->check())
    <p>đã đăng nhập</p>
@else
    <p>chưa đăng nhập</p>
@endif --}}