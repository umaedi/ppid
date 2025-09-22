@forelse ($fasilitas as $key => $item)
<tr class="align-middle text-center">
    <td>{{ $key + 1 }}</td>      
    <td>
        @if (!empty($item->logo))
        <img lazy="loading"
        src="{{ route('mpp-fasilitas', ['filename' => $item->logo]) }}"
        alt="Logo" class="img-fluid rounded" style="width: 50px; height: auto;">
        @else
            <span class="text-muted">No Image</span>
        @endif


    </td>
    <td>{{ $item->judul_fasilitas }}</td>
    <td>{{ Str::limit($item->deskripsi_fasilitas, 100) }}</td>
    <td>
        <span class="badge {{ $item->status == 'aktif' ? 'bg-success' : 'bg-danger' }}">
            {{ ucfirst($item->status) }}
        </span>
    </td>
    <td>
        <a href="{{ route('cms-fasilitas-edit', ['subdomain' => config('services.subdomain'), 'id' => $item->id]) }}" 
           class="btn btn-sm btn-success">
            <i class='bx bx-edit-alt'></i> Edit
        </a>
        <button type="button" class="btn btn-sm btn-danger btn-hapus" data-id="{{ $item->id }}">
            <i class='bx bx-trash'></i> Hapus
        </button>
    </td>
</tr>
@empty
<tr>
    <td colspan="6" class="text-center text-muted">Tidak ada data fasilitas</td>
</tr>
@endforelse
