<h1>student page</h1>
  <!-- Logout form -->
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
