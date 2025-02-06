<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="bg-gray-100">
                        <div class="container mx-auto p-4">
                            <h1 class="text-3xl font-bold text-center my-6">Добро пожаловать на конференцию IT-специалистов</h1>
                        <div class="flex justify-center space-x-4 my-4">
                            <a href="/register" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Регистрация</a>
                            <a href="/login" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Вход</a>
                        </div>

                        <h2 class="text-2xl font-bold text-center my-6">Одобренные выступления</h2>
                            <ul class="space-y-4">
                            @foreach($reports as $report)
                                <li class="bg-white p-4 rounded-lg shadow">
                                <strong class="text-lg">{{ $report->fullname }}</strong> - {{ $report->theme }} ({{ $report->section->title }})
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
