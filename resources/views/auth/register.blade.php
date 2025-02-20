<x-layout>
  <x-slot:heading>
   Register

  </x-slot:heading>

<form method="POST" action="/register">


@csrf

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold ">Register</h2>


      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

     <x-form-field>
            <x-form-lable  for="firstname " class="text-white">Firstname</x-form-lable>
              <div class="mt-2">
                 <x-form-input class="text-white" name="name" id="firstname"  placeholder="Ismingizni kiriting!!" require/>
              </div>

        <div class="mt-2">
             <x-form-error name="name"/>
        </div>
    </x-form-field>

     <x-form-field>
            <x-form-lable class="text-white" for="email">Email</x-form-lable>
              <div class="mt-2">
                 <x-form-input class="text-white" type="email" name="email" id="email"  placeholder="email" require/>
              </div>

        <div class="mt-2">
             <x-form-error name="email"/>
        </div>
    </x-form-field>

    <x-form-field>
            <x-form-lable class="text-white" for="password">Password</x-form-lable>
              <div class="mt-2">
                 <x-form-input class="text-white" type="password" name="password" id="password"  placeholder="password" require/>
              </div>

        <div class="mt-2">
             <x-form-error name="password"/>
        </div>
    </x-form-field>

    <x-form-field>
            <x-form-lable class="text-white" for="password_confrmetion">Confrim_Password</x-form-lable>
              <div class="mt-2">
                 <x-form-input class="text-white" type="password" name="password_confrmetion" id="password_confrmetion"  placeholder="password_confrmetion" require/>
              </div>

        <div class="mt-2">
             <x-form-error name="password_confrmetion"/>
        </div>
    </x-form-field>



  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
  </div>
</form>

</x-layout>
