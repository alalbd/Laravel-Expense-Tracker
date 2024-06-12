<aside class="sidebar lg:w-72 flex lg:fixed left-0 top-0 z-30 mt-12 lg:min-h-screen h-full">
    <div class="text-white w-72 border-solid border-r border-main-300">
        <nav class="flex flex-col">
            <ul class="w-full px-4 py-8">
                <li class="pb-3">
                    <div class="py-2 mb-1 text-left font-serif font-semibold text-xs text-gray-400">Expenses</div>
                    <ul>
                        <li class="navside" id="expended">
                            <a href="#" class="expendarea flex justify-between navbtn navbtnColor">
                                <div class="ff">
                                    Expense Management  
                                </div>
                                <span class="arrowto"></span>
                            </a>
                            <ul class="sideBar drop_hidden" id="leftbar">
                                <li>
                                    <a href="{{ Route("expense.create") }}" class="flex flex-col ml-4 navbtn navbtnColor {{ Request::url("expense/create") ? "active" : "" }}">Add Expense</a>
                                </li>
                                <li>
                                    <a href="#" class="flex flex-col ml-4 navbtn navbtnColor">Add New Post</a>
                                </li>
                                <li>
                                    <a href="#" class="flex flex-col ml-4 navbtn navbtnColor">Tash Post</a>
                                </li>
                            </ul>
                        </li>

                        <li class="navside" id="expended">
                            <a href="#" class="flex justify-between navbtn navbtnColor">
                                <div class="ff">
                                    Expense Report
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="py-2 mb-1 text-left font-serif font-semibold text-xs text-gray-400">User Management</div>
                    <ul>
                        <li class="navside" id="expended">
                            <a href="#" class="expendarea flex justify-between navbtn navbtnColor">
                                <div class="ff">
                                    User Profile    
                                </div>
                                <span class="arrowto"></span>
                            </a>
                            <ul class="sideBar drop_hidden" id="leftbar">
                                <li>
                                    <a href="#" class="flex flex-col ml-4 navbtn navbtnColor">Add Post</a>
                                </li>
                                <li>
                                    <a href="#" class="flex flex-col ml-4 navbtn navbtnColor">Add New Post</a>
                                </li>
                                <li>
                                    <a href="#" class="flex flex-col ml-4 navbtn navbtnColor">Tash Post</a>
                                </li>
                            </ul>
                        </li>

                        <li class="navside" id="expended">
                            <a href="#" class="flex justify-between navbtn navbtnColor">
                                <div class="ff">
                                    Post Management1    
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>


</aside>




<script>
const ddd = document.getElementsByClassName("navside");
var i;

for (i = 0; i < ddd.length; i++) {
    ddd[i].addEventListener("click", function() {
        this.classList.toggle("active");
        const data = this.getElementsByClassName("sideBar")[0];
        if (data.classList[1] === "drop_hidden") {
            data.classList.toggle("show");
            data.classList.remove("drop_hidden");
        } else {
            data.classList.add("drop_hidden");
            data.classList.remove("show");
        }
    });
}
</script>