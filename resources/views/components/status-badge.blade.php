@php
    $badgeClass = match ($status) {
        'Aktif' => 'border border-green-200 bg-green-50 text-green-700',
        'Tidak Aktif' => 'border border-red-200 bg-red-50 text-red-700',
        default => 'border border-gray-200 bg-gray-50 text-gray-600',
    };
@endphp

<span class="{{ $badgeClass }} inline-flex px-2.5 py-1 text-xs font-medium">
    {{ $status }}
</span>