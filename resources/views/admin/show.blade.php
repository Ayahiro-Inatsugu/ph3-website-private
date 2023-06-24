<x-app-layout>
    <div class="flex flex-col items-center justify-center w-screen mt-20 mb-20 gap-16">
      <div class="mb-8">
        <h1>クイズ{{ $quiz->id }}</h1>
      </div>
      <div class="flex flex-col items-center justify-center gap-4">
        <p>{{ $quiz->text }}</p>
        <div>
          <ul class="flex items-center justify-center gap-4">
            @foreach ($quiz->options as $key => $option)
              <li>
                {{ $key + 1 }}:
                <span>{{ $option->text }}</span>
              </li>
            @endforeach
          </ul>
        </div>
        <div>
          <a href="{{ route('admin.edit', $quiz->id) }}">
            <button class="border text-white bg-green-400 p-2">編集</button>
          </a>
        </div>
      </div>
    </div>
</x-app-layout>
