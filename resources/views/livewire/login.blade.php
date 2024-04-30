<div>
    <div class="w-screen h-screen relative flex justify-center items-center">
        <div class="relative">
            <div>
                <img src="{{ asset('src/img/bg login.jpeg') }}" class="w-screen h-screen opacity-90" alt="">
            </div>
            <div class="absolute top-0 left-0 w-screen h-screen bg-black bg-opacity-45">

            </div>
        </div>
        <div class="absolute top-0 left-0 w-screen h-screen">
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
                        Login
                    </div>
                    {{-- ini akhir untuk tulisan login --}}

                    {{-- ini untuk form email password --}}
                    <div class="py-4">
                        <input wire:model.lazy="email" type="email" class="w-full border-2 rounded-md h-10 px-4 mb-6" placeholder="Masukkan Email Anda">
                        @error('email')
                            <p class="-mt-6 text-sm text-red-600 fixed">{{ $message }}</p>
                        @enderror
                        <input wire:model.lazy="password" type="password" class="w-full border-2 rounded-md h-10 px-4" placeholder="Masukkan Password Anda">
                    </div>
                    {{-- ini akhir untuk form email password --}}

                    {{-- ini tombol login --}}
                    <div>
                        <button wire:click="authenticate" class="bg-[#0134b2] w-full py-2 rounded-md text-white font-bold">
                            Masuk
                        </button>
                    </div>
                    {{-- ini akhir tombol login --}}
                </div>
            </div>
        </div>
    </div>
</div>
