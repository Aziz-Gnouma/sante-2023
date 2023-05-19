<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
          <br><br>
            <div class="container mx-auto px-6 py-2">
                <div class="text-right">
                  @can('Evenement create')
                    <a style="background-color: blue; color: black;"href="{{route('admin.Evenements.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New User</a>
                  @endcan
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
                  <tbody style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(218,218,218,1) 26%, rgba(192,192,198,1) 100%);">
                    
                    @can('Evenement access')
                      @foreach($evennements as $Evennement)
                      <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $Evennement->Nom_Evenement }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $Evennement->Nom_club }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $Evennement->Email }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $Evennement->date }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $Evennement->description }}</td>

                        <td class="py-4 px-6 border-b border-grey-light text-right">
                          @can('Evenement edit')
                          <a style="background-color: blue; color: white;" href="{{route('admin.Evenements.edit', $Evennement->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                          @endcan

                          @can('Evenement delete')
                          <form action="{{ route('admin.Evenements.destroy', $Evennement->id) }}" method="POST" class="inline">
                              @csrf
                              @method('delete')
                              <button style="background-color: red; color: white;" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
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
</x-app-layout>
