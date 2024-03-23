<x-slot name='header'>
    <h1 class="text-gray-900">Posts</h1>
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
                class="bg-blue-600 hover:bg-blue-400 text-red font-bold py-4 px-10 my-3 rounded-md text-lg text-white">Nuevo</button>
            @if ($modal)
                @include('livewire.crear')
            @endif
            <div class="grid grid-cols-3 gap-4">
                @foreach ($posts as $post)
                    <div class="w-[350px] h-[350px] bg-yellow-100 border border-yellow-500 shadow-lg rounded-2xl m-2">
                        <div class="p-4 flex flex-col justify-between h-full">
                            <div>
                                <h2 class="text-xl font-bold text-black mb-4 ">{{ $post->name }}</h2>
                                <p class="text-sm text-black-400 mb-4 p-5">{{ $post->description }}</p>
                                <p class="text-gray-600 p-5">Creado por : {{ $post->user->username }} </p>
                            </div>
                            <div class="flex justify-center gap-3">
                                <button wire:click="editar({{ $post->id }})"
                                    class="bg-purple-700 px-5 py-2 text-sm text-white rounded-full hover:bg-purple-900 transition ease-in duration-300">
                                    Editar
                                </button>
                                <button wire:click="borrar({{ $post->id }})"
                                    class="bg-red-400 px-5 py-2 text-sm text-white rounded-full hover:bg-red-500 transition ease-in duration-300">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
