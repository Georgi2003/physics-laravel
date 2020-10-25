<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <br>
	<h1>Мерни единици</h1>
	<br>

	<table align="center" style="border:1px solid black;">
	<thead>
		<tr>
			<th>№</th>
			<th>Име на величината</th>
			<th>Мерна единица</th>
			<th>Изтрии</th>
			<th>Актуализирай</th>
		</tr>
	</thead>
	<tbody>
		@foreach($allUnits as $units)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $units->magnitude->name }}</td>
				<td>{{ $units->unit }}</td>
			<td>
				<form method="post" action="{{ url('units/') }}/{{ $units->id }}">
					@csrf
					@method('DELETE')
					<button style = "text-decoration: none; color: black;" href = "">Изтрий
					</button>
				</form> 
			</td>
			<td>
				<button>
					<a style = "text-decoration: none; color: black;" href = "{{ url('units') }}/{{ $units->id }}/edit">Актуализирай</a>
				</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<button><a style = "text-decoration: none; color: black;" href = "{{ url('units') }}/create">Добави мерна единица</a></button>
</x-app-layout>
