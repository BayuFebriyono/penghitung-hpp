<div>
    <div class="card">
        <div class="card-header">
            <p class="text-muted">Hitung Biaya Bahan</p>
        </div>

        <div class="card-body">
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
                                    <input wire:model='hargaSatuan' type="number" class="form-control @error('hargaSatuan') is-invalid @enderror"
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
        </div>
    </div>
</div>
