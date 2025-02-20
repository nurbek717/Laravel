<x-layout>
    <x-slot:heading>
        User page
    </x-slot:heading>

    <h2> Name:  {{$user['name']}}</h2>
    <h3> Lastname: {{$user['lastname']}} </h3>

    <div class="mt-6">
        @can('edit', $user)
            <x-link href="/students/{{$user->id}}/edit">
            Edit Student
            </x-link>
        @endcan

    </div>
</x-layout>
