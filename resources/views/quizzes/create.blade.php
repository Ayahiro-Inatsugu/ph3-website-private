<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クイズ新規作成</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-layout>
    <main class="flex flex-col items-center justify-center w-screen mt-20 mb-20 gap-16">
      <div class="mb-8">
        <h1 class="text-4xl font-bold py-12">クイズ新規作成</h1>
      </div>
      <div class="flex flex-col justify-cente w-screen">
        <form action="{{ route('quizzes.store') }}" method="post" class="flex flex-col items-center justify-center w-full gap-12">
          @csrf
          <div class="flex items-center gap-8">
            <label for="question">問題</label>
            <input type="text" name="question" id="question">
          </div>
          <div id="option_container" class="flex flex-col items-center justify-center w-full gap-12">
            <div class="gap-2">
              <label for="option_1">選択肢1</label>
              <input type="text" name="option[]" id="option_1">
            </div>
            <div>
              <label for="option_2">選択肢2</label>
              <input type="text" name="option[]" id="option_2">
            </div>
            <div>
              <label for="option_3">選択肢3</label>
              <input type="text" name="option[]" id="option_3">
            </div>
          </div>

          <div id="answer_container" class="flex-wrap">
            <p>正解</p>
            <input type="radio" name="answer" id="answer_1" value="1">
            <label for="answer_1">選択肢１</label>
            <input type="radio" name="answer" id="answer_2" value="2">
            <label for="answer_2">選択肢２</label>
            <input type="radio" name="answer" id="answer_3" value="3">
            <label for="answer_3">選択肢３</label>
          </div>

          <div class="flex items-center justify-center gap-4">
            <input type="submit" class="border" value="作成">
          </div>
        </form>
        <button id="add_input_button" class="border">選択肢追加</button>
      </div>
    </main>
  </x-layout>
  <script src="{{ asset('js/createQuestion.js') }}"></script>
</body>
</html>
