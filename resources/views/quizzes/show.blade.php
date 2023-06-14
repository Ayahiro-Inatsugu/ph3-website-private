<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クイズ{{ $question->id }} 詳細ページ</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-layout>
    <main class="flex flex-col items-center justify-center w-screen mt-20 mb-20 gap-16">
      <div class="mb-8">
        <h1>クイズ{{ $question->id }}</h1>
      </div>
      <div class="flex flex-col items-center justify-center gap-4">
        <p>{{ $question->text }}</p>
        <div>
          <ul class="flex items-center justify-center gap-4">
            @foreach ($question->options as $key => $option)
              <li>
                {{ $key + 1 }}:
                <span>{{ $option->text }}</span>
              </li>
            @endforeach
          </ul>
        </div>
        <div>
          <a href="{{ asset() }}">
            <button>編集</button>
          </a>
        </div>
      </div>
    </main>
  </x-layout>
</body>
</html>
