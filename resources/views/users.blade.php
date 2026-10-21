<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customers</a> |
    <a href="/users">Users</a>
</nav>

<h1>User Accounts</h1>

@foreach ($users as $user)
    <p>{{ $user['name'] }} - {{ $user['email'] }} - {{ $user['role'] }}</p>
@endforeach