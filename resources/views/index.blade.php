<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>POSSEとは</title>
  @vite('resources/css/app.css')
</head>
<x-layout>
  <main class="flex flex-col items-center justify-center w-screen mt-20 mb-20">
    <section class="w-screen h-screen relative">
      <div class="flex flex-col items-center justify-center w-2/5 h-72 bg-gray-200 rounded-xl pt-8 pb-8 gap-2 absolute z-10 left-9 inset-y-1/4">
        <p class="text-lg font-bold text-blue-600">
          学生プログラミングコミュニティPOSSE(ポッセ)
        </p>
        <p class="text-6xl leading-snug font-bold text-black">
          自分史上最高を<br>仲間と。
        </p>
      </div>
      <div class="w-2/3 absolute right-0">
        <img src="{{ asset('storage/img-hero.jpg') }}" alt="" class="rounded-l-3xl">
      </div>
    </section>
  
    <section class="flex flex-col items-center justify-center w-4/5 pt-10 pb-32 gap-8">
      <div class="flex flex-col items-center justify-center gap-4">
        <h2 class="text-4xl font-bold">POSSEとは</h2>
        <p class="text-lg font-bold text-blue-600">About POSSE</p>
      </div>
      <div class="flex items-center justify-center gap-12">
        <img src="{{ asset('storage/img-about.jpg') }}" alt="" class="w-5/12 rounded-2xl">
        <p class="w-5/12">
          学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。
          プログラミングだけではありません。<br>オフラインでのイベントや、旅行など様々な企画を行っています！<br>
          それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
        </p>
      </div>
    </section>

    <section class="w-2/3 h-72 rounded-3xl bg-bg-image-line bg-cover bg-center relative flex flex-col items-center justify-center pt-14 pb-14 gap-32 before:bg-blue-500 before:absolute before:inset-0 before:opacity-90 before:rounded-3xl">
      <div class="relative w-full flex flex-col items-center justify-center gap-8">
        <div class="flex items-center justify-center gap-2">
          <div class="flex items-center w-8 h-8 rounded-full bg-white">
            <img src="{{ asset('storage/icon/icon-line.svg') }}" alt="" class="w-8">
          </div>
          <div class="text-3xl text-white font-bold">
            POSSE 公式LINE
          </div>
        </div>
        <p class="text-center text-white leading-relaxed">公式LINEにてご質問を随時受け付けております。<br>
          詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致しますので<br>
          下記ボタンより友達追加をお願いします！
        </p>
        <div class="flex items-center justify-center w-full">
          <a href="https://line.me/R/ti/p/@651htnqp?from=page" class="flex items-center justify-center w-1/3 h-12 gap-4 bg-white rounded-3xl">
            LINE追加
            <img src="{{ asset('storage/icon/icon-link-dark.svg') }}" alt="リンクアイコン">
          </a>
        </div>
      </div>
    </section>
    
      <a href="https://line.me/R/ti/p/@651htnqp?from=page" class="flex items-center justify-center rounded-2xl w-1/5 h-16 gap-4 bg-green-400 fixed bottom-12 right-12">
        <div class="flex items-center w-8 h-8 rounded-full bg-white">
          <img src="{{ asset('storage/icon/icon-line.svg') }}" alt="LINEアイコン" class="w-8">
        </div>
        <p class="text-white font-bold">POSSE公式LINEで<br>
          最新情報をGET！
        </p>
        <img src="{{ asset('storage/icon/icon-link-light.svg') }}" alt="">
      </a>
  </main>
</x-layout>
</html>
