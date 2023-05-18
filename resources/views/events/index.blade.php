<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
        name="viewport" />
    <link rel="stylesheet"href="assets/bootstrap/css/bootstrap.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet"href="assets/font-awesome-4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    
</head>
<body>
    <div class="container my-2" >
		<h1 class="text-center">Evenements List</h1>
        
		@if (Session::has('success'))
        <div class="alert alert-success" role="alert" style="font-size:15px">
            {{ Session::get('success') }}
        </div>
    @endif
		<a href = "{{ Route('events.create') }}" class="btn btn-primary btn-sm mb-3" style="font-size:15px"> Add Evenement <i class="bi bi-plus-circle-fill"></i> </a>
		<br>
		<table border="1" class = "table table-striped table-responsive-md text-center" style="font-size:15px" >
			<thead class="text-center">
			<tr >
				<th style="width:200px">
					nom event 
				</th>
				<th style="width:200px">
					description 
				</th>
				<th style="width:200px">
					Date event
				</th>
				<th style="width:5px"> Actions </th>
			</tr>
			</thead>
			<tbody>
            @foreach ($events as $event)
			

                <tr>
                    <th scope="row" >{{ $event->title }}</th>
					<td>{{ substr($event->description, 0, 50) . '...' }}</td>
                    <td >{{ $event->date }}</td>
                    <td>
                        <a href="{{ url('/events/' . $event->id) }}" class="btn btn-primary" style="font-size:15px"><i class="bi bi-info-circle-fill"></i></a><br>
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning" style="font-size:15px"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('events.destroy', $event->id) }}" onsubmit="return confirm('Delete Event ?')" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="font-size:15px"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
           
			@endforeach
			</tbody>

		</table>

		
	</div>


	</div>

</body>
</html>