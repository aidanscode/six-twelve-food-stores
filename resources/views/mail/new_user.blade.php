<h2>Hi, {{ $user->name }}</h2>

<p>An account has been created for you at SixTwelve's admin panel.</p>
<p>To log in, navigate to the following url: <a href="{{ route('admin.auth.login') }}">Click Here</a></p>

<br />

<p>And use the following credentials.</p>
<p><strong>Email: </strong> {{ $user->email }}</p>
<p><strong>Password: </strong> {{ $defaultPassword }} (You will be asked to change this once you log in)</p>
