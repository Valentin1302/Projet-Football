<table class="table table-striped table-hover align-middle">
	<thead class="table-dark">
		<tr>
			@foreach ($columns as $column)
				<th>{{ $column }}</th>
			@endforeach
		</tr>
	</thead>
	<tbody>
		@forelse ($rows as $row)
			<tr>
				@foreach ($row as $cell)
					<td>{!! $cell !!}</td>
				@endforeach
			</tr>
		@empty
			<tr>
				<td colspan="{{ count($columns) }}" class="text-center">{{ $emptyMessage ?? 'Aucune donnée.' }}</td>
			</tr>
		@endforelse
	</tbody>
</table>
<table class="table table-striped table-hover align-middle">
	<thead class="table-dark">
		{{ $header }}
	</thead>
	<tbody>
		{{ $body }}
	</tbody>
</table>
