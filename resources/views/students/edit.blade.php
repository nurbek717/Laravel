<x-layout>
  <x-slot:heading>
     Edit Student

  </x-slot:heading>

<form method="POST" action="/students/{{$user->id}}">


@csrf
@method('PATCH')

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="name" class="block text-sm/6 font-medium text-white">Username</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" value="{{$user->name}}" name="name" id="name" autocomplete="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="name">
            </div>
          </div>

          <div class="mt-2">
            @error('name')
            <p class="text-xs text-red-500">{{$message}}</p>
            @enderror
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="lastname" class="block text-sm/6 font-medium text-white">Lastname</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" value="{{$user->lastname}}" name="lastname" id="lastname" autocomplete="lastname" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="Lastname">
            </div>
                  <div class="mt-2">
                       @error('lastname')
                          <p class="text-xs text-red-500">{{$message}}</p>
                      @enderror
          </div>

  <div class="mt-6 flex items-center justify-between gap-x-6">


    <div class="flext items-center">
          <button form="delete-form" class="bg-red-500 rounded-md p-2 text-white text-sm">Delete</button>
    </div>

    <div class="flext  items-center">
        <a href="/students/{{$user->id}}"  class="text-sm/6 font-semibold text-white">Cancel</a>
        <button  type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>

  </div>
</form>

<form method="POST" action="/students/{{$user->id}} " class="hidden" id="delete-form">
    @csrf
    @method('DELETE')

</form>

</x-layout>
