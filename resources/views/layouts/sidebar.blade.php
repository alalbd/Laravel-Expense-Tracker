<aside class="sidebar lg:w-72 flex lg:fixed left-0 top-0 z-30 mt-12 lg:min-h-screen h-full">
    <div class="text-white w-72 border-solid border-r border-zinc-700">
        <nav class="flex flex-col">
            <ul class="w-full px-4 py-8">
                <li>
                    <div class="py-2 text-left font-serif font-semibold text-xs text-gray-400">Expenses</div>
                    <ul>
                        <li class="post" id="expended">
                            <a href="#" class="flex flex-col py-2 px-4 font-serif font-medium text-md text-semiwhite-100 hover:bg-zinc-800 hover:text-whiteTrue-100 transition duration-200 ease-in-out">Post Management1</a>
                            <ul class="sideBar opacity-0">
                                <li>
                                    <a href="#" class="flex flex-col ml-4 py-1 px-4 text-semiwhite-100 hover:bg-zinc-800 transition-all duration-200 ease-in-out">Add Post</a>
                                </li>
                                <li>
                                    <a href="#" class="flex flex-col ml-4 py-1 px-4 text-semiwhite-100 hover:bg-zinc-800 transition-all duration-200 ease-in-out">Add New Post</a>
                                </li>
                                <li>
                                    <a href="#" class="flex flex-col ml-4 py-1 px-4 text-semiwhite-100 hover:bg-zinc-800 transition-all duration-200 ease-in-out translate-x-0">Tash Post</a>
                                </li>
                            </ul>
                        </li>

                        <li class="post" id="expended">
                            Post Management2
                            <ul class="sideBar hidden">
                                <li>11</li>
                                <li>22</li>
                                <li>33</li>
                                <li>44</li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="py-2 text-left font-serif font-semibold text-xs text-gray-400">Expenses</div>
                    <ul>
                        <li class="post" id="expended">
                            Post Management1
                            <ul class="sideBar hidden">
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                            </ul>
                        </li>

                        <li class="post" id="expended">
                            Post Management2
                            <ul class="sideBar hidden">
                                <li>11</li>
                                <li>22</li>
                                <li>33</li>
                                <li>44</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>


</aside>




<script>
//    function exnav() {
//     document.querySelector("#postMenu").classList.toggle("active");
//     document.querySelector(".dd").classList.toggle("hidden");
//    }

const ddd = document.getElementsByClassName("post");
var i;

for (i = 0; i < ddd.length; i++) {
    ddd[i].addEventListener("click", function() {
        this.classList.toggle("active1");
        if (this.getElementsByClassName("sideBar")[0].classList[1] === "opacity-0") {
            this.getElementsByClassName("sideBar")[0].classList.toggle("opacity-100");
            this.getElementsByClassName("sideBar")[0].classList.remove("opacity-0");
        } else {
            console.log(this.getElementsByClassName("sideBar"));
            this.getElementsByClassName("sideBar")[0].classList.add("opacity-0");
            this.getElementsByClassName("sideBar")[0].classList.remove("opacity-100");
        }



    });
}
</script>