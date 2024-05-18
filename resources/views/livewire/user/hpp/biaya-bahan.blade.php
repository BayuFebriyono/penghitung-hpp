<div>
    <div class="card">
        <div class="card-header">
            <p class="text-muted">Hitung Biaya Bahan</p>
        </div>

        <div class="card-body">
            @if (session('error'))
                <div class="alert alert-light-danger color-danger"><i class="bi bi-info-circle"></i>
                    {{ session('error') }}</div>
            @elseif (session('success'))
                <div class="alert alert-light-success color-success"><i class="bi bi-info-circle"></i>
                    {{ session('success') }}</div>
            @endif
            <form class="form form-horizontal" wire:submit="save">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input wire:model='namaBahan' type="text"
                                        class="form-control @error('namaBahan') is-invalid @enderror"
                                        placeholder="Nama Bahan" id="first-name-horizontal-icon">
                                    <div class="form-control-icon">
                                        <i class="bi bi-box"></i>
                                    </div>
                                    @error('namaBahan')
                                        <p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input wire:model='hargaSatuan' type="number"
                                        class="form-control @error('hargaSatuan') is-invalid @enderror"
                                        placeholder="Harga Satuan" id="hargaSatuan" />
                                    <div class="form-control-icon">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    @error('hargaSatuan')
                                        <p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
            </form>


              <!-- table bordered -->
              <div class="table-responsive px-2 mt-3">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bahan</th>
                            <th>Biaya</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bahans as $bahan)
                        <tr wire:key="{{ $bahan->id }}">
                            <td class="text-bold-500">{{ $loop->iteration }}</td>
                            <td>{{ $bahan->nama_bahan }}</td>
                            <td class="text-bold-500">{{ $bahan->harga_satuan }}</td>
                            <td>
                                <a wire:confirm="Apakah anda yakin?" wire:click="delete('{{ $bahan->id }}')" href="#" class="btn icon btn-danger"><i class="bi bi-trash3"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <p class="fw-bold fs-5 mt-3">Total Biaya : {{ $total }}</p>
        </div>
    </div>
</div>
