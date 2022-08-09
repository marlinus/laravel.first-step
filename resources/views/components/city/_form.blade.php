<form action="{{ $action }}" method="post">
  @csrf
  <label for="name">City
    <input type="text" name="name" id="name">
  </label><br>
  <label for="population">Population
    <input type="text" name="population" id="population">
  </label><br>
  <button type="submit">Create</button>
</form>
