<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro Paciente') }}
        </h2>
    </x-slot>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="md:col-span-1">
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form action="{{ route('paciente') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                    <input type="hidden" name="id" id="id" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="col-span-6">
                                            <label for="body" class="block text-sm font-medium text-gray-700">Correo</label>
                                            <input type="text" name="email" id="email" placeholder="ejemplo@ejemplo.com" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="segment_id" class="block text-sm font-medium text-gray-700">Nombre(s)</label>
                                            <input type="text" name="nombres" id="nombres" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="body" class="block text-sm font-medium text-gray-700">Apellidos</label>
                                            <input type="text" name="apellidos" id="apellidos" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="body" class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="telefono" id="telefono" placeholder="3312312333" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>

                                        </div>

                                        <label for="genero" class="block text-sm font-medium text-gray-700">Tu genero</label>
                                        <select id="genero" name="genero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option>Hombre</option>
                                            <option>Mujer</option>
                                            <option>Binario</option>
                                        </select>

                                        <div class="col-span-6">
                                            <label for="body" class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                                            <input type="date" name="fecha_n" id="fecha_n" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>

                                        </div>

                                        <div class="col-span-6">
                                            <label for="body" class="block text-sm font-medium text-gray-700">Direccion</label>
                                            <input type="text" name="direccion" id="direccion" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                        </div>


                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">Imagen</label>
                                            <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                                <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="foto" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                                            <span>Insertar imagen</span>
                                                            <input id="foto" name="foto" type="file" class="hidden" />
                                                        </label>
                                                        <p class="pl-1">Presione enter</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <br>

                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
