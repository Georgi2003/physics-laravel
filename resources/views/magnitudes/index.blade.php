<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <br>

    <h1>Величини</h1>
    <br>
    <table align="center" style="border:1px solid black;">
	<thead>
		<tr>
			<th>№</th>
			<th>Име на величината</th>
			<th>Означение</th>
			<th>Изтрии</th>
			<th>Актуализирай</th>
		</tr>
	</thead>
	<tbody>
		@foreach($allMagnitudes as $magnitude)
			<tr>
				<td>{{ $loop->iteration }}</td>
				
				<td>{{ $magnitude->name }}</td>
				<td>{{ $magnitude->symbol }}</td>
			<td>
				<form method="post" action="{{ url('magnitudes/') }}/{{ $magnitude->id }}">
					@csrf
					@method('DELETE')
					<button style = "text-decoration: none; color: black;" href = "">Изтрий
					</button>
				</form> 
			</td>
			<td>
				<button>
					<a style = "text-decoration: none; color: black;" href = "{{ url('magnitudes') }}/{{ $magnitude->id }}/edit">Актуализирай</a>
				</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<button><a style = "text-decoration: none; color: black;" href = "{{ url('magnitudes') }}/create">Добави величина</a></button>
</x-app-layout>
