@extends('layouts.master')

@section('title', 'Data Satuan')

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

                            @if (session('delete'))
                                <div class="alert border-top-danger">
                                    <div class="d-flex">
                                        <i class="bx bx-folder"></i>
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
                                            <th>Satuan</th>
                                            <th class="text-center" style="width: 180px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($satuan as $stn)
                                            <tr>
                                                <td>{{ $stn->satuan}}</td>
                                                <td>
                                                    <a href="#" data-id="{{ $stn->id }}"
                                                        class="btn btn-sm btn-clean-primary mr-2 btn-edit">
                                                        <i class='bx bx-comment-edit'></i>
                                                        <span class="align-middle">EDIT</span>
                                                    </a>

                                                    <a href="#" data-id="{{ $stn->id }}"
                                                        class="btn btn-sm btn-clean-danger swal-confirm">
                                                        <form action="{{ route('delete-satuan', $stn->id) }}"
                                                            id="delete{{ $stn->id }}" method="POST">
                                                            @csrf
                                                            
                                                            @method('delete')
                                                            <i data-id="{{ $stn->id }}" class='bx bx-trash'></i>
                                                            <span data-id="{{ $stn->id }}" class="align-middle">HAPUS
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
                    <h5 class="modal-title text-white">Tambah Data Satuan</h5>
                    <button type="button" class="close text-white" data-dismiss="modal">×</button>
                </div>
                <form class="form form-vertical" method="post" enctype="multipart/form-data"
                    action="{{ route('save-satuan') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="satuan" @error('satuan') class="text-danger" @enderror>Satuan @error('satuan')
                                        | {{ $message }}
                                        @enderror</label>
                                    <input type="text" class="form-control" value="{{ old('satuan') }}"
                                        name="satuan" placeholder="Satuan">
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
                    <h5 class="modal-title text-white">Edit Data Satuan</h5>
                    <button type="button" class="close text-white" data-dismiss="modal">×</button>
                </div>
                <form class="form form-vertical" method="post" id="form-edit" enctype="multipart/form-data"
                    action="{{ route('save-satuan') }}">
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
