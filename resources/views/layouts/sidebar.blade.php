<aside class="sidebar lg:w-72 flex lg:fixed left-0 top-0 z-30 mt-12 lg:min-h-screen h-full">
    <div class="text-white w-72 border-solid border-r border-zinc-700">
        <ul class="w-full">
            <li class="post" id="expended">
                Post Management1
                <ul class="dd hidden">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    </ul>
                </li>

                <li class="post" id="expended">
                Post Management2
                <ul class="dd hidden">
                    <li>11</li>
                    <li>22</li>
                    <li>33</li>
                    <li>44</li>
                    </ul>
                </li>
            </ul>
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
    if (this.getElementsByClassName("dd")[0].classList[1] === "hidden") {
        this.getElementsByClassName("dd")[0].classList.toggle("show");
        this.getElementsByClassName("dd")[0].classList.remove("hidden");
   }else{
    console.log(this.getElementsByClassName("dd"));
    this.getElementsByClassName("dd")[0].classList.add("hidden");
    this.getElementsByClassName("dd")[0].classList.remove("show");
   }
   

    
  });
}


</script>