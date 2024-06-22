<x-app-layout>

    <div class="content">
        <!-- breadcrumb -->
        <div class="flex justify-normal">
            <div class="text-md font-semibold text-semiwhite-100 uppercase pb-16">
                {{ __("Dashboard") }} / <span class="text-whiteTrue-100">{{ __("Add Expense") }}</span>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- content -->
        <div class="content">
            <div class="area">
                <div class="form">
                    <form action="" method="post">
                        @csrf

                        <div class="flex justify-between pb-16">
                            <div class="dd">
                                <div class="text-md font-serif uppercase text-whiteTrue-100">
                                    {{ __("Add a New Expense") }} <br>
                                    <span class="text-sm text-main-300">Track Your Transaction</span>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="btn btn-main mr-5 hover:bg-greenTrue-100 hover:text-main-100">
                                    {{ __("All Expense") }}
                                </div>
                                <div class="btn btn-success">
                                    {{ __("Publish Expense") }}
                                </div>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="w-4/6 pr-10">
                                <div class="card">
                                    <div class="card-header pb-5">
                                        <div class="text-md font-serif uppercase text-whiteTrue-100">
                                            {{ __("BASIC INFO") }}
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="py-4">
                                            <label for="name"
                                                class="text-semiwhite-100 block">{{ __("Expense Name") }}</label>
                                            <input type="text" name="expense_name" id="name" placeholder="Expense Name"
                                                class="input">
                                        </div>

                                        <div class="py-4">
                                            <label for="desc"
                                                class="text-semiwhite-100 block">{{ __("Expense Name") }}</label>
                                            <textarea name="expense_desc" id="desc" rows="3"
                                                class="input">{{ __("Expense description") }}</textarea>
                                        </div>

                                        <div class="py-4">
                                            <label for="type"
                                                class="text-semiwhite-100 block">{{ __("Expense type") }}</label>
                                            <select name="expense_type" id="type" class="input text-lg">
                                                <option value="">Select expense type</option>
                                                <option value="1">Income</option>
                                                <option value="2">Expense</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-2/6">
                                <div class="card">
                                    <div class="card-header pb-5">
                                        <div class="text-md font-serif uppercase text-whiteTrue-100">
                                            {{ __("AMOUNT") }}
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="py-4">
                                            <label for="amount"
                                                class="text-semiwhite-100 block">{{ __("Transaction Amount") }}</label>
                                            <input type="number" name="expense_amount" id="amount"
                                                placeholder="Expense Amount" class="input">
                                        </div>
                                        <div class="py-4">
                                            <label for="date"
                                                class="text-semiwhite-100 block">{{ __("Transaction Date") }}</label>
                                            <input type="date" name="expense_date" id="date" class="input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- content -->
    </div>
</x-app-layout>