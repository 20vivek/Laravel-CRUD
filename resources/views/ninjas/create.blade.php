<x-layout>
  <form action ="{{ route('ninjas.store')}}" method="POST" >
    @csrf
    <h2>Create a New Ninja</h2>

    <!--Ninja Name-->
    <label for="name">Ninja Name</label>
    <input  type="text" name="name" id="name" value="{{old('name')}}" required>

    <!--Ninja Skill-->
    <label for="skill">Ninja Skill(0-100):</label>
    <input type="number" name="skill" id="skill" value="{{old('skill')}}" required>

    <!--Ninja Bio-->
    <label for="bio">Biography:</label>
    <textarea rows= "5" name="bio" id="bio" required>{{old('bio')}}</textarea>

    <!--Ninja Dojo-->
    <label for="dojo_id">Dojo:</label>
    <select name="dojo_id" id="dojo_id" required>
    <option value="" disabled selected>Select a dojo</option>
    @foreach($dojos as $dojo)
    <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id') ? 'selected' : '' }}>
      {{ $dojo->name }}
    </option>

    @endforeach
  </select>

    <button type="submit" class="btn mt-4">Create Ninja</button>

    <!--validation errors-->
    @if ($errors->any())
    <ul class="px-4 py-2 bg-red-100">
      @foreach ($errors->all() as $error)
      <li class="text-red-700">{{ $error }}</li>
      @endforeach

    </ul>
    @endif

  </form>




</x-layout>