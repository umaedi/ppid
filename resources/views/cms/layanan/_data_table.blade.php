@forelse ($layanans as $key => $layanan)
<tr class="align-middle text-center">
    <td>{{ $key + 1 }}</td>
    <td>{{ $layanan->instansi->nama }}</td>
    <td>
        <span class="badge {{ $layanan->status == 'aktif' ? 'bg-success' : 'bg-danger' }}">
            {{ ucfirst($layanan->status) }}
        </span>
    </td>
    <td>
        <a href="{{ route('cms-layanan-details-show', ['subdomain' => config('services.subdomain'), 'instansi_id' => $layanan->instansi_id]) }}" class="btn btn-sm btn-primary">
            <i class='bx bx-list-ul'></i> Lihat Layanan
        </a>
        
        <a href="{{ route('cms-layanan-edit', ['subdomain' => config('services.subdomain'), 'id' => $layanan->id]) }}" class="btn btn-sm btn-success">
            <i class='bx bx-edit-alt'></i> Edit
        </a>
        
        <button type="button" class="btn btn-sm btn-danger btn-hapus" data-id="{{ $layanan->id }}">
            <i class='bx bx-trash'></i> Hapus
        </button>
    </td>
</tr>
@empty
<tr>
    <td colspan="4" class="text-center text-muted">Tidak ada data layanan</td>
</tr>
@endforelse
