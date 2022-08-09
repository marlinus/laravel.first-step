<x-basic>
  <x-slot:title>
    Main page
  </x-slot:title>
  <x-slot:css>
    {{ $css }}
  </x-slot:css>

  <div class="wrapper">
    <table>
      <tr>
        <th>Name</th>
        <th>Country</th>
        <th>Country code</th>
        <th>District</th>
        <th>Population</th>
      </tr>
      @foreach($cities as $city)
        <tr>
          <td>{{ $city->name }}</td>
          <td>{{ $city->country->name }}</td>
          <td>{{ $city->country_code }}</td>
          <td>{{ $city->district }}</td>
          <td>{{ $city->population }}</td>
        </tr>
      @endforeach
    </table>
  </div>
</x-basic>

