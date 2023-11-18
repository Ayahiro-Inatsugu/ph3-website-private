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
        @foreach ($quizzes as $quiz_key => $quiz)
        <div class="flex flex-col justify-center w-2/3 gap-4">
          <p class="text-xl font-bold">
            <span>問題{{ ($quizzes->currentPage() - 1) * $quizzes->perPage() + $quiz_key + 1 }}:</span>
            {{ $quiz->text }}
          </p>
          @if ($quiz->image)
            <img src="{{ asset('storage/img/quizzes/' . $quiz->image) }}" alt="quiz_image" class="w-1/2">
          @endif
          <div class="flex flex-col justify-center w-1/2 gap-4">
            @foreach ($quiz->options as $option_key => $option)
            <div>
              <button id="option_btn" data-is-correct="{{ $option->is_correct }}">
                <span>選択肢{{ $option_key + 1 }}:</span>
                {{ $option->text }}
              </button>
            </div>
            @endforeach
          </div>
        </div>
        @endforeach
      </div>
      <div class="fle flex-col mt-4">
        {{ $quizzes->links() }}
      </div>
    </main>
  </x-layout>
  <script src="{{ asset('js/judgeQuestion.js') }}"></script>
</body>
</html>
