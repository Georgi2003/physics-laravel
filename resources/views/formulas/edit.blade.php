<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <h1>Актуализиране на формулата</h1>

	<form method="post" action = "/formulas/{{ $formula->id }}"> 
    	{{ csrf_field() }}
    	@method('PUT')

    	<br>
		<div class="dropdown">
            Актуализирай името на величината
            <br>
            <button onclick="myFunction()" class="dropbtn">{{ $formula->magnitude->name }}</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Търсене..." id="myInput" onkeyup="filterFunction()">

                @foreach($allMagnitudes as $magnitude)
                    <div> 
                        <a>
                            <input id="{{ $magnitude->name }}" type="radio" name="magnitude_id" value="{{ $magnitude->id }}" required>
                            <label for="{{ $magnitude->name }}">
                                {{ $magnitude->name }}
                            </label>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
		<br>
		Актуализирай броят параметри:
		<br>
        <input type = "number" name = "parameters_count" value="{{ $formula->parameters_count }}" required>
        <br>
        Актуализирай формулата:
        <br>
		<input type = "text" name = "formula" value="{{ $formula->formula }}" required>

		<br>
		<input type = "submit" name = "submit" value="Запази">	
	</form>
    <script src = "{{ asset('js/dropdown.js') }}"></script>
</x-app-layout>