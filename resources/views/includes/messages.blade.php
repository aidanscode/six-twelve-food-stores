@if($errors->any() || session()->has('success'))
<div class="container">
  @foreach($errors->all() as $error)
  <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
    {{ $error }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endforeach

  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
</div>
@endif
