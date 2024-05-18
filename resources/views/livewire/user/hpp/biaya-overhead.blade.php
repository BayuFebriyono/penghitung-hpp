<div>
    <div class="card">
        <div class="card-header">
            <p class="text-muted">Hitung Biaya Overhead</p>
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
                                    <input wire:model='komponen' type="text"
                                        class="form-control @error('komponen') is-invalid @enderror"
                                        placeholder="Komponen" id="komponen">
                                    <div class="form-control-icon">
                                        <i class="bi bi-box"></i>
                                    </div>
                                    @error('komponen')
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
                                        placeholder="Harga Satuan" id="hargaSatuan3" />
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
                            <th>Tenaga Kerja</th>
                            <th>Biaya</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($overheads as $over)
                        <tr wire:key="{{ $over->id }}">
                            <td class="text-bold-500">{{ $loop->iteration }}</td>
                            <td>{{ $over->komponen }}</td>
                            <td class="text-bold-500">{{ $over->harga_satuan }}</td>
                            <td>
                                <a wire:confirm="Apakah anda yakin?" wire:click="delete('{{ $over->id }}')" href="#" class="btn icon btn-danger"><i class="bi bi-trash3"></i></a>
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
