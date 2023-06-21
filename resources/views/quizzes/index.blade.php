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
      <h1 class="text-4xl font-bold py-12">クイズ</h1>

      <div class="flex flex-col items-center justify-center w-screen gap-12">
        <div class="flex flex-col items-center justify-center w-screen gap-12">
          @foreach ($quizzes as $quiz)
          <div class="flex flex-col items-center justify-center w-2/3">
            <p>{{ $quiz->text }}</p>
            <div class="flex flex-col items-center justify-center w-full gap-12">
              @foreach ($quiz->options as $option)
              <div>
                <p>{{ $option->text }}</p>
              </div>
              @endforeach
            </div>
          </div>
          @endforeach
  </x-layout>
  <script src="{{ asset('js/deleteQuestion.js') }}"></script>
</body>
</html>
