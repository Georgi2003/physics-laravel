<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <h1>Актуализиране на величината</h1>

	<form method="post" action = "/units/{{ $unit->id }}"> 
    	{{csrf_field()}}
    	@method('PUT')

    	<br>
    	Актуализирай името на величината:
    	<br>
		<div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Избери величина</button>
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
		Актуализирай мерната единица:
		<br>
		<input type = "text" name = "unit" value="{{ $unit->unit }}">
		<br>
		<input type = "submit" name = "submit" value="Запази">	
	</form>
    <script src = "{{ asset('js/dropdown.js') }}"></script>
</x-app-layout>