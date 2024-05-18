<div>
    <h3>List Daftar HPP Anda</h3>
    <!-- table bordered -->
    <div class="table-responsive px-2 mt-5">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Total Bahan</th>
                    <th>Total Tenaga Kerja</th>
                    <th>Total Overload</th>
                    <th>Biaya Hpp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr wire:key="{{ $product->id }}">
                        <td class="">{{ $loop->iteration }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td class="">{{ $product->biaya_bahan->sum('harga_satuan') }}</td>
                        <td class="">{{ $product->biaya_tenaga_kerja->sum('harga_satuan') }}</td>
                        <td class="">{{ $product->biaya_overload->sum('harga_satuan') }}</td>
                        <td class="">{{ $product->biaya_overload->sum('harga_satuan') + $product->biaya_bahan->sum('harga_satuan') + $product->biaya_tenaga_kerja->sum('harga_satuan') }}</td>
                        <td>
                            <a wire:click="edit('{{ $product->id }}')" href="#" class="btn icon btn-info"><i class="bi bi-eye"></i></a>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
