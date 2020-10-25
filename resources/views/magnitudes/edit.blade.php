<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <h1>Актуализиране на величината</h1>

	<form method="post" action = "/magnitudes/{{ $magnitude->id }}"> 
    	{{csrf_field()}}
    	@method('PUT')

    	<br>
    	Актуализирай името на величината:
    	<br>
		<input type = "text" name = "name" value="{{ $magnitude->name }}">
		<br>
		Актуализирай означението:
		<br>
		<input type = "text" name = "symbol" value="{{ $magnitude->symbol }}">
		<br>
		<input type = "submit" name = "submit" value="Запази">	
	</form>
</x-app-layout>