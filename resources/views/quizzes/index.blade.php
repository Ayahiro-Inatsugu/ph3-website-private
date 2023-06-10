<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クイズ</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-layout>
    <main class="flex flex-col items-center justify-center w-screen mt-20 mb-20">
      <h1 class="text-4xl font-bold">クイズ</h1>
      <a href="/quizzes/create">クイズ新規作成</a>
    </main>
  </x-layout>
</body>
</html>
