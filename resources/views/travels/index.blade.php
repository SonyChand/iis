<x-dash.layout>
    @slot('title')
        {{ $title }}
    @endslot

    <div class="mb-9">
        <div id="travelList">
            <div class="card shadow-none border my-4" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="mb-0">{{ $title }}</h4>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="{{ route('travels.create') }}" class="btn btn-primary">Tambah Travel</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive-sm scrollbar d-print-none">
                        <table class="table table-bordered table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Travel</th>
                                    <th>Lokasi</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($travels as $index => $travel)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            @if ($travel->image)
                                                <img src="{{ asset('storage/' . $travel->image) }}" width="100">
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ $travel->name }}</td>
                                        <td>{{ $travel->location }}</td>
                                        <td>{{ $travel->description ?? '-' }}</td>
                                        <td>Rp {{ number_format($travel->price, 2) }}</td>
                                        <td>
                                            <a href="{{ route('travels.edit', $travel->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('travels.destroy', $travel->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dash.layout>
