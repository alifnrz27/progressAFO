<div>
    <div class="w-screen h-screen relative flex justify-center items-center">
        <div class="relative">
            <div>
                <img src="{{ asset('src/img/bg register.jpeg') }}" class="w-screen h-screen opacity-90" alt="">
            </div>
            <div class="absolute top-0 left-0 w-screen h-screen bg-black bg-opacity-45">

            </div>
        </div>
        <div class="absolute top-0 left-0 w-screen h-screen flex justify-center items-center">
            <div class="flex flex-col items-center justify-center h-full">
                {{-- bagian logo --}}
                <div class="flex items-center gap-2 justify-center mb-4">
                    <div>
                        <img src="{{ asset('src/img/Untitled design (21).png') }}" class="w-[100px] rounded-full" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('src/img/LOGO-TEKNIK-BIOMEDIS-WITH-BG-PUTIH-min-1024x1024.png') }}" class="w-[100px] rounded-full" alt="">
                    </div>
                </div>
                {{-- akhir bagian logo --}}
                <div class="bg-white w-[400px] px-4 py-4 rounded-lg">
                    {{-- ini untuk tulisan login --}}
                    <div class="text-center text-[20px] font-bold">
                        Register
                    </div>
                    {{-- ini akhir untuk tulisan login --}}

                    {{-- ini untuk form email password --}}
                    <div class="py-4">
                        <input wire:model.lazy="name" type="text" class="w-full border-2 rounded-md h-10 px-4 mb-4" placeholder="Insert Name">
                        <input wire:model.lazy="email" type="email" class="w-full border-2 rounded-md h-10 px-4 mb-4" placeholder="Insert Email">
                        <input wire:model.lazy="birth_date" type="date" class="w-full border-2 rounded-md h-10 px-4 mb-4" placeholder="Insert Birth Date">
                        <input wire:model.lazy="phone_number" type="text" class="w-full border-2 rounded-md h-10 px-4 mb-4" placeholder="Insert Phone_number">
                        <input wire:model.lazy="medical_record_number" type="text" class="w-full border-2 rounded-md h-10 px-4 mb-4" placeholder="Insert Medical_Record_Number">
                        <input wire:model.lazy="password" type="password" class="w-full border-2 rounded-md h-10 px-4" placeholder="Insert Password">
                    </div>
                    {{-- ini akhir untuk form email password --}}

                    {{-- ini tombol login --}}
                    <div>
                        <button wire:click="register" class="bg-[#0134b2] w-full py-2 rounded-md text-white font-bold">
                            Register
                        </button>
                    </div>
                    {{-- ini akhir tombol login --}}
                </div>
            </div>
        </div>
    </div>
</div>
