<x-basic>
  <x-slot:title>
    Edit page
  </x-slot:title>
  <x-slot:css>

  </x-slot:css>

  <form action="/update/{{ $city->id }}" method="post">
    @csrf
    <label for="name">City
      <input type="text" name="name" id="name" value="{{ $city->name }}">
    </label><br>
    <label for="population">Population
      <input type="text" name="population" id="population" value="{{ $city->population }}">
    </label><br>
    <button type="submit">Create</button>
  </form>

</x-basic>
