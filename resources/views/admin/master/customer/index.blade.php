@extends('layouts.master')

@section('title', 'Data Customer')

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

                            @if (session('update'))
                                <div class="alert border-top-success">
                                    <div class="d-flex">
                                        <i class="bx bx-file"></i>
                                        <div>{{ session('update') }}</div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endif

                            @if (session('delete'))
                                <div class="alert border-top-danger">
                                    <div class="d-flex">
                                        <i class="bx bx-trash"></i>
                                        <div><b>{{ session('delete') }}</b></div>
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
                                            <th>Kode Customer</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Kategori</th>
                                            <th class="text-center" style="width: 180px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customer as $cst)
                                            <tr>
                                                <td>{{ $cst->kode_customer }}</td>
                                                <td>{{ $cst->nama }}</td>
                                                <td>{{ $cst->alamat }}</td>
                                                <td>{{ $cst->telepon }}</td>
                                                <td>{{ $cst->kategori->kategori }}</td>
                                                <td>
                                                    <a href="#" data-id="{{ $cst->id }}"
                                                        class="btn btn-sm btn-clean-primary mr-2 btn-edit">
                                                        <i class='bx bx-comment-edit'></i>
                                                        <span class="align-middle">EDIT</span>
                                                    </a>

                                                    <a href="#" data-id="{{ $cst->id }}"
                                                        class="btn btn-sm btn-clean-danger swal-confirm">
                                                        <form action="{{ route('delete-customer', $cst->id) }}"
                                                            id="delete{{ $cst->id }}" method="POST">
                                                            @csrf
                                                            
                                                            @method('delete')
                                                            <i data-id="{{ $cst->id }}" class='bx bx-trash'></i>
                                                            <span data-id="{{ $cst->id }}" class="align-middle">HAPUS
                                                        </form>
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
                    <h5 class="modal-title text-white">Tambah Data Customer</h5>
                    <button type="button" class="close text-white" data-dismiss="modal">×</button>
                </div>
                <form class="form form-vertical" method="post" enctype="multipart/form-data"
                    action="{{ route('save-customer') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kode_customer" @error('kode_customer') class="text-danger" @enderror>Kode
                                        Customer @error('kode_customer')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="text" class="form-control" value="{{ old('kode_customer') }}"
                                        name="kode_customer" placeholder="Kode Customer">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nama" @error('nama') class="text-danger" @enderror>Nama @error('nama')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="text" class="form-control" value="{{ old('nama') }}" name="nama"
                                        placeholder="Nama">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="alamat" @error('alamat') class="text-danger" @enderror>Alamat @error('alamat')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="text" class="form-control" value="{{ old('alamat') }}" name="alamat"
                                        placeholder="alamat">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="telepon" @error('telepon') class="text-danger" @enderror>Telepon @error('telepon')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="number" class="form-control" value="{{ old('telepon') }}" name="telepon"
                                        placeholder="telepon">
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
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info btn-shadow">Simpan</button>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal edit --}}
    <div id="editModals" class="modal fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white">Edit Data Customer</h5>
                    <button type="button" class="close text-white" data-dismiss="modal">×</button>
                </div>
                <form class="form form-vertical" method="post" id="form-edit" enctype="multipart/form-data"
                    action="{{ route('save-customer') }}">
                    @csrf
                    <div class="modal-body">
                     
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info btn-shadow btn-update">Simpan</button>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
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
                    'targets': 5
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
                url: `/${id}/edit-customer`,
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
                url: `/customer/update/${id}`,
                method: "PATCH",
                data:formData,

                success: function(data) {
                    // console.log(data)
                    $('#editModals').modal('hide')
                    window.location.assign('/master-customer')
                },
                 error: function(err) {
                    console.log(err.responseJSON)
                    let err_log = err.responseJSON.errors;
                    if (err.status == 422){
                        if (typeof(err_log.kode_customer) !== 'undefined'){
                            $('#editModals').find('[name="kode_customer"]').prev().html('<span style="color:red">Kode Customer | '+err_log.kode_customer[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="kode_customer"]').prev().html('<span>Kode Customer</span>')
                        }

                        if (typeof(err_log.nama) !== 'undefined'){
                            $('#editModals').find('[name="nama"]').prev().html('<span style="color:red">Nama | '+err_log.nama[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="nama"]').prev().html('<span>Nama</span>')
                        }

                        if (typeof(err_log.alamat) !== 'undefined'){
                            $('#editModals').find('[name="alamat"]').prev().html('<span style="color:red">Alamat | '+err_log.alamat[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="alamat"]').prev().html('<span>Alamat</span>')
                        }

                        if (typeof(err_log.telepon) !== 'undefined'){
                            $('#editModals').find('[name="telepon"]').prev().html('<span style="color:red">Telepon | '+err_log.telepon[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="telepon"]').prev().html('<span>Telepon</span>')
                        }

                        if (typeof(err_log.kategori_id) !== 'undefined'){
                            $('#editModals').find('[name="kategori_id"]').prev().html('<span style="color:red">Kategori Customer | '+err_log.kategori_id[0]+'</span>')
                        }else{
                            $('#editModals').find('[name="kategori_id"]').prev().html('<span>Kategori Customer</span>')
                        }

                    }
                }
            })
        })

    </script>
@endpush
