<x-app-layout>
  @foreach ($service as $services)
    <form action="{{route('form.store', $services->id)}}" method="post">
      @csrf
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <h2 class="font-semibold text-xl text-gray-600">{{$services->nombre}}</h2>
            <p class="text-gray-500 mb-6"></p>
      
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div class="text-gray-600">
                  <p class="font-medium text-lg">Detalles del servicio</p>
                  <p class="text-justify">{{$services->descripcion}}</p>
                </div>
      
                <div class="lg:col-span-2">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-5">
                      <label for="full_name">Nombre</label>
                      <input type="text" name="name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Nombre y dos Apellidos"/>
                      @error('name')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
      
                    <div class="md:col-span-5">
                      <label for="email">Email</label>
                      <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                      @error('email')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
      
                    <div class="md:col-span-5">
                      <label for="address">Teléfono</label>
                      <input type="text" name="telefono" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Teléfono" />
                      @error('telefono')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
      
                    <div class="md:col-span-5">
                      <label for="city">Empresa</label>
                      <input type="text" name="empresa" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Empresa" />
                      @error('empresa')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
      
                    <div class="md:col-span-5">
                      <label for="country">Servicio</label>
                      <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                        <select name="servicio" id="" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent">
                          <option value="{{$services->nombre}}">{{$services->nombre}}</option>
                        </select>
                      </div>
                    </div>

                    <div class="md:col-span-5">
                      <label for="city">Mensaje</label>
                      <textarea class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" name="mensaje" placeholder="¿En qué podemos ayudarle?"></textarea>
                      @error('mensaje')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
      
                    <div class="md:col-span-5 text-right">
                      <div class="inline-flex items-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

  @endforeach
</x-app-layout>