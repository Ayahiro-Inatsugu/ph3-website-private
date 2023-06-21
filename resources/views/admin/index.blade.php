<x-app-layout>
  <div class="flex flex-col items-center justify-center w-screen mt-20 mb-20">
    <h1 class="text-4xl font-bold py-12">クイズ</h1>

    @if (session('message'))
      <div class="alert text-red text-center py-4">
        {{ session('message') }}
      </div>
    @endif

    <div class="flex flex-col items-center justify-center w-full gap-12 mt-12">
      @foreach ($quizzes as $quiz_key => $quiz)
        <div class="flex flex-col items-center justify-center w-full gap-4">
          <div class="flex items-center justify-center">
            <span>問題{{ $quiz_key + 1 }}</span>
            <div class="flex gap-2">
              <a href="{{ route('admin.edit', $quiz->id) }}">
                <button class="border text-white bg-green-400 p-2">編集</button>
              </a>
              <form action="{{ route('admin.destroy', $quiz->id) }}" method="POST" id="delete_form">
                @csrf
                @method('DELETE')
                <button type="submit" id="delete_btn" class="border text-white bg-red-500 p-2">削除</button>
              </form>
              <a href="{{ route('admin.show', $quiz->id) }}">
                <button class="border text-white bg-blue-500 p-2">詳細</button>
              </a>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center w-full gap-2">
            <p>{{ $quiz->text }}</p>
          </div>
          <div class="flex flex-col items-center justify-center w-full gap-2">
            @foreach ($quiz->options as $option_key => $option)
            <p>
              選択肢{{ $option_key + 1 }}：{{ $option->text }}
              <span>
                @if ($option->is_correct)
                  (正解)
                @endif  
              </span>
            </p>
            @endforeach
          </div>
        </div>
      @endforeach
    <a href="{{ route('admin.create') }}">クイズ新規作成</a>
  </main>
  <script src="{{ asset('js/deleteQuestion.js') }}"></script>
</x-app-layout>
