<x-layouts.app :title="$title">

    <div class="mb-6">
        <div class="mb-2 flex items-center gap-2 text-xs text-slate-400">
            <a href="{{ route('teachers.index') }}" class="hover:text-[#16213A]">
                Guru
            </a>
            <span>→</span>
            <span>Detail</span>
        </div>

        <h1 class="text-2xl font-bold text-[#16213A]">
            {{ $title }}
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Informasi lengkap guru.
        </p>
    </div>


    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

        <div class="grid gap-6 md:grid-cols-2">

            <div>
                <p class="text-xs font-medium uppercase text-slate-400">
                    NIP
                </p>

                <p class="mt-1 text-sm font-medium text-[#16213A]">
                    {{ $teacher['nip'] }}
                </p>
            </div>


            <div>
                <p class="text-xs font-medium uppercase text-slate-400">
                    Nama Guru
                </p>

                <p class="mt-1 text-sm font-medium text-[#16213A]">
                    {{ $teacher['name'] }}
                </p>
            </div>


            <div>
                <p class="text-xs font-medium uppercase text-slate-400">
                    Email
                </p>

                <p class="mt-1 text-sm text-slate-600">
                    {{ $teacher['email'] }}
                </p>
            </div>


            <div>
                <p class="text-xs font-medium uppercase text-slate-400">
                    No. Telepon
                </p>

                <p class="mt-1 text-sm text-slate-600">
                    {{ $teacher['phone'] }}
                </p>
            </div>

        </div>


        <div class="mt-8 flex justify-end gap-3">

            <a href="{{ route('teachers.index') }}"
                class="rounded-lg border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-600 hover:bg-slate-50">
                Kembali
            </a>

            <a href="{{ route('teachers.edit', $teacher['id']) }}"
                class="rounded-lg bg-[#16213A] px-4 py-2.5 text-sm font-medium text-white hover:bg-slate-700">
                Edit Data
            </a>

        </div>

    </div>

</x-layouts.app>