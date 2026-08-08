<x-layouts.app :title="$title">

    <div class="mb-6 flex items-center justify-between">
        <div>
            <div class="mb-2 flex items-center gap-2 text-xs text-slate-400">
                <a href="/" class="hover:text-[#16213A]">
                    Dashboard
                </a>
                <span>→</span>
                <span>Guru</span>
            </div>

            <h1 class="text-2xl font-bold text-[#16213A]">
                {{ $title }}
            </h1>

            <p class="mt-1 text-sm text-slate-500">
                Kelola data guru sekolah.
            </p>
        </div>

        <a href="{{ route('teachers.create') }}"
            class="rounded-lg bg-[#16213A] px-4 py-2 text-sm font-medium text-white hover:bg-slate-700">
            + Tambah Guru
        </a>
    </div>


    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">

                <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                    <tr>
                        <th class="px-6 py-4">No</th>
                        <th class="px-6 py-4">NIP</th>
                        <th class="px-6 py-4">Nama Guru</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">No. Telepon</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">

                    @forelse ($teachers as $teacher)

                        <tr class="hover:bg-slate-50">

                            <td class="px-6 py-4 text-slate-600">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-4 font-medium text-[#16213A]">
                                {{ $teacher['nip'] }}
                            </td>

                            <td class="px-6 py-4 text-slate-700">
                                {{ $teacher['name'] }}
                            </td>

                            <td class="px-6 py-4 text-slate-600">
                                {{ $teacher['email'] }}
                            </td>

                            <td class="px-6 py-4 text-slate-600">
                                {{ $teacher['phone'] }}
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">

                                    <a href="{{ route('teachers.show', $teacher['id']) }}"
                                        class="rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-medium text-slate-600 hover:bg-slate-100">
                                        Detail
                                    </a>

                                    <a href="{{ route('teachers.edit', $teacher['id']) }}"
                                        class="rounded-lg border border-blue-200 px-3 py-1.5 text-xs font-medium text-blue-600 hover:bg-blue-50">
                                        Edit
                                    </a>

                                    <form action="{{ route('teachers.destroy', $teacher['id']) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data guru ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="rounded-lg border border-red-200 px-3 py-1.5 text-xs font-medium text-red-600 hover:bg-red-50">
                                            Hapus
                                        </button>

                                    </form>

                                </div>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center text-sm text-slate-400">
                                Belum ada data guru.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>
        </div>

    </div>

</x-layouts.app>