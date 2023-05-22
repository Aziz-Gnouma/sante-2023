<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="bg-white shadow-md rounded my-6">
                <table class="table table-hover">
                  <thead class="table-dark">
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">User Name</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">email</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">number</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">appoiment Date</th>
                      
                    </tr>
                  </thead>
                  <tbody style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(218,218,218,1) 26%, rgba(192,192,198,1) 100%);">
                    

                      @foreach ($appointments as $appointment)
        <tr>
            <td>{{ $appointment->name }}</td>
            <td>{{ $appointment->email }}</td>
            <td>{{ $appointment->number }}</td>
            <td>{{ $appointment->date }}</td>

        </tr>
        @endforeach
                                          
                  </tbody>
                </table>
              </div>            
        </main>
    </div>
</div>
</x-app-layout>
