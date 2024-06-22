<x-app-layout>

    <div class="content">
        <!-- breadcrumb -->
        <div class="flex justify-normal">
            <div class="text-md font-semibold text-semiwhite-100 uppercase pb-16">
                {{ __("Dashboard") }} / <span class="text-whiteTrue-100">{{ __("Transaction List") }}</span>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- content -->
        <div class="content">
            <div class="card">
                <div class="flex justify-center">
                    <div class="w-2/6 border-r border-main-300 px-3">
                        <div class="text-md font-serif uppercase text-whiteTrue-100">
                            {{ __("No. Transaction") }} <br>
                            <div class="text-3xl font-semibold text-greenTrue-100">
                                300
                            </div>
                            <span class="text-sm text-main-300">Income & Expense</span>
                        </div>
                    </div>
                    <div class="w-2/6 border-r border-main-300 pl-10">
                        <div class="text-md font-serif uppercase text-whiteTrue-100">
                            {{ __("Total Income") }} <br>
                            <div class="text-3xl font-semibold text-greenTrue-100">
                                300.00 Tk
                            </div>
                            <span class="text-sm text-main-300">150 Income</span>
                        </div>
                    </div>
                    <div class="w-2/6 pl-10">
                        <div class="text-md font-serif uppercase text-whiteTrue-100">
                            {{ __("Total Expense") }} <br>
                            <div class="text-3xl font-semibold text-greenTrue-100">
                                300.00 Tk
                            </div>
                            <span class="text-sm text-main-300">150 Expense</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bottom -->
            <div class="card mt-5">
                <div class="card-header">
                    <div class="flex justify-between">
                        <div class="text-md font-semibold text-semiwhite-100 uppercase pb-16">
                            {{ __("Transaction List") }}
                        </div>
                        <div class="a">
                            <a href="" class="btn btn-success py-2 px-3">Add Expense</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="py-0">
                        <table class="table-auto text-semiwhite-100 border-collapse w-full">
                            <thead class="border-t border-b border-main-300 text-left uppercase">
                                <tr>
                                    <th class="py-3">S.L</th>
                                    <th class="py-3">Expense Name</th>
                                    <th class="py-3">Expense Type</th>
                                    <th class="py-3">Date</th>
                                    <th class="py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3 border-b border-main-300">1</td>
                                    <td class="py-3 border-b border-main-300">
                                        Malcolm Lockyer</td>
                                    <td class="py-3 border-b border-main-300">
                                        1961</td>
                                    <td class="py-3 border-b border-main-300">
                                        1961</td>
                                    <td class="py-3 border-b border-main-300">
                                        1961</td>
                                </tr>
                                <tr>
                                    <td class="py-3 border-b border-main-300">1</td>
                                    <td class="py-3 border-b border-main-300">
                                        Malcolm Lockyer</td>
                                    <td class="py-3 border-b border-main-300">
                                        1961</td>
                                    <td class="py-3 border-b border-main-300">
                                        1961</td>
                                    <td class="py-3 border-b border-main-300">
                                        1961</td>
                                </tr>
                                <tr>
                                    <td class="py-3 border-b border-main-300">1</td>
                                    <td class="py-3 border-b border-main-300">
                                        Malcolm Lockyer</td>
                                    <td class="py-3 border-b border-main-300">
                                        1961</td>
                                    <td class="py-3 border-b border-main-300">
                                        1961</td>
                                    <td class="py-3 border-b border-main-300">
                                        1961</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pt-6 pb-3 text-semiwhite-100 text-sm">
                            <div class="flex justify-between">
                                <div class="p">
                                    Displaying 1 to 7 of 100 entries
                                </div>
                                <div class="p">
                                    Displaying 1 to 7 of 100 entries
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->
    </div>
</x-app-layout>