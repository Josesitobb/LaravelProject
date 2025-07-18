<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            
            <div class="mt-2 space-x-4">
                <a href="{{ route('categorias.index') }}" class="text-sm text-blue-600 hover:underline">
                    Categorías
                </a>
                <a href="{{ route('subcategorias.index') }}" class="text-sm text-blue-600 hover:underline">
                    Subcategorías
                </a>
                <a href="{{ route('productos.index') }}" class="text-sm text-blue-600 hover:underline">
                    Productos
                </a>
                <a href="{{ route('usuarios.index') }}" class="text-sm text-blue-600 hover:underline">
                    Usuarios
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
