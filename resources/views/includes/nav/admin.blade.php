<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('location.index') }}">{{ config('app.name') }} Admin Panel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{ route('location.index') }}">Location Management</a>
        <a class="nav-link" href="{{ route('user.index') }}">User Management</a>
      </div>
    </div>
	
	<div class="navbar-nav navbar-right">
		<a class="btn btn-outline-light" href="{{ route('admin.auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			Logout
		</a>
		<form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
	</div>
	
  </div>
</nav>
