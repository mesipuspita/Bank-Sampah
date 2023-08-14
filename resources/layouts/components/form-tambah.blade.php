<div class="row">
    <div class="col-xl-4 mb-3">
        <div class="example">
            <p class="mb-1">Kategori Sampah</p>
                <select type="text" onchange="detectChange(this)" class="form-control" id="id_sampah" name="id_sampah" placeholder="Enter a username..">
                    @foreach($data as $item)
                        <option value="{{$item->id_sampah}}" data-harga="{{$item->harga}}">{{$item->jenis_sampah}}</option>
                    @endforeach
                </select>
        </div>
    </div>
    <div class="col-xl-4 mb-3">
        <div class="example">
            <p class="mb-1">Berat Sampah</p>
            <input type="number"  id="text_berat" name="total"  onchange="hitungTotal(this)" class="form-control input-btn input-number" value="1">
        </div>
    </div>
    {{-- <div class="col-xl-4">
        <div class="example">
            <p class="mb-1">Satuan/p>
                <select type="text" class="form-control" id="id_satuan" name="id_satuan" placeholder="Enter a username..">
                    @foreach($datasatuan as $item)
                        <option value="{{$item->id_satuan}}">{{$item->satuan}}</option>
                    @endforeach
             </select>
        </div>
    </div> --}}
    <div class="col-xl-4">
        <div class="example">
            <p class="mb-1">Harga</p>
            <input class="form-control" id="text_harga" type="text" name="harga" value="" readonly>
        </div>
    </div>
    <div class="col-xl-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Total</h4>
            <input  id="text_total" class="form-control"  name="total_jumlah" readonly>
        </div>
    </div>

</div>