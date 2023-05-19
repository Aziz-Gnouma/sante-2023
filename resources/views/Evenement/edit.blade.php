<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.Evenements.update',$Evennement->id)}}">
                  @csrf
                  @method('put')
                  <div class="flex flex-col space-y-2">
                    <label for="name" class="text-gray-700 select-none font-medium">Event Name</label>
                    <input id="name" type="text" name="Nom_Evennement" value="{{ old('Nom_Evennement',$evennements->Nom_Evennement) }}"
                      placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
        
                <div class="flex flex-col space-y-2">
                    <label for="text" class="text-gray-700 select-none font-medium">nom_club</label>
                    <input id="email" type="text" name="Nom_club" value="{{ old('Nom_club',$evennements->Nom_club) }}"
                      placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="email" class="text-gray-700 select-none font-medium">Email</label>
                    <input id="email" type="text" name="Email" value="{{ old('Email',$evennements->Email) }}"
                      placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="email" class="text-gray-700 select-none font-medium">date</label>
                    <input id="email" type="text" name="date" value="{{ old('date',$evennements->date) }}"
                      placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="email" class="text-gray-700 select-none font-medium">description</label>
                    <input id="email" type="text" name="description" value="{{ old('description',$evennements->description) }}"
                      placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
                
              

              
                <div class="text-center mt-16 mb-16">
                  <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
                </div>
              </div>

             
            </div>
        </main>
    </div>
</div>
</x-app-layout>
