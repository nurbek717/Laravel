<x-layout>
  <x-slot:heading>
     Create Student

  </x-slot:heading>

<form method="POST" action="/students">


@csrf

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-white">Student</h2>


      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

     <x-form-field>
            <x-form-lable class="text-white" for="title">Stundet Name</x-form-lable>
              <div class="mt-2">
                 <x-form-input class="text-white" name="name" id="name"  placeholder="name"/>
              </div>

        <div class="mt-2">
             <x-form-error name="name"/>
        </div>
    </x-form-field>

     <x-form-field>
            <x-form-lable class="text-white" for="title">Stundet LastName</x-form-lable>
              <div class="mt-2">
                 <x-form-input class="text-white" name="lastname" id="lastname"  placeholder="lastname"/>
              </div>

        <div class="mt-2">
             <x-form-error name="lastname"/>
        </div>
    </x-form-field>



  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold  text-white"">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>

</x-layout>
