<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
          <div class="mx-auto max-w-2xl">

      <form method="POST" data-action="{{ route('users.storeds') }}" id="formUser">
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Nuevo Perfil</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600"></p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre de Usuario</label>
                <div class="mt-2">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">onemfg/</span>
                    <input type="text" name="name" id="name" autocomplete="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="alejandro">
                     <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  </div>
                </div>
              </div>

              <div class="col-span-full">
                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Foto de Perfil</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                  <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Carga una imagen</span>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                      </label>
                      <p class="pl-1">o arrastrar y soltar</p>
                    </div>
                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Información Personal</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Utilice una dirección permanente en la que pueda recibir correo.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label for="paternal_surname" class="block text-sm font-medium leading-6 text-gray-900">Apellido Paterno</label>
                <div class="mt-2">
                  <input type="text" name="paternal_surname" id="paternal_surname" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="mother_surname" class="block text-sm font-medium leading-6 text-gray-900">Apellido Materno</label>
                <div class="mt-2">
                  <input type="text" name="mother_surname" id="mother_surname" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                <div class="mt-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              <div class="col-span-full">
                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Direccion</label>
                <div class="mt-2">
                  <input type="text" name="address" id="address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Ciudad</label>
                <div class="mt-2">
                  <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="state" class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                <div class="mt-2">
                  <input type="text" name="state" id="state" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="postal_code" class="block text-sm font-medium leading-6 text-gray-900">Codigo Postal</label>
                <div class="mt-2">
                  <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
            </div>
          </div>

          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Rol</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Elige el rol del usuario</p>

                <div class="sm:col-span-3">
                    <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="1">Administrador Completo</option>
                        <option value="2">Administrativo</option>
                    </select>
                    </div>
              </div>
          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
        </div>
      </form>

          </div>
        </div>
      </div>

      <script>
appControl = appModule;
document.getElementById('formUser').addEventListener('submit', async function (e) {
        e.preventDefault(); // Evitar que el formulario se envíe de forma tradicional
        appControl.mostrarLoading();
        const form = e.target;
        const url = form.dataset.action;
        console.log(url);
        let data = appControl.serializeForm('formUser');
        data.url = url
        console.log(data);
        console.log(form.dataset.action);
        let response = await appControl.saveForm(data);
        console.log(response);
        if( response.type === undefined){
            appControl.cerrarLoading();
            for (const key in response.errors) {
                console.log(response);
                if (response.errors.hasOwnProperty(key)) {
                    const messages = response.errors[key];
                    // Itera a través de los mensajes de error
                    for (const message of messages) {
                        Swal.fire(`Campo: ${key}`, `Mensaje de error: ${message}`, 'warning');
                    }
                }
            }
            return;
        }

        // .then(response => response.json()) // Supongo que la respuesta es JSON, ajusta según tu caso
        // .then(data => {
        //     // Aquí puedes mostrar la respuesta utilizando SweetAlert2
        //     console.log(data);
        //     Swal.fire({
        //         title: 'Respuesta del servidor',
        //         text: data.message, // Ajusta la propiedad de acuerdo a la estructura de tu respuesta
        //         icon: 'success' // Puedes ajustar el icono según tu preferencia
        //     });
        // })
        // .catch(error => {
        //     // En caso de error
        //     console.error('Error:', error);
        //     Swal.fire({
        //         title: 'Error',
        //         text: 'Hubo un error al procesar la solicitud',
        //         icon: 'error'
        //     });
        // });
    });
      </script>
</x-app-layout>
