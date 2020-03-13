<header>
<nav class="flex items-center justify-between flex-wrap bg-blue-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <span class="font-semibold text-xl tracking-tight">films</span>
  </div>
  <div class="block lg:hidden">
    <button class="header_btn">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
    </div>
    <div>

    @if(Auth::check())
      <a href="#">自分の投稿一覧へ飛ぶ</a>
      {!! link_to_route('logout.get', 'Logout') !!}
    @else
      {!! link_to_route('signup.get', 'signup', [], ['class'=> 'block mt-4 lg:inline-block lg:mt-0 text-white hover:text-teal-200']) !!}
      {!! link_to_route('login', 'login',[],['class'=> 'inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0"']) !!}

    @endif
    </div>
  </div>
</nav>
</header>