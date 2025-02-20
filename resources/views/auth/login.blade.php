<x-layout>
  <x-slot:heading>
      Login

  </x-slot:heading>

<form method="POST" action="/login">


@csrf

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Login</h2>


      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

     <x-form-field>
            <x-form-lable for="email">Login</x-form-lable>
              <div class="mt-2">
                 <x-form-input name="email" id="email"  placeholder="email"/>
              </div>

        <div class="mt-2">
             <x-form-error name="email"/>
        </div>
    </x-form-field>

     <x-form-field>
            <x-form-lable for="password">Password</x-form-lable>
              <div class="mt-2">
                 <x-form-input type="password" name="password" id="password"  placeholder="password"/>
              </div>

        <div class="mt-2">
             <x-form-error name="password"/>
        </div>
    </x-form-field>



  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Lodin</button>
  </div>
</form>

</x-layout>
