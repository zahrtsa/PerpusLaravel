<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MindHealer</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet" />
  <link rel="icon" href="img/logo.png" />
  <link rel="stylesheet" href="css/style2.css" />
</head>

<body>
  <nav class="w-full h-[100px] px-20 flex items-center justify-between border">
    <a class="flex items-center gap-2" href="/"><img src="img/logo.png" width="50" height="15"/>
      <h1 class="font-Noto text-4xl font-semibold">MindHealer</h1>
    </a>
    <div class="font-PT flex gap-10">
      <a href="/" class="hover:underline underline-offset-4">HOME</a>
      <a href="/login" class="hover:underline underline-offset-4">LOGIN</a>
      <a href="/register" class="hover:underline underline-offset-4">REGISTER</a>
      <button class="searchBtn"><img src="img/search.svg" alt="" /></button>
    </div>
  </nav>
  <div
    class="w-full h-[100px] px-20 border flex items-center justify-between searchbar hidden transition ease-in duration-300">
    <form action="search.html">
      <div class="flex gap-2">
        <img src="img/search.svg" alt="" />
        <input class="focus:outline-none" type="text" placeholder="Search" />
      </div>
    </form>

    <button class="closeBtn"><img src="img/close.svg" alt="" /></button>
  </div>

  <section class="w-full h-[400px] bg-[#F5F1ED] flex gap-16 justify-center items-center">
    <div class="flex items-center">
      <img class="w-[150px] h-[223px] shadowLeft" src="img/selena-cover.jpg" alt="" />
      <img class="w-[178px] h-[265px] z-10" src="img/siputih-cover.jpg" alt="" />
      <img class="w-[150px] h-[223px] shadowLeft" src="img/lumpu-cover.jpg" alt="" />
    </div>

    <div class="">
      <h1 class="font-Noto text-[64px]">This Month</h1>
      <hr class="w-[100px]  border-black mt-2" />
      <p class="w-[435px] font-Lato font-light text-[#808080] mt-5">
        No matter how joyful or happy, life must carry on. Let time be the healer.
      </p>
      <form action="home.html">
        <button class="w-[200px] h-[50px] border border-black mt-8">
          READ MORE
        </button>
      </form>
    </div>
  </section>

  <section class="w-full py-14 flex flex-col items-center gap-14">
    <div class="flex flex-col items-center">
      <h1 class="font-Noto text-4xl font-semibold">Newest Editions</h1>
      <hr class="w-[100px]  border-black mt-7" />
      <p class="w-[435px] font-Lato font-light text-[#808080] mt-5 text-center">
        The latest edition available in our library this time is a book by Tere Liye which is certainly in great demand. and also enjoy your healing while reading that book!!
      </p>
    </div>

    <div class="flex gap-24">
      <a href="detail.html" class="flex flex-col items-center">
        <img class="w-[150px] h-[223px] shadowCard" src="img/bumi-cover.jpg" alt="" />
        <h1 class="font-Noto text-2xl mt-2">Bumi</h1>
        <p class="font-Lato text-sm font-light mt-1 text-[#808080]">
          Tere Liye
        </p>
      </a>
      <a href="detail.html" class="flex flex-col items-center">
        <img class="w-[150px] h-[223px] shadowCard" src="img/bulan-cover.jpg" alt="" />
        <h1 class="font-Noto text-2xl mt-2">Bulan</h1>
        <p class="font-Lato text-sm font-light mt-1 text-[#808080]">
          Tere Liye
        </p>
      </a>
      <a href="detail.html" class="flex flex-col items-center">
        <img class="w-[150px] h-[223px] shadowCard" src="img/matahari-cover.jpg" alt="" />
        <h1 class="font-Noto text-2xl mt-2">Matahari</h1>
        <p class="font-Lato text-sm font-light mt-1 text-[#808080]">
          Tere Liye
        </p>
      </a>
      <a href="detail.html" class="flex flex-col items-center">
        <img class="w-[150px] h-[223px] shadowCard" src="img/bintang-cover.jpg" alt="" />
        <h1 class="font-Noto text-2xl mt-2">Bintang</h1>
        <p class="font-Lato text-sm font-light mt-1 text-[#808080]">
          Tere Liye
        </p>
      </a>
      <a href="detail.html" class="flex flex-col items-center">
        <img class="w-[150px] h-[223px] shadowCard" src="img/komet-cover.jpg" alt="" />
        <h1 class="font-Noto text-2xl mt-2">Komet</h1>
        <p class="font-Lato text-sm font-light mt-1 text-[#808080]">
          Tere Liye
        </p>
      </a>
    </div>
  </section>

  <footer class="h-20 bg-[#eaeaea] flex items-center justify-center font-mono text-lg">
    Made with ♥ by MindHealer.
  </footer>
  <script src="js/script.js"></script>
</body>

</html>
