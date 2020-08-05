
<div class="row">
    <div class="col-12">
    <input type="hidden" name="id" value="{{ $barang->id }}" id="id_data" />
        <div class="form-group">
            <label for="kode_barang" 
            @error('kode_barang') class="text-danger" 
            @enderror>Kode Barang 
            @error('kode_barang')
            | {{ $message }}
            @enderror</label>
            <input type="text" class="form-control" value="{{ $barang->kode_barang  }}"
                name="kode_barang" placeholder="Kode Barang">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="nama" 
            @error('nama') class="text-danger" 
            @enderror>Nama 
            @error('nama')
            | {{ $message }}
            @enderror</label>
            <input type="text" class="form-control" value="{{ $barang->nama }}" name="nama"
                placeholder="Nama">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="satuan_id" @error('satuan_id') class="text-danger" @enderror>Satuan @error('satuan_id')
                | {{ $message }}
                @enderror</label>
            <select class="custom-select" name="satuan_id">
            <option selected disabled value>Pilih Satuan</option>
            <option value="1">PCS</option>
            <option value="2">BOX</option>
            <option value="3">LUSIN</option>
            <option value="4">KARTON</option>
            </select>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="harga" 
            @error('harga') class="text-danger" 
            @enderror>harga 
            @error('harga')
            | {{ $message }}
            @enderror</label>
            <input type="number" class="form-control" value="{{ $barang->harga }}" name="harga"
                placeholder="harga">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="kategori_id" @error('kategori_id') class="text-danger" @enderror>Kategori Customer @error('kategori_id')
                | {{ $message }}
            @enderror</label>
            <select class="custom-select" name="kategori_id">
            <option selected disabled value>Pilih Kategori Customer</option>
            <option value="1">Super Agen</option>
            <option value="2">Agen</option>
            <option value="3">Distributor</option>
            <option value="4">Reseller</option>
            <option value="5">Private</option>
            </select>
        </div>
    </div>

</div>