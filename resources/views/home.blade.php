@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     Selamat Datang!
                     Form untuk menambah database
                     <form class="form-horizontal" role="form">    
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama Perusahaan</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                            <label for="jabatan" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                <input id="jabatan" type="text" class="form-control" name="jabatan" value="{{ old('jabatan') }}" required>

                                @if ($errors->has('jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gaji') ? ' has-error' : '' }}">
                            <label for="gaji" class="col-md-4 control-label">Gaji</label>

                            <div class="col-md-6">
                                <input id="gaji" type="text" class="form-control" name="gaji" value="{{ old('gaji') }}" required>

                                @if ($errors->has('gaji'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gaji') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" id="btnpost" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
    <script type="text/javascript">
    $(document).on('click', '#btnpost', function(event){
            alert('Yakin ingin menambah data?');
            event.preventDefault();
            $.ajax({
            url: 'http://localhost:8000/api/job/store',
            type: 'post',
            dataType : 'json',
            data: {
                    "nama_perusahaan": $('#nama').val(),
                    "jabatan": $('#jabatan').val(),
                    "alamat": $('#alamat').val(),
                    "gaji": $('#gaji').val(),
                },
            success: function (data) {
                console.info(data);
                alert('Data Berhasil Ditambahkan');
                $('#nama').val("");
                $('#jabatan').val("");
                $('#alamat').val("");
                $('#gaji').val("");
            }
        });
        });

    </script>

@endsection