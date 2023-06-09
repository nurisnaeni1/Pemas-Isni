@extends('layouts.masyarakat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
            <a href="{{ route('pengaduan.create') }}" role="button"
                    class="btn btn-primary mt-5" style="width: 100%">Tambah Pengaduan</a>
                <h3 class="mt-3">{{ __('Pengaduan Masyarakat') }} </h3>
                <div class="row">
                    <div class=" mt-3">
                        @foreach ($pengaduan as $p)
                            <div class="card mb-2">
                                <div class="card-horizontal" style="display: flex;flex: 1 1 auto;">
                                    <div class="img-square-wrapper">
                                        <img style="width: 300px;height:180px"
                                            src="{{ asset('foto-pengaduan/' . $p->foto) }}" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title d-flex justify-content-between">{{ $p->name_masyarakat }}
                                            @if ($p->status == '0')
                                                <p class="badge bg-danger">Pending</p>
                                            @elseif($p->status == 'proses')
                                                <p class="badge bg-warning text-dark">{{ ucwords($p->status) }}</p>
                                            @else
                                                <p class="badge bg-success">{{ $p->status }}</p>
                                            @endif
                                        </h4>
                                        <p class="card-text" style="margin-top: -20px">{{ $p->isi_pengaduan }}</p>
                                        <hr style="width: 500px;margin-top:-10px">
                                        <a class="btn btn-outline-success" href="{{ route('pengaduan.show', $p->id_pengaduan )}}" role="button">Detail Pengaduan</a>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Create at {{ $p->tgl_pengaduan }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
