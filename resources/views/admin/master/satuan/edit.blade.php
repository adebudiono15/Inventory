
<div class="row">
    <div class="col-12">
    <input type="hidden" name="id" value="{{ $satuan->id }}" id="id_data" />
        <div class="form-group">
            <label for="satuan" 
            @error('satuan') class="text-danger" 
            @enderror>Satuan 
            @error('satuan')
            | {{ $message }}
            @enderror</label>
            <input type="text" class="form-control" value="{{ $satuan->satuan  }}"
                name="satuan" placeholder="Satuan">
        </div>
    </div>
</div>