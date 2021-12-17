<h2>Hi, {{ $user->name }}</h2>

<p>Your account's password has been reset.</p>
<p>To log in, navigate to the following url: <a href="{{ route('admin.auth.login') }}">Click Here</a></p>
<br />

<p>Please use the following credentials the next time you log in.</p>
<p><strong>Email: </strong>{{ $user->email }}</p>
<p><strong>Password: </strong>{{ $newPassword }} (You will be asked to change this once you log in)</p>
