<style>
    body {
        margin-inline: 10em;
    }

    a:link {
        color: #000000;
        text-decoration: none;
    }

    a:visited {
        color: #828282;
    }

    nav a:visited {
        color: #000000;
    }
</style>

<nav style="background: rgb(37, 122, 81); padding:0.2em; display: flex; gap: 1em; justify-content: flex-end; margin-bottom:2em;">
    <span></span>
    @if (Request::is('/'))
    <span style=" font-weight: bold">Rater News</span>
    <a href="/send" style="margin-right: auto;">Make a good scoop</a>

    @elseif (Request::is('send'))
    <span style="font-weight: bold">Makin' a good new huh?</span>
    <a href="/" style="margin-right: auto;">Back to news section</a>

    <!-- ! Fix this !-->
    @elseif (Request::is('new/'.$new->id))
    <span style="font-weight: bold">Seein' somenthing cool huh?</span>
    <a href="/" style="margin-right: auto;">Back to news section</a>
    <a href="/send" style="margin-right: auto;">Make a good scoop</a>
    @endif
    @auth
        <a href="/dashboard">{{ Auth::user()->name }}</a> |
        <form method=POST action="/logout" style="margin: 0">
            @csrf
            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
        </form>
    @else
        <a href="{{ route('login') }}">Log in</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
</nav>
