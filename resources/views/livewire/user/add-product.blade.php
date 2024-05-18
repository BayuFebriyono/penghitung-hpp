<div>
    <h3>Manajemen Produk</h3>

    <p class="text-muted mt-4 fs-4">{{ !$isEdit ? 'Tambahkan' : 'Edit' }} Product</p>

    <div class="card mt-2">
        <div class="card-header">
            <h4 class="card-title">Isi Product Dibawah ini</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-light-success color-success"><i class="bi bi-info-circle"></i>
                        {{ session('success') }}</div>
                @endif

                <form class="form form-horizontal" wire:submit="save">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input wire:model='productName' type="text"
                                            class="form-control @error('productName') is-invalid @enderror"
                                            placeholder="Nama Product" id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        @error('productName')
                                            <p class="text-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-2">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <textarea wire:model='deskripsi' type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                            placeholder="Deskripsi" id="deskripsi"></textarea>
                                        <div class="form-control-icon">
                                            <i class="bi bi-text-paragraph"></i>
                                        </div>
                                        @error('deskripsi')
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


    <p class="my-4 text-muted">List Product Anda</p>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">List Product</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <p class="card-text">
                    Product yang telah anda buat akan muncuk di tabel di bawah ini
                </p>
            </div>
            <!-- table bordered -->
            <div class="table-responsive px-2">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr wire:key="{{ $product->id }}">
                            <td class="text-bold-500">{{ $loop->iteration }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td class="text-bold-500">{{ $product->description }}</td>
                            <td>
                                <a wire:click="edit('{{ $product->id }}')" href="#" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <a wire:confirm="Apakah anda yakin?" wire:click="delete('{{ $product->id }}')" href="#" class="btn icon btn-danger"><i class="bi bi-trash3"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
