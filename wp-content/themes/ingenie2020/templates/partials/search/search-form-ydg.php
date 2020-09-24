<form action="/" method="get" class="max-w-sm mb-0">
    <svg class="absolute inline-block w-4 h-4 m-1 fill-current text-ig-blue-200" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20">
        <path fill-rule="evenodd"
            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
            clip-rule="evenodd" />
    </svg>
    <input
        class="w-full py-1 pl-5 pr-8 leading-snug uppercase border rounded-md shadow appearance-none text-ig-blue-200 text-xxs focus:outline-none"
        type="text" placeholder="Search" aria-label="search YDG" name="s" placeholder="Search" id="search"
        value="<?php the_search_query();?>" required>
    <input type="hidden" name="post_type" value="young-drivers-guides" />
    <!-- // hidden 'young-drivers-guides' value -->

    <button class="absolute right-0 inline-block px-2 py-1 text-white bg-ig-blue-400 rounded-r-sm text-xxs"
        type="submit">
        GO
    </button>


</form>

</form>
