
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cita') }}
        </h2>
    </x-slot>
  
  
  
  @isset($mensaje)
  
  <div id="alert-border-3" class="flex p-4 mb-4 bg-green-100 border-t-4 border-green-500 dark:bg-green-200" role="alert">
      <svg class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
      <div class="ml-3 text-sm font-medium text-green-700">
          {{$mensaje}}
      </div>
      <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 dark:bg-green-200 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 dark:hover:bg-green-300 inline-flex h-8 w-8"  data-dismiss-target="#alert-border-3" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
  </div>
  
  @endisset         
  
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="md:col-span-1">
              <div class="mt-5 md:col-span-2 md:mt-0">
                  <form action="{{ route('cita') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                      <div class="overflow-hidden shadow sm:rounded-md">
                          <div class="bg-white px-4 py-5 sm:p-6">
                              <div class="grid grid-cols-6 gap-6">
  
                                      <input type="hidden" name="id" id="id" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                      <div class="col-span-6 sm:col-span-3">
                                       
                                        <div class="inline-block relative w-64">
                                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="doctors_id" id="doctors_id">
                                        <option selected="selected" value="{{$doc->id}}">{{$doc->nombres}} {{$doc->apellidos}}</option>
                                            @foreach($doctor as $doc)
                                            <option value="{{$doc->id}}">{{$doc->nombres}} {{$doc->apellidos}}</option>
                                            @endforeach
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                        </div>
  
                                      <input type="hidden" name="patient_email" id="patient_email" value="{{ Auth::user()->email }}" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
  
                                  <div class="col-span-6">
                                      <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                                      <input type="date" id="fecha" name="fecha" require>
                                  </div>

                                  <div class="inline-block relative w-64">
                                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="horarios" id="horarios">
                                        <option selected="selected" value="{{$hor->id}}">{{$hor->hora}}</option>
                                            @foreach($horario as $hor)
                                            <option value="{{$hor->id}}">{{$hor->hora}}</option>
                                            @endforeach
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                        </div>


                                        <div class="inline-block relative w-64">
                                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="def_cita" id="def_cita">
                                            <option>Vacunacion</option>
                                            <option>Chequeo General</option>
                                            <option>Chequeo Especifico</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                        </div>

                                
                                <div class="col-span-6">
                                    <label for="body" class="block text-sm font-medium text-gray-700">Descripcion</label>
                                    <textarea name="descripcion" id="descripcion" autocomplete="descripcion" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{$hor->hora}}</textarea>
                                </div>


  
                              </div>
                              <br>
                       
                          </div>
                          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                              Crear
                            </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

        </x-app-layout>