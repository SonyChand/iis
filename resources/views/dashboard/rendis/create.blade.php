<x-dash.layout>
    @slot('title')
        {{ $title }}
    @endslot
    <h2 class="mb-4">Create Renstra Kadis</h2>
    <div class="row">
        <div class="col-xl-9">
            <form class="row g-3 mb-6 needs-validation" novalidate="" method="POST" action="{{ route('rendis.store') }}"
                onsubmit="showLoader()">
                @csrf
                <div class="col-sm-12 col-md-12">
                    <div class="form-floating">
                        <input class="form-control" id="nomor_agenda" type="text" name="nomor_agenda"
                            placeholder="Nomor Agenda" required />
                        <label for="nomor_agenda">Nomor Agenda</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-floating">
                        <input class="form-control" id="nama_agenda_renstra" type="text" name="nama_agenda_renstra"
                            placeholder="Nama Agenda Renstra" required />
                        <label for="nama_agenda_renstra">Nama Agenda Renstra</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="deskripsi_uraian_renstra" name="deskripsi_uraian_renstra"
                            placeholder="Deskripsi Uraian Renstra" required></textarea>
                        <label for="deskripsi_uraian_renstra">Deskripsi Uraian Renstra</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-floating">
                        <input class="form-control" id="disposisi_diteruskan" type="text" name="disposisi_diteruskan"
                            placeholder="Disposisi Diteruskan" required />
                        <label for="disposisi_diteruskan">Disposisi Diteruskan</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-floating">
                        <input class="form-control" id="tanggal_mulai" type="date" name="tanggal_mulai"
                            placeholder="Tanggal Mulai" required />
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-floating">
                        <input class="form-control" id="tanggal_akhir" type="date" name="tanggal_akhir"
                            placeholder="Tanggal Akhir" required />
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating form-floating-advance-select">
                        <label>Status</label>
                        <select class="form-select" id="status" required name="status">
                            <option hidden value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 gy-6">
                    <div class="row g-3 justify-content-end">
                        <div class="col-auto">
                            <button class="btn btn-phoenix-primary px-5" type="button"
                                onclick="window.history.back()">Cancel</button>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary px-5 px-sm-15">Create</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-dash.layout>
