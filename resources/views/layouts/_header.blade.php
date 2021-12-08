<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-2">
  <a class="navbar-brand" href="{{ route('home') }}"> Weibo App</a>
  <div class="collapse navbar-collapse d-flex flex-row-reverse">
    <ul class="navbar-nav  ">
      @if (Auth::check())
        <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">用户列表</a></li>
        <li class="nav-item ">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('users.show', Auth::user()) }}">个人中心</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('users.edit', Auth::user()) }}">编辑资料</a>
        </li>
        <li class="nav-item ">
          <form action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
          </form>
        </li>
      @else
        <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
        <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a></li>
      @endif
    </ul>
  </div>
</nav>
