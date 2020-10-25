<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <br>

    <h1>Решаване на задачи</h1>
    <br>
	<form method="post" action = "tasks"> 
	    {{ csrf_field() }}
	    <div class="dropdown">
		  	<button onclick="myFunction()" class="dropbtn">Формула за:</button>
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
		<input type = "submit" name = "submit" value="Продължи">
	</form>
	<script src = "{{ asset('js/dropdown.js') }}"></script>
</x-app-layout>