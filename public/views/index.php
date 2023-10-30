<!DOCTYPE html>
<html lang="en" class="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Movie</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css?php echo time(); ?>"/>
  </head>
  <body class="font-Work transition-colors bg-[#f5f6f8] dark:bg-mainColor relative">

    <!-- CURSOR TRACKING CIRCLE -->
    <!-- <div id="circle" class="circle dark:shadow-custom dark:border-custom dark:border-2 animate-colorChange transition-colors duration-500"></div> -->
    <!-- CURSOR TRACKING CIRCLE -->
    
    <!-- NAVBAR START -->
    <nav
      class="pt-6 px-8 bg-transparent fixed text-mainColor dark:text-white flex justify-between items-center w-full z-50"
    >
      <p class="text-2xl font-bold gradient-text-light unselectable">MOVΛ</p>

      <div class="flex gap-8 font-normal text-black dark:text-[#d1d5db]">
        <a href="./home.php" class="relative inline-block hover:before:w-full before:block before:bg-black dark:before:bg-[#d1d5db] before:absolute before:inset-x-0 before:left-0 before:bottom-[-2px] before:w-0 before:h-[1px] before:transition-width before:duration-300">Explore</a>
      </div>

      <!-- <div class="transition duration-500 ease-in-out hidden sm:block">
        <div class="flex justify-center items-center">
          <input onclick="darkMode()" type="checkbox" id="darkModeToggle" class="sr-only">
          <label for="darkModeToggle" class="cursor-pointer">
              <div class="relative">
                  <div class="block bg-[#d1d5db] dark:bg-[#373739] w-14 h-8 rounded-full"></div>
                  <div class="dot absolute right-1 top-1 bg-white w-6 h-6 rounded-full transition-transform duration-500 transform z-20"></div>
                  <svg xmlns="http://www.w3.org/2000/svg" id="svg1" class="text-black dark:text-white absolute transition-opacity duration-100 ease-in-out scale-75 left-1 top-1 z-10 icon icon-tabler icon-tabler-sun-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 19a1 1 0 0 1 .993 .883l.007 .117v1a1 1 0 0 1 -1.993 .117l-.007 -.117v-1a1 1 0 0 1 1 -1z" stroke-width="0" fill="currentColor"></path>
                    <path d="M18.313 16.91l.094 .083l.7 .7a1 1 0 0 1 -1.32 1.497l-.094 -.083l-.7 -.7a1 1 0 0 1 1.218 -1.567l.102 .07z" stroke-width="0" fill="currentColor"></path>
                    <path d="M7.007 16.993a1 1 0 0 1 .083 1.32l-.083 .094l-.7 .7a1 1 0 0 1 -1.497 -1.32l.083 -.094l.7 -.7a1 1 0 0 1 1.414 0z" stroke-width="0" fill="currentColor"></path>
                    <path d="M4 11a1 1 0 0 1 .117 1.993l-.117 .007h-1a1 1 0 0 1 -.117 -1.993l.117 -.007h1z" stroke-width="0" fill="currentColor"></path>
                    <path d="M21 11a1 1 0 0 1 .117 1.993l-.117 .007h-1a1 1 0 0 1 -.117 -1.993l.117 -.007h1z" stroke-width="0" fill="currentColor"></path>
                    <path d="M6.213 4.81l.094 .083l.7 .7a1 1 0 0 1 -1.32 1.497l-.094 -.083l-.7 -.7a1 1 0 0 1 1.217 -1.567l.102 .07z" stroke-width="0" fill="currentColor"></path>
                    <path d="M19.107 4.893a1 1 0 0 1 .083 1.32l-.083 .094l-.7 .7a1 1 0 0 1 -1.497 -1.32l.083 -.094l.7 -.7a1 1 0 0 1 1.414 0z" stroke-width="0" fill="currentColor"></path>
                    <path d="M12 2a1 1 0 0 1 .993 .883l.007 .117v1a1 1 0 0 1 -1.993 .117l-.007 -.117v-1a1 1 0 0 1 1 -1z" stroke-width="0" fill="currentColor"></path>
                    <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0" fill="currentColor"></path>
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" id="svg2" class="text-black dark:text-white absolute transition-opacity duration-100 ease-in-out scale-75 right-1 top-1 z-10 icon icon-tabler icon-tabler-sun-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M3 3l18 18"></path>
                  <path d="M16 12a4 4 0 0 0 -4 -4m-2.834 1.177a4 4 0 0 0 5.66 5.654"></path>
                  <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                  </svg>
              </div>
          </label>
      </div> -->
    </div>

    </nav>
    <!-- NAVBAR END -->

    <!-- CONTENT START -->
    <main class="h-screen flex items-center justify-center relative">
      <div class="flex flex-col gap-16 justify-center items-center h-screen text-center">
        <h1 class="text-5xl font-light w-[80vw] sm:w-[500px] gradient-text-dark unselectable" id="headerText">Stop wasting your time. <br> Find the best movie to watch here.</h1>
        
        <div class="relative">
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-purple-600 blur rounded-full animate-gradient">    
            </div>
          <form action="./filter.php">
            <input type="text" name="" id="" autocomplete="off"
            class="relative z-10 px-7 py-4 w-[80vw] sm:w-[500px] text-mainColor dark:text-[white] bg-white dark:bg-mainColor rounded-full leading-none flex items-center focus:dark:stroke-none font-medium placeholder-opacity-0 sm:placeholder-opacity-100 placeholder:dark:font-light transition duration-200 ease-in-out focus:outline-none" placeholder="Yaksha: Ruthless Operations">
            </input>
            <button type="submit" class="absolute right-4 top-3 z-20">
              <svg xmlns="http://www.w3.org/2000/svg" class="dark:text-[#d1d5db]  icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                <path d="M21 21l-6 -6"></path>
              </svg>
            </button>
            <!-- <div class="absolute w-16 h-16 border-1 border top-0 left-1/2 rounded-full animate-scale -z-10 bg-mainColor"></div> -->
          </form>
        </div>

      </div>
    </main>
    <!-- CONTENT END -->

  <script src="../js/main.js"></script>
  </body>
</html>