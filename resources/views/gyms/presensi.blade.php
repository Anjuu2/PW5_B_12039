@extends('dashboard')
@section('content')

<style>
    .gambar{
        width: 250px;
        height: 200px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
    }

    .card{
        border: 3px solid black;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
    }

    .accordion{
        margin-left: 10rem;
        margin-right: 10rem;
    }

    .gambarprofile{
        max-height: 285px;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="content">
    <div class="container-fluid ms-3 me-3">
        <div class="card card-body h-100 mt-3 ms-5 me-5">
            <div class="row text-end">
                @foreach ($data as $d)
                <h5 class="text-end">Tanggal : {{$d['tanggal']}}</h5>
            </div>

            <div class="row">
                <div class="col-md-3">
                        <img class="gambar me-2" src="{{ asset('img/gambar3.png') }}" alt="">
                </div>
                <div class="col-md-6 ms-2">
                    <div class="card-body">
                        <h3>{{$d['kelas']}} 
                            <button type="button" class="btn btn-success" id="detail" data-bs-toggle="modal" data-bs-target="#detailModal">
                                <i class="bi bi-eye"></i>
                            </button>
                        </h3>
                        <h5>Instruktur : {{$d['instruktur']}}</h5>
                        <h5>Ruang : {{$d['ruang']}}</h5>
                        <h5>Total member: {{$d['total']}}</h5>
                        <h5>Rating : 
                            <span class="text-warning">
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                            </span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion mt-4" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Section 1: Informasi Umum
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Informasi umum mengenai kelas.</strong> Kelasnya orang - orang sigma, rugi kalo ga dateng
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Section 2: Jadwal Kelas
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>{{$d['tanggal']}}</strong>
                @endforeach
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Section 3: Informasi Tambahan
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Kalo Latihan jangan bolong bolong</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3 mt-5 me-3">
            <h3>Daftar Member</h3>
            <button type="button" class="btn btn-primary" id="toastPresensiBtn">
                <i class="nav-icon bi bi-check-lg"></i> Presensi
            </button>
            <div id="toastPresensi" class="toast align-items-center text-bg-primary border-0 position-fixed bottom-0 end-0 me-2 mb-2" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 9999;">
                <div class="d-flex">
                    <div class="toast-body"><i class="nav-icon bi bi-check-lg"></i>
                        Berhasil mempresensi Member!
                    </div>
                </div>
            </div>
        </div>
        <div class="row me-1">
            <div class="col-md-4">
                <div class="card bg-warning">
                    <img src="{{asset('img/member1.jpg')}}" class="card-img-top gambarprofile" alt="...">
                    <div class="card-body">
                        @forelse ($members as $m)
                        @if ($m['nama']=='Amba')
                        <h5 class="card-title"><strong>{{$m['nama']}}</strong></h5>
                        <p class="card-text">Email: {{$m['email']}}</p>
                        <p class="card-text">No Telp: {{$m['telp']}}</p>
                        <p class="card-text">Jenis Kartu: <span class="border border-dark rounded-pill p-1 text-light">{{$m['kartu']}}</span></p>
                        <p class="card-text">Metode Pembayaran: <span class="text-bg-danger rounded-sm p-1 text-light">{{$m['pembayaran']}}</span></p>
                        @endif
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-secondary">
                    <img src="{{asset('img/member2.jpg')}}" class="card-img-top gambarprofile" alt="...">
                    <div class="card-body">
                        @forelse ($members as $m)
                        @if ($m['nama']=='Rusdi')
                        <h5 class="card-title"><strong>{{$m['nama']}}</strong></h5>
                        <p class="card-text">Email: {{$m['email']}}</p>
                        <p class="card-text">No Telp: {{$m['telp']}}</p>
                        <p class="card-text">Jenis Kartu: <span class="border border-dark rounded-pill p-1 text-light">{{$m['kartu']}}</span></p>
                        <p class="card-text">Metode Pembayaran: <span class="text-bg-primary rounded-sm p-1 text-light">{{$m['pembayaran']}}</span></p>
                        @endif
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-warning">
                    <img src="{{asset('img/member3.jpg')}}" class="card-img-top gambarprofile" alt="...">
                    <div class="card-body">
                        @forelse ($members as $m)
                        @if ($m['nama']=='Faiz')
                        <h5 class="card-title"><strong>{{$m['nama']}}</strong></h5>
                        <p class="card-text">Email: {{$m['email']}}</p>
                        <p class="card-text">No Telp: {{$m['telp']}}</p>
                        <p class="card-text">Jenis Kartu: <span class="border border-dark rounded-pill p-1 text-light">{{$m['kartu']}}</span></p>
                        <p class="card-text">Metode Pembayaran: <span class="text-bg-danger rounded-sm p-1 text-light">{{$m['pembayaran']}}</span></p>
                        @endif
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div class="row me-1">
        <div class="col-md-4">
                <div class="card bg-secondary">
                    <img src="{{asset('img/member4.jpg')}}" class="card-img-top gambarprofile" alt="...">
                    <div class="card-body">
                        @forelse ($members as $m)
                        @if ($m['nama']=='Azizi')
                        <h5 class="card-title"><strong>{{$m['nama']}}</strong></h5>
                        <p class="card-text">Email: {{$m['email']}}</p>
                        <p class="card-text">No Telp: {{$m['telp']}}</p>
                        <p class="card-text">Jenis Kartu: <span class="border border-dark rounded-pill p-1 text-light">{{$m['kartu']}}</span></p>
                        <p class="card-text">Metode Pembayaran: <span class="text-bg-primary rounded-sm p-1 text-light">{{$m['pembayaran']}}</span></p>
                        @endif
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-warning">
                    <img src="{{asset('img/member5.jpg')}}" class="card-img-top gambarprofile" alt="...">
                    <div class="card-body">
                        @forelse ($members as $m)
                        @if ($m['nama']=='Muthe')
                        <h5 class="card-title"><strong>{{$m['nama']}}</strong></h5>
                        <p class="card-text">Email: {{$m['email']}}</p>
                        <p class="card-text">No Telp: {{$m['telp']}}</p>
                        <p class="card-text">Jenis Kartu: <span class="border border-dark rounded-pill p-1 text-light">{{$m['kartu']}}</span></p>
                        <p class="card-text">Metode Pembayaran: <span class="text-bg-danger rounded-sm p-1 text-light">{{$m['pembayaran']}}</span></p>
                        @endif
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-secondary">
                    <img src="{{asset('img/member6.jpg')}}" class="card-img-top gambarprofile" alt="...">
                    <div class="card-body">
                        @forelse ($members as $m)
                        @if ($m['nama']=='Kathrin')
                        <h5 class="card-title"><strong>{{$m['nama']}}</strong></h5>
                        <p class="card-text">Email: {{$m['email']}}</p>
                        <p class="card-text">No Telp: {{$m['telp']}}</p>
                        <p class="card-text">Jenis Kartu: <span class="border border-dark rounded-pill p-1 text-light">{{$m['kartu']}}</span></p>
                        <p class="card-text">Metode Pembayaran: <span class="text-bg-primary rounded-sm p-1 text-light">{{$m['pembayaran']}}</span></p>
                        @endif
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5" id="detailModalLabel">Detail kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data as $d)
                <h3>{{$d['kelas']}}</h3>
                <p><strong>Instruktur: </strong>{{$d['instruktur']}}</p>
                <p><strong>Kode Instruktur: </strong>{{$d['kode']}}</p>
                <p><strong>Hari Kelas: </strong>{{$d['hari']}}</p>
                <p><strong>Tanggal: </strong>{{$d['tglModal']}}</p>
                <p><strong>Ruang: </strong>{{$d['ruang']}}</p>
                <p><strong>Rating: </strong>
                    <span class="rating-icon">
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                    </span>
                </p>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    const toastTrigger = document.getElementById('toastPresensiBtn')
const toastLive = document.getElementById('toastPresensi')

if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLive)
    toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
})
}
</script>

@endsection