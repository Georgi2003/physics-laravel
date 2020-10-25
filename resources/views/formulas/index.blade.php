<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <br>

    <h1>Формули</h1>
    <br>
    <table align="center" style="border:1px solid black;">
		<thead>
			<tr>
				<th>№</th>
				<th>Величина</th>
				<th>Формула</th>
				<th>Брой параметри</th>
				<th>Изтрии</th>
				<th>Актуализирай</th>
			</tr>
		</thead>

		<tbody>
		@foreach($allFormulas as $formula)
			<tr>
				<td>{{ $loop->iteration }}</td>	
				<td>{{ $formula->magnitude->name }}</td>			
				<td>{{ $formula->magnitude->symbol }} = {{ $formula->formula }}</td>
				<td>{{ $formula->parameters_count }}</td>
				<td>
					<form method="post" action="{{ url('formulas/') }}/{{ $formula->id }}">
						@csrf
						@method('DELETE')
						<button style = "text-decoration: none; color: black;" href = "">Изтрий
						</button>
					</form>
				</td>
				<td>
					<button>
						<a style = "text-decoration: none; color: black;" href = "{{ url('formulas') }}/{{ $formula->id }}/edit">Актуализирай</a>
					</button>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	<button><a style = "text-decoration: none; color: black;" href = "{{ url('formulas') }}/create">Добави формула</a></button>
</x-app-layout>