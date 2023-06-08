<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ユーザー一覧</title>
  @vite('resources/css/app.css')
</head>
<x-layout>
  <main class="flex flex-col items-center justify-center w-screen mt-20">
    <h1 class="text-4xl font-bold">ユーザー一覧</h1>
    <ul class="flex flex-col gap-4 w-1/3">
      @foreach ($users as $user)
      <li>
        <p>{{ $user->name }}</p>
      </li>
      @endforeach
    </ul>
  </main>
</x-layout>
</html>
