<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--
                <x-jet-welcome /> --}}
                <h4 class="m-4">Welcome to FYP System</h4>
                <h5 class="m-4">This is a system to manage FYP projects. Click button below to start</h5>
                <button type="button" class="btn btn-primary m-4"><i class="fas fa-list-ul mr-2"></i><a
                        href="{{ url('/list') }}" style="color: white">
                        Project List</a></button>
                <button type="button" class="btn btn-primary m-4"><i class="fas fa-list-ul mr-2"></i><a
                        href="{{ url('/add') }}" style="color: white">
                        Add Project</a></button>
            </div>
        </div>
    </div>
</x-app-layout>