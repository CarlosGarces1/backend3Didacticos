<x-slot name='header'>
    <h1 class="text-gray-900">CRUD Productos de la Tienda</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if (session()->has('message'))
                <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{ session('message') }}</h4>
                        </div>
                    </div>
                </div>
            @endif


            <button wire:click="crear()"
                class="bg-purple-600 hover:bg-purple-600 text-red font-bold py-2 px-4 my-3">Nuevo</button>
            @if ($modal)
                @include('livewire.crear')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Descripcion</th>
                        <th class="px-4 py-2">UserId</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="border px-4 py-2">{{ $post->id }}</td>
                            <td class="border px-4 py-2">{{ $post->name }}</td>
                            <td class="border px-4 py-2">{{ $post->description }}</td>
                            <td class="border px-4 py-2">{{ $post->user->first_name}}</td>

                            <td class="border px-4 py-2">
                                <button wire:click="editar({{ $post->id }})"
                                    class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4">Editar</button>
                                <button wire:click="borrar({{ $post->id }})"
                                    class="bg-red-500 hover:bg-blue-600 text-black font-bold py-2 px-4">Borrar</button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
