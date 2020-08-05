
<div class="row">
    <div class="col-12">
    <input type="hidden" name="id" value="{{ $customer->id }}" id="id_data" />
        <div class="form-group">
            <label for="kode_customer" 
            @error('kode_customer') class="text-danger" 
            @enderror>Kode Customer 
            @error('kode_customer')
            | {{ $message }}
            @enderror</label>
            <input type="text" class="form-control" value="{{ $customer->kode_customer  }}"
                name="kode_customer" placeholder="Kode Customer">
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
            <input type="text" class="form-control" value="{{ $customer->nama }}" name="nama"
                placeholder="Nama">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="alamat" 
            @error('alamat') class="text-danger" 
            @enderror>Alamat 
            @error('alamat')
            | {{ $message }}
            @enderror</label>
            <input type="text" class="form-control" value="{{ $customer->alamat }}" name="alamat"
                placeholder="alamat">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="telepon" 
            @error('telepon') class="text-danger" 
            @enderror>Telepon 
            @error('telepon')
            | {{ $message }}
            @enderror</label>
            <input type="number" class="form-control" value="{{ $customer->telepon }}" name="telepon"
                placeholder="telepon">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
             <label for="kategori_id" 
            @error('kategori_id') class="text-danger" 
            @enderror>Kategori Customer 
            @error('kategori_id')
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