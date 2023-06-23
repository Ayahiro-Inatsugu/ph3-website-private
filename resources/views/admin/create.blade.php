<x-app-layout>
    <div class="flex flex-col items-center justify-center w-screen mt-20 mb-20 gap-16">
      <div class="mb-8">
        <h1 class="text-4xl font-bold py-12">クイズ新規作成</h1>
      </div>
      <div class="flex flex-col justify-cente w-screen">
        <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data" class="flex flex-col items-center justify-center w-full gap-12">
          @csrf
          <div class="flex items-center gap-8">
            <div>
              <label for="question">問題</label>
              <span class="text-red-600">※必須</span>
            </div>
            <input type="text" name="question" id="question" required>
          </div>
          <div id="option_container" class="flex flex-col items-center justify-center w-full gap-12">
            <div class="flex items-center justify-center gap-2">
              <label for="option_1">選択肢1
                <span class="text-red-600">※必須</span>
              </label>
              <input type="text" name="option[]" id="option_1" required>
            </div>
            <div class="flex items-center justify-center gap-2">
              <label for="option_2">
                選択肢2
                <span class="text-red-600">※必須</span>
              </label>
              <input type="text" name="option[]" id="option_2" required>
            </div>
            <div class="flex items-center justify-center gap-2">
              <label for="option_3">
                選択肢3
                <span class="text-red-600">※必須</span>
              </label>
              <input type="text" name="option[]" id="option_3" required>
            </div>
          </div>

          <div id="answer_container" class="flex-wrap">
            <p>
              正解
              <span class="text-red-600">※必須</span>
            </p>
            <input type="radio" name="answer" id="answer_1" value="1" required>
            <label for="answer_1">選択肢１</label>
            <input type="radio" name="answer" id="answer_2" value="2" required>
            <label for="answer_2">選択肢２</label>
            <input type="radio" name="answer" id="answer_3" value="3" required>
            <label for="answer_3">選択肢３</label>
          </div>

          <div class="flex items-center justify-center gap-8">
            <div>
              <label for="image">画像</label>
            </div>
            <input type="file" name="image" id="image">
          </div>

          <div class="flex items-center justify-center gap-4">
            <input type="submit" class="border" value="作成" required>
          </div>
        </form>
        <button id="add_input_button" class="border">選択肢追加</button>
      </div>
    </div>
  <script src="{{ asset('js/createQuestion.js') }}"></script>
</x-app-layout>
