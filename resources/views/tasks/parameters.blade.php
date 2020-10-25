<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Физика
        </h2>
    </x-slot>
    <br>

    <h1>Решаване на задачи</h1>
    <br>

    <form method="post" action = '{{url("parameters/$magnitude_id")}}'> 
	    {{ csrf_field() }}

	    @for($i = 0; $i < $input_count; $i++)
			<input type = "text" name = "param[]" placeholder="Параметър">
			<br>
		@endfor

		<input type = "submit" name = "submit" value="Продължи">
	</form>
</x-app-layout>