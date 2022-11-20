<div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="md:col-span-1">
              <div class="mt-5 md:col-span-2 md:mt-0">

<!-- component -->
<div class="table w-full p-2">
    <table class="w-full border">
        <thead>
            <tr class="bg-gray-50 border-b">
          
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        ID
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                       Doctor
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Paciente
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        fecha
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Horarios
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Razon de la Cita
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Descripcion
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                  <div class="flex items-center justify-center">
                      Creado
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                      </svg>
                  </div>
              </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Actualizado
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Editar
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Eliminar
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($cita as $cit)
            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
         
                <td class="p-2 border-r">{{ $cit->id }}</td>
                <td class="p-2 border-r">{{ $cit->doctors_id }}</td>
                <td class="p-2 border-r">{{ $cit->patients_email }}</td>
                <td class="p-2 border-r">{{ $cit->fecha}}</td>
                <td class="p-2 border-r">{{ $cit->horarios }}</td>
                <td class="p-2 border-r">{{ $cit->def_cita }}</td>
                <td class="p-2 border-r">{{ $cit->descripcion }}</td>
                <td class="p-2 border-r">{{ $cit->created_at }}</td>
                <td class="p-2 border-r">{{ $cit->updated_at }}</td>
                <td>
                    <a href="{{ route('cita.edit',$cit->id) }}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Editar</a>

                </td>
                <td>

                    <a href="{{ route('cita.show',$cit->id) }}" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Eliminar</a>
                </td>
            </tr>
            @endforeach
  
        </tbody>
    </table>
  </div>


              </div>
          </div>
      </div>
  </div>






































 {{--   
<h2>Noticias</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">doctor</th>
                            <th scope="col">Correo del paciente</th>
                            <th scope="col">fecha</th>
                            <th scope="col">hora</th>
                            <th scope="col">definicion</th>
                            <th scope="col">descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cita as $cit)
                        <tr>
                            <td>{{ $cit->doctors_id }}</td>
                            <td>{{ $cit->patients_email }}</td>
                            <td>{{ $cit->fecha }}</td>
                            <td>{{ $cit->horarios}} </td>
                            <td>{{ $cit->def_cita }}</td>
                            <td>{{ $cit->descripcion }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
 --}}
