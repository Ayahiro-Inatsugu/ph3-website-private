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
        <h1 class="text-4xl font-bold">クイズ新規作成</h1>
      </div>
      <div>
        <form action="{{ url('/quizzes/add') }}" method="post" class="flex flex-col justify-center w-full gap-12">
          @csrf
          <div class="flex items-center gap-12">
            <label for="question">問題</label>
            <input type="text" name="question" id="question">
          </div>
          <div class="flex flex-col justify-center w-full gap-12">
            <div class="gap-2">
              <label for="option_first">選択肢１</label>
              <input type="text" name="option_first" id="option_first">
            </div>
            <div>
              <label for="option_second">選択肢２</label>
              <input type="text" name="option_second" id="option_second">
            </div>
            <div>
              <label for="option_third">選択肢３</label>
              <input type="text" name="option_third" id="option_third">
            </div>
          </div>

          <div>
            <p>正解</p>
            <input type="radio" name="answer" id="first" value="first">
            <label for="first">選択肢１</label>
            <input type="radio" name="answer" id="second" value="second">
            <label for="second">選択肢２</label>
            <input type="radio" name="answer" id="third" value="third">
            <label for="third">選択肢３</label>
          </div>

          <div>
            <button type="submit">作成</button>
          </div>
        </form>
      </div>
    </main>
  </x-layout>
</body>
</html>
