<div>
    <div class="w-screen h-screen bg-blue-400 flex justify-center items-center">
        <div class="bg-white w-[400px] px-4 py-4 rounded-lg">
            {{-- ini untuk tulisan login --}}
            <div class="text-center text-[20px] font-bold">
                Login
            </div>
            {{-- ini akhir untuk tulisan login --}}

            {{-- ini untuk form email password --}}
            <div class="py-4">
                <input wire:model.lazy="email" type="email" class="w-full border-2 rounded-md h-10 px-4 mb-4" placeholder="Masukkan Email Anda">
                <input wire:model.lazy="password" type="password" class="w-full border-2 rounded-md h-10 px-4" placeholder="Masukkan Password Anda">
            </div>
            {{-- ini akhir untuk form email password --}}

            {{-- ini tombol login --}}
            <div>
                <button wire:click="authenticate" class="bg-blue-400 w-full py-2 rounded-md text-white font-bold">
                    Login
                </button>
            </div>
            {{-- ini akhir tombol login --}}
        </div>
    </div>
</div>
