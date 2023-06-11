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

      <div class="flex flex-col items-center justify-center w-full gap-12 mt-12">
        @foreach ($quizzes as $quiz_key => $quiz)
          <div class="flex flex-col items-center justify-center w-full gap-4">
            <div class="flex items-center justify-center">
              <span>問題{{ $quiz_key + 1 }}</span>
              <span>
                <a href="">
                  <button class="border text-white bg-green-400 p-2">編集</button>
                </a>
                <button class="border text-white bg-red-500 p-2"
                        onclick="location.href='{{ route('quizzes.destroy', ['id' => $quiz->id]) }}'">
                  削除
                </button>
              </span>
            </div>
            <div class="flex flex-col items-center justify-center w-full gap-2">
              <p>{{ $quiz->text }}</p>
              <p>正解：選択肢{{ $quiz->answer }}</p>
            </div>
            <div class="flex flex-col items-center justify-center w-full gap-2">
              @foreach ($quiz->options as $option_key => $option)
              <p>選択肢{{ $option_key + 1 }}：{{ $option->text }}</p>
              @endforeach
            </div>
          </div>
        @endforeach

      <a href="/quizzes/create">クイズ新規作成</a>
    </main>
  </x-layout>
</body>
</html>
