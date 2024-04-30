<div>
    <div class="w-screen h-screen flex justify-between">
        <div class="hidden lg:block lg:w-2/12 h-full bg-[#0134b2] p-4 text-white">
            <div class="text-center text-l font-bold mb-4">
                Sistem Monitoring AFO
            </div>
            <hr>
            <div>
                <div class="flex gap-2 items-center mt-4 px-2 cursor-pointer">
                    <div>
                        <img src="{{ asset('src/img/icons/home.png') }}" class="w-[22px]" alt="">
                    </div>
                    <div>
                        Dashboard
                    </div>
                </div>
                <div class="flex gap-2 items-center mt-4 px-2 cursor-pointer">
                    <div>
                        <img src="{{ asset('src/img/icons/dashboard.png') }}" class="w-[22px]" alt="">
                    </div>
                    <div>
                        Monitoring Pasien
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-10/12 flex flex-col">
            <div class="p-4 flex justify-end items-center w-full">
                <div class="flex items-center gap-4 justify-end w-full">
                    <div class="text-gray-600">
                        Rudi
                    </div>
                    <div class="w-[30px] h-[30px] overflow-hidden rounded-full">
                        <img src="{{ asset('src/img/mihun.jpg') }}" class="w-[30px]" alt="">
                    </div>
                </div>
            </div>
            <div class="bg-gray-300 p-4 w-full h-full">
                <div class="font-semibold text-[27px] mt-3 mb-5">
                    Monitoring Data Pasien
                </div>
                <div class=" rounded-lg shadow-xl">
                    <div class="w-full p-3 font-bold text-[#0134b2] bg-white border-b-2 rounded-t-lg">
                        Data Pasien
                    </div>
                    <div class="p-5 bg-white rounded-b-lg">
                        <div class="w-full">
                            <table class="table-auto w-full border-collapse border border-gray-30y">
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">No Rekam Medis</td>
                                        <td class="border border-gray-300 px-4 py-2">1</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">Nama</td>
                                        <td class="border border-gray-300 px-4 py-2">Rudi</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">Tanggal Lahir</td>
                                        <td class="border border-gray-300 px-4 py-2">3 Juni 1993</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">Tanggal Rehab</td>
                                        <td class="border border-gray-300 px-4 py-2">30 April 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
