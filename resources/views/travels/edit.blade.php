<x-dash.layout>
    @slot('title')
        Edit Travel - {{ $travel->name }}
    @endslot

    <div class="mb-9">
        <div id="editTravel">
            <div class="card shadow-none border my-4" data-component-card="data-component-card">
                <div class="card-header p-4 border-bottom bg-body">
                    <h4 class="mb-0">Edit Travel: {{ $travel->name }}</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('travels.update', $travel->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Travel</label>
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ $travel->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Lokasi</label>
                            <input type="text" id="location" name="location" class="form-control"
                                value="{{ $travel->location }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea id="description" name="description" class="form-control" rows="3">{{ $travel->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Harga (Rp)</label>
                            <input type="number" id="price" name="price" class="form-control"
                                value="{{ $travel->price }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            @if ($travel->image)
                                <br>
                                <img src="{{ asset('storage/' . $travel->image) }}" width="150">
                            @endif
                            <input type="file" id="image" name="image" class="form-control mt-2">
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-dash.layout>
