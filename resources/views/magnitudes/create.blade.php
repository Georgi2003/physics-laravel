<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <h2>Добавяне на величината</h2>

	<form method="post" action = "/magnitudes"> 
	    {{ csrf_field() }}
		<input type = "text" name = "name" placeholder = "Име на величината" required>
		<br>
		<input type = "text" name = "symbol" placeholder = "Означение" required>
		<br>
		<input type = "submit" name = "submit" value="Запази">
	</form>
</x-app-layout>