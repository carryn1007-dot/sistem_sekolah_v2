<div class="mb-8 flex items-end justify-between border-b border-[#E5E3DB] pb-5">

    <div>
        <div class="mb-2 flex items-center gap-2 text-xs text-slate-400">
            <a href="/" class="hover:text-[#16213A]">
                Buku Induk
            </a>
            <span>→</span>
            <span class="text-[#16213A]">
                {{ $title }}
            </span>
        </div>

        <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
            Sistem Sekolah
        </p>

        <h1 class="font-display text-3xl font-semibold text-[#16213A]">
            {{ $title }}
        </h1>

        @isset($description)
            <p class="mt-1 text-sm text-slate-500">
                {{ $description }}
            </p>
        @endisset
    </div>

</div>