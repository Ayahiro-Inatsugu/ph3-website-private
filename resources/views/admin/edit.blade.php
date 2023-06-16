<x-app-layout>
    <div class="flex flex-col items-center justify-center w-screen mt-20 mb-20">
      <h1>クイズ{{ $quiz->id }}編集</h1>
      <div class="flex flex-col items-center justify-center w-full gap-12 mt-12">
        <form action="{{ route('admin.update', $quiz->id) }}" method="POST" class="w-full">
          @csrf
          @method('PUT')
          <div class="flex flex-col items-center justify-center w-full gap-4">
            <div class="flex flex-col items-center justify-center w-full gap-2">
              <label for="text">問題文</label>
              <textarea rows="3" name="text" id="text" class="border w-3/4">{{ $quiz->text }}</textarea>
            </div>
            <div class="flex flex-col items-center justify-center w-full gap-2">
              @foreach ($quiz->options as $option)
                <label for="option_{{ $option->id }}">選択肢{{ $loop->iteration }}</label>
                <input type="hidden" name="optionId[]" value="{{ $option->id }}">
                <input type="text" name="option[]" id="option_{{ $option->id }}" value="{{ $option->text }}" class="w-1/3">
              @endforeach
            </div>
            <div class="flex flex-col items-center justify-center w-full gap-2">
              <label for="answer">答え</label>
              <div class="flex items-center justify-center gap-4">
                @foreach ($quiz->options as $option)
                <div>
                  <label for="answer_{{ $loop->iteration }}">選択肢{{ $loop->iteration }}</label>
                  <input type="radio" name="answer" id="answer_{{ $loop->iteration }}" value="{{ $loop->iteration }}" @if($option->is_correct === 1) checked @endif>
                </div>
                @endforeach
              </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full gap-2">
              <button type="submit" class="border text-white bg-green-400 p-2">更新</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</x-app-layout>
