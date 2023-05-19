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
	
     <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
          <br><br>
            <div class="container mx-auto px-6 py-2">
                <div class="text-right">
                  @can('Evenement create')
                    <a href="{{route('admin.events.create')}}" class="btn btn-primary btn-sm mb-3 py-2 mx-2 my-2 px-3">Add Evenement <i class="bi bi-plus-circle-fill"></i></a>
                  @endcan
                  <a href="{{route('admin.dashboard')}}" class="btn btn-primary btn-sm mb-3 py-2   px-3" style="margin-left:1000px">Admin</a>
                </div>
               

              <div class="bg-white shadow-md rounded my-6">
                <table class="table table-hover">
                  <thead class="table-dark">
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Nom_Evenement</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Nom_club</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Email_Club</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Date</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Description</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody style="background: rgb(255,255,255);background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(218,218,218,1) 26%, rgba(192,192,198,1) 100%);">
                    
                    @can('Evenement access')
                      @foreach($events as $event)
                      <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $event->Nom_Evenement }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $event->Nom_club }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $event->Email }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $event->date }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $event->description }}</td>

                        <td class="py-4 px-6 border-b border-grey-light text-right">
                        <a href="{{route('admin.events.edit', $event->id)}}" class="btn btn-primary" style="font-size:15px"><i class="bi bi-info-circle-fill"></i></a>
                          @can('Evenement edit')
                          <a style="background-color: blue; color: white;" href="{{route('admin.events.edit', $event->id)}}" class="btn btn-warning"><i style="font-size:15px" class="bi bi-pencil-square"></i></a>
                          @endcan

                          @can('Evenement delete')
                          <form action="{{ route('admin.events.destroy', $event->id) }}" onsubmit="return confirm('Delete Event ?')" method="POST" class="inline">
                              @csrf
                              @method('delete')
                              <button  class="btn btn-danger" style="font-size:15px"><i class="bi bi-trash"></i></button>
                          </form>
                          @endcan
                        </td>
                      </tr>
                      @endforeach
                      @endcan


                  </tbody>
                </table>
              </div>
  
            </div>
        </main>
        </div>
</div>
</body>
</html>