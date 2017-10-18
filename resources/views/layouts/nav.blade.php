<nav class="w3-bar w3-border-bottom w3-border-light-gray">
    <div class="w3-container">

        {{-- App Name --}}
        <a class="w3-bar-item" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        {{-- Toggle Nav - Small Screens --}}
        <span class="w3-bar-item w3-right w3-hide-medium w3-hide-large w3-hover-text-blue" onclick="toggleNav()" style="cursor:pointer">&#9776</span>

        {{-- MEDIUM and LARGE SCREENS --}}

        {{-- Links --}}
        @auth ()
            <a href="/posts" class="w3-bar-item w3-hide-small">Blog</a>
            <a href="/posts/create" class="w3-bar-item w3-hide-small">Post</a>
        @endauth

        {{-- Auth Links --}}
        @guest
          <a class="w3-bar-item w3-right w3-hide-small" href="{{ route('register') }}">Register</a>
          <a class="w3-bar-item w3-right w3-hide-small" href="{{ route('login' )}}">Login</a>

          @else
            {{-- Toggle Logout --}}
            <a class="w3-bar-item w3-right w3-hide-small" href="#" onclick="toggleLogout()">
              {{ Auth::user()->name }}
              <span>&#9660</span>
            </a>
            <br />
              <ul class="w3-hide w3-animate-right" style="border: 1px solid #f1f1f1;" id="logout">
                  <li class="w3-right-align w3-margin-right">
                      {{-- Submit Logout --}}
                      <a class="w3-hide-small" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>
                      {{-- Hidden Logout Form --}}
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
        @endguest
    </div>

    {{-- SMALL SCREENS --}}

    <div class="w3-animate-left w3-hide" id="slideIn">

        <ul class="w3-hide-medium w3-hide-large">
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                    {{-- Links --}}
                    <li>
                      <a href="/posts">Blog</a>
                    </li>
                    <li>
                      <a href="/posts/create">Post</a>
                    </li>
                    {{-- Toggle Logout --}}
                    <li>
                      <a href="#" onclick="toggleLogout2()">
                          {{ Auth::user()->name }} <span>&#9660</span>
                      </a>
                    </li>
                    <ul class="w3-animate-left w3-hide" id="logout2">
                        <li>
                          {{-- Submit Logout --}}
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            {{-- Hidden Logout Form --}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
            @endguest
        </ul>
    </div>
</nav>
