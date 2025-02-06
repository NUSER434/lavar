<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Подать заявку') }}
        </h2>
    </x-slot>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        

        <form method="POST" action="/apply" class=" mx-auto bg-white p-8 rounded shadow">

        <h1 class="text-3xl font-bold text-center mb-8">Подача заявки на выступление</h1>
            @csrf
                <div class="mb-4">
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Полное ФИО</label>
                    <input type="text" name="fullname" id="fullname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="theme" class="block text-sm font-medium text-gray-700">Тема выступления</label>
                    <input type="text" name="theme" id="theme" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="section_id" class="block text-sm font-medium text-gray-700">Секция</label>
                    <input type="section_id" name="section_id" id="section_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                    



                <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Создать заявку</button>
                </div>
        </form>
    </div>
</body>
</x-app-layout>