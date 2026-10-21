<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customers</a> |
    <a href="/users">Users</a>
</nav>

<h1>Customer Accounts</h1>

@foreach ($customers as $customer)
    <p>{{ $customer['name'] }} — {{ $customer['email'] }} — {{ $customer['phone'] }}</p>
@endforeach