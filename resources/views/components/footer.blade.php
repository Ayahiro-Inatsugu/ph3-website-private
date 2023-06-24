<footer class="flex flex-col items-center justify-center w-screen h-96 gap-8 text-gray-500">
  <div class="flex flex-col gap-6 w-screen h-56 pt-20 pb-56 border-t-2 border-b-2">
    <div class="flex items-center justify-center">
      <img src="{{ asset('storage/icon/posse-logo.svg') }}" alt="POSSEロゴ" class="w-48">
    </div>
    <p class="flex items-center justify-center gap-1">
      <span>POSSE公式サイト</span>
      <a href="https://posse-ap.com/"><img src="{{ asset('storage/icon/icon-link-gray-dark.svg') }}" alt="リンク"></a>
    </p>
    <nav>
      <ul class="flex items-center justify-center gap-2 text-sm font-bold text-gray-500">
        <li class="border rounded-full p-3">
          <a href="https://twitter.com/posse_program">
            <img src="{{ asset('storage/icon/icon-twitter.svg') }}" alt="Twitterアイコン">
          </a>
        </li>
        <li class="border rounded-full p-3">
          <a href="https://www.instagram.com/posse_programming/">
            <img src="{{ asset('storage/icon/icon-instagram.svg') }}" alt="インスタアイコン">
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="flex items-center justify-center w-screen h-4">
    <p class="text-xs">©2022 POSSE</p>
  </div>
</footer>
