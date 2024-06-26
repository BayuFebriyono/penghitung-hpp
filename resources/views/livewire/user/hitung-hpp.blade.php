<div>
    <h3>Hitung Hpp</h3>

    <div class="card mt-3">
        <div class="card-header">
            <p class="text-muted">Pilih Product Yang Ingin Dihitung</p>
        </div>
        <div class="card-body">
            <label for="Product" class="form-label">Pilih Product</label>
            <select class="form-select" id="Product" wire:model.change="productId">
                <option value="">---Pilih Product---</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" wire:key="{{ $product->id }}">{{ $product->product_name }}</option>
                @endforeach
            </select>

        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <livewire:user.hpp.biaya-bahan :productId="$productId"/>
        </div>

        <div class="col-md-6">
            <livewire:user.hpp.biaya-tenaga-kerja :productId="$productId"/>
        </div>

        <div class="col-md-12 mt-3">
            <livewire:user.hpp.biaya-overhead :productId="$productId" />
        </div>
    </div>
</div>
