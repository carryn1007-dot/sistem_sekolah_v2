<x-layouts.app :title="$title">

    <div class="mb-6">
        <div class="mb-2 flex items-center gap-2 text-xs text-slate-400">
            <a href="{{ route('teachers.index') }}" class="hover:text-[#16213A]">
                Guru
            </a>
            <span>→</span>
            <span>Tambah Guru</span>
        </div>

        <h1 class="text-2xl font-bold text-[#16213A]">
            {{ $title }}
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Tambahkan data guru baru.
        </p>
    </div>


    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

        <form action="{{ route('teachers.store') }}" method="POST">
            @csrf

            <div class="grid gap-5 md:grid-cols-2">

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">
                        NIP
                    </label>

                    <input type="text" name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP"
                        class="w-full rounded-lg border border-slate-200 px-4 py-2.5 text-sm outline-none focus:border-[#16213A]">
                </div>


                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">
                        Nama Guru
                    </label>

                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan nama guru"
                        class="w-full rounded-lg border border-slate-200 px-4 py-2.5 text-sm outline-none focus:border-[#16213A]">
                </div>


                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">
                        Email
                    </label>

                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email"
                        class="w-full rounded-lg border border-slate-200 px-4 py-2.5 text-sm outline-none focus:border-[#16213A]">
                </div>


                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">
                        No. Telepon
                    </label>

                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Masukkan nomor telepon"
                        class="w-full rounded-lg border border-slate-200 px-4 py-2.5 text-sm outline-none focus:border-[#16213A]">
                </div>

            </div>


            <div class="mt-6 flex justify-end gap-3">

                <a href="{{ route('teachers.index') }}"
                    class="rounded-lg border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-600 hover:bg-slate-50">
                    Batal
                </a>

                <button type="submit"
                    class="rounded-lg bg-[#16213A] px-4 py-2.5 text-sm font-medium text-white hover:bg-slate-700">
                    Simpan
                </button>

            </div>

        </form>

    </div>

</x-layouts.app>