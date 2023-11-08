    <!-- NAVBAR START -->
    <nav class=" w-full z-40 transition duration-200 ease-in-out">
        <div class="py-6 px-8 flex justify-between items-center w-full">
            <a href="./index.php" class="text-2xl font-bold gradient-text-light">MOVΛ</a>

            <div class="flex gap-4 items-center">
                <button type="button" onclick="showSearch()" class="text-[#f5f6f8]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                        <path d="M21 21l-6 -6"></path>
                    </svg>
                </button>

                <a href="./home.php" class="text-semiWhite relative inline-block hover:before:w-full before:block before:bg-black dark:before:bg-[#d1d5db] before:absolute before:inset-x-0 before:left-0 before:bottom-[-2px] before:w-0 before:h-[1px] before:transition-width before:duration-300">Home</a>
            </div>


            <!-- SEARCH SECTION START -->
            <div class="absolute left-0 top-0 h-screen w-[100vw] backdrop-blur-lg flex justify-center hidden opacity-0 transition-opacity duration-500 ease-in-out z-50"
                id="searchField">
                <form action="filter.php" method="get" class="mt-28 relative flex flex-col gap-8">
                    <input name="search" type="text" placeholder="Title, Actor, Genre, Country" autocomplete="off" style="padding-left: 1rem;"
                        class="pr-12 py-2 w-[600px] h-14 rounded-full shadow-lg focus:outline-none text-mainColor"
                        id="searchInput">

                    <!-- <a href="./filter.php" class="absolute left-2 top-2 text-[#f5f6f8] bg-mainColor rounded-full px-4 py-2">Filter</a> -->

                    <button type="submit" class="absolute right-4 top-4 text-mainColor">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                            <path d="M21 21l-6 -6"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <!-- SEARCH SECTION END -->
        </div>
    </nav>
    <!-- NAVBAR END -->