<div class="bg-red-800 text-gray-100 py-2">
    <div class="grid ml-0">
    @auth
        {{Auth::user()->name}} |
        <a href="/logout">Log out</a>
    @else
        <a href="/login">Login</a>
    @endauth
    </div>
</div>

<!--
See this plz
https://stackoverflow.com/questions/63644145/how-can-i-restrict-the-user-not-to-access-login-page-after-logged-in-with-larave
-->
