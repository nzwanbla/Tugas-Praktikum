{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Konfirmasi Penghapusan</div>

                    <div class="card-body">
                        <p>Anda yakin ingin menghapus data ini?</p>
                        <form action="{{ route('destroy', $mahasiswa->id_mahasiswa) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                            <a href="{{ route('index') }}" class="btn btn-secondary">Batalkan</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
