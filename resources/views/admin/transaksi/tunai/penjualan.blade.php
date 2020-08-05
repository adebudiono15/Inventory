@extends('layouts.master')

@section('title', 'Data Penjualan Tunai')

    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    @endpush

    @push('js-library')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @endpush

@section('content')
    <!-- Main Section -->
    <main class="main-content">
        <div class="pd-20 pb-0">

            <div class="card">
                <div class="row">
                    <div class="col-md">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-info mt-2 mb-5" href="#tambahModals" data-toggle="modal">
                                        <i class=" bx bx-pencil"></i>
                                        <span class="align-middle">TAMBAH DATA</span>
                                    </button>
                                </div>
                            </div>

                            @if (session('save'))
                                <div class="alert border-top-primary">
                                    <div class="d-flex">
                                        <i class="bx bx-folder"></i>
                                        <div><b>{{ session('save') }}</b></div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table id="zero" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No Faktur</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Kode Customer</th>
                                            <th>Kode Barang</th>
                                            <th>Jumlah</th>
                                            <th>Total Harga</th>
                                            <th class="text-center" style="width: 180px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penjualan_tunai as $pjt)
                                            <tr>
                                                <td>{{ $pjt->created_at}}</td>
                                                <td>{{ $pjt->tgl_transaksi}}</td>
                                                <td>{{ $pjt->kode_customer->kode_customer}}</td>
                                                <td>{{ $pjt->kode_barang->kode_barang}}</td>
                                                <td>{{ $pjt->jumlah}}</td>
                                                <td>{{ $pjt->total_harga}}</td>
                                                <td>
                                                    <a href="#" data-id=""
                                                        class="btn btn-sm btn-clean-main ml-5 btn-edit">
                                                        <i class='bx bx-printer'></i>
                                                        <span class="align-middle">PRINT</span>
                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- modal insert --}}
    <div id="tambahModals" class="modal fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white">Tambah Data Penjualan Tunai</h5>
                    <button type="button" class="close text-white" data-dismiss="modal">×</button>
                </div>
                <form class="form form-vertical" method="post" enctype="multipart/form-data"
                    action="{{ route('save-penjualan-tunai') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kode_customer_id" @error('kode_customer_id') class="text-danger" @enderror>Kode Customer @error('kode_customer_id')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="text" class="form-control" value="{{ old('kode_customer_id') }}"
                                        name="kode_customer_id" placeholder="Kode Customer">
                                </div>
                            </div>

                             <div class="col-12">
                                <div class="form-group">
                                    <label for="tgl_transaksi" @error('tgl_transaksi') class="text-danger" @enderror>Tanggal Transaksi @error('tgl_transaksi')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="date" class="form-control" value="{{ old('tgl_transaksi') }}"
                                        name="tgl_transaksi" placeholder="Tanggal Transaksi">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kode_barang_id" @error('kode_barang_id') class="text-danger" @enderror>Kode Barang @error('kode_barang_id')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="text" class="form-control" value="{{ old('kode_barang_id') }}"
                                        name="kode_barang_id" placeholder="Kode Barang">
                                </div>
                            </div>

                             <div class="col-12">
                                <div class="form-group">
                                    <label for="jumlah" @error('jumlah') class="text-danger" @enderror>Jumlah @error('jumlah')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="text" class="form-control" value="{{ old('jumlah') }}"
                                        name="jumlah" placeholder="Jumlah">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="total_harga" @error('total_harga') class="text-danger" @enderror>Total Harga @error('total_harga')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="text" class="form-control" value="{{ old('total_harga') }}"
                                        name="total_harga" placeholder="Total Harga">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info btn-shadow">Simpan</button>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <script src="{{ url('assets/assets/js/dataTables.min.js') }}"></script>
    <script>
        $(".swal-confirm").click(function(e) {
            id = e.target.dataset.id;
            swal({
                    title: "Apa kamu yakin? ",
                    text: "Setelah dihapus, Kamu tidak akan dapat memulihkan data ini!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        // swal("Data ini telah kamu hapus!", {
                        // icon: "success",
                        // });
                        $(`#delete${id}`).submit();
                    } else {
                        // swal("Data ini batal dihapus!");
                    }
                });
        });


        @if ($errors->any()) {
            $('#tambahModals').modal('show')
        }
        @endif

        $(document).ready(function() {
            $('#zero').DataTable({
                'columnDefs': [{
                    'orderable': false,
                    'targets': 1
                }], // hide sort icon
                'bSorting': [
                    [1, 'descs']
                ] // start to sort data in second column
            });
        });

        $('.btn-edit').on('click', function() {
            // console.log($(this).data('id'))
            let id = $(this).data('id')
            $.ajax({
                url: `/${id}/edit-satuan`,
                method: "GET",
                success: function(data) {
                    // console.log(data)
                    $('#editModals').find('.modal-body').html(data)
                    $('#editModals').modal('show')
                },
                error: function(error) {
                    console.log(error)
                }
            })
        })

        $('.btn-update').on('click', function() {
            // console.log($(this).data('id'))
            let id = $('#form-edit').find('#id_data').val()
            let formData = $('#form-edit').serialize()
            console.log(formData)
            $.ajax({
                url: `/satuan/update/${id}`,
                method: "PATCH",
                data:formData,

                success: function(data) {
                    // console.log(data)
                    $('#editModals').modal('hide')
                    window.location.assign('/master-satuan')
                },
                 error: function(err) {
                    console.log(err.responseJSON)
                    let err_log = err.responseJSON.errors;
                    if (err.status == 422){
                        if (typeof(err_log.satuan) !== 'undefined'){
                            $('#editModals').find('[name="satuan"]').prev().html('<span style="color:red">Satuan | '+err_log.satuan[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="satuan"]').prev().html('<span>Satuan</span>')
                        }

                    }
                }
            })
        })

    </script>
@endpush
