<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    
    <table align="center" style="border:1px solid black;">
	<thead>
		<tr>
			<th>№</th>
			<th>Име на величината</th>
			<th>Означение</th>
			<th>Мерна единица</th>
			<th>Изтрии</th>
			<th>Добави</th>
		</tr>
	</thead>
	<tbody>
		@foreach($allMagnitudes as $magnitude)
			<tr>
				<td>{{$num++}}</td>
				
				<td>{{$magnitude->name}}</td>
				<td>{{$magnitude->symbol}}</td>
				 
				@foreach($allUnits as $units)
					<td>{{$units->unit}}</td>
				@endforeach
			<td>
				<form method="post" action="{{url('magnitudes/')}}/{{$magnitude->id}}">
					@csrf
					@method('DELETE')
					<button style = "text-decoration: none; color: black;" href = "">Изтрий
					</button>
				</form> 
			</td>
			<td>
				<button>
					<a style = "text-decoration: none; color: black;" href = "{{url('magnitudes')}}/{{$magnitude->id}}/edit">Актуализирай</a>
				</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<button><a style = "text-decoration: none; color: black;" href = "{{url('magnitudes')}}/create">Добави величина</a></button>

<button><a style = "text-decoration: none; color: black;" href = "{{url('units')}}/create">Добави мерна единица</a></button>
</x-app-layout>
