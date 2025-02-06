<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
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
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подача заявки</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center my-6">Подача заявки на выступление</h1>
        <form method="POST" action="/apply" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow">
            @csrf
            <div class="mb-4">
                <label for="fullname" class="block text-gray-700">ФИО:</label>
                <input type="text" id="fullname" name="fullname" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="theme" class="block text-gray-700">Тема выступления:</label>
                <input type="text" id="theme" name="theme" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="section_id" class="block text-gray-700">Секция:</label>
                <select id="section_id" name="section_id" required class="w-full px-3 py-2 border rounded-lg">
                    @foreach($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Отправить заявку</button>
        </form>
    </div>
</body>
</html>