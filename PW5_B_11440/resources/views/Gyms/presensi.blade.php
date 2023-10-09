@extends('dashboard')
@section('content')
<!-- Main content -->
<style>
    .tanggal {
        text-align: right;
    }

    .instruktur {
        width: 250px;
        height: 200px;
        border: 2px solid black;
        border-radius: 25px;
        margin-right: 10px;
    }

    .card-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card-member {
        width: calc(33.33% - 20px);
        /* 3 cards per row with some spacing */
        margin-bottom: 20px;
    }
</style>

<div class="row justify-content-center mt-3">
    <div class="col-md-10">
        <div class="card" style="height: auto">
            <div class="card-body">
                <div class="item-body" style="display: flex; justify-content: space-between; ">
                    <div class="img-desk" style="display: flex; align-items:center">
                        <div class="img-1">
                            <img class="instruktur" src="https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png" alt="">
                        </div>
                        <div class="item-card">
                            <div style="display: flex;">
                                <h2>Body Combat</h2>
                                <button type="button" class="btn btn-success" id="buttonEye" style="margin-left: 10px; height: 40px;"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></button>


                            </div>
                            <h5><strong>Instruktur : Raihan Dwi Febrian</strong></h5>
                            <h5><strong>Ruang Kelas : Kelas B</strong></h5>
                            <h5><strong>Total Member : 6</strong></h5>
                            <h5 style="display: flex;"><strong>Rating :</strong>
                                <div class="mb-0 " style="color: gold;">
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                </div>
                            </h5>
                        </div>
                    </div>
                    <div class="date">
                        <h5><strong>Tanggal: {{ date('l, d - F - y') }}</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticEye" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #238755;">
                <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white;"><strong>Detail Kelas</strong></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="dataInstruktur" style="margin: 20px;">
                <h3> Body Combat</h3>
                <table>
                    <tr>
                        <td><strong>Nama Instruktur</strong></td>
                        <td> : Raihan Dwi Febrian</td>
                    </tr>
                    <tr>
                        <td><strong>Kode Instruktur</strong></td>
                        <td> : 210711440</td>
                    </tr>
                    <tr>
                        <td><strong>Hari Kelas</strong></td>
                        <td> : {{date('l')}}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Kelas:</strong></td>
                        <td> : {{date('d-m-y')}}</td>
                    </tr>
                    <tr>
                        <td><strong>Ruang:</strong></td>
                        <td> : Kelas B</td>
                    </tr>
                    <tr>
                        <td><strong>Rating</strong></td>
                        <td color: black;> :
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="kotak-kartu$kartuMember" style="display: flex; justify-content: space-between; ">
    <div>
        <h3 class="daftarMember" style="margin-left: 153px;"><strong>Daftar Member</strong></h3>
    </div>
    <div class="presensiBtn" style="margin-right: 133px;">
        <button type="button" class="btn btn-primary" id="liveToastBtn"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #ffffff
                    }
                </style>
                <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z mb-1" />
            </svg> Presensi</button>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <h6><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg> Berhasil Mempresensi Member</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@forelse ($kartu as $member)
@if ($loop->iteration % 3 == 1)
<div class="row justify-content-center mt-2">
    @endif

    @if ($member['jenis'] == 'Gold')
    <div class="col-md-3 mr-4 ml-4">
        <div class="card p-0 mx-auto" style="border: 3px solid black;">
            <img class="img-member" src="https://th.bing.com/th/id/OIP.MN_DSpmChqSjO6jqJjlUfgHaEw?pid=ImgDet&rs=1" class="card-img-top" alt="...">
            <div class="card-body text-bg-warning">
                <h5 class=""><strong>{{$member ['nama']}}</strong></h5>
                <h6>Email : {{$member['email']}}</h6>
                <h6>No Telp : {{$member['noTelp']}}</h6>
                <h6>Jenis Kartu : <span class="badge bg-warning" style="border: 1px solid black; border-radius:10px;"><strong style="color: #ffffff;">{{$member['jenis']}}</strong></span></h6>
                <h6>Metode Pembayaran : <span class="badge text-bg-primary">{{$member['metode']}}</span></h6>
            </div>
        </div>
    </div>
    @elseif ($member['jenis'] == 'Silver')
    <div class="col-md-3 mr-4 ml-4">
        <div class="card p-0 mx-auto" style="border: 3px solid black;">
            <img class="img-member" src="https://th.bing.com/th/id/OIP.MN_DSpmChqSjO6jqJjlUfgHaEw?pid=ImgDet&rs=1" class="card-img-top" alt="...">
            <div class="card-body text-bg-secondary">
                <h5 class=""><strong>{{$member ['nama']}}</strong></h5>
                <h6>Email : {{$member['email']}}</h6>
                <h6>No Telp : {{$member['noTelp']}}</h6>
                <h6>Jenis Kartu : <span class="badge bg-secondary" style="border: 1px solid black; border-radius:10px;"><strong style="color: #ffffff;">{{$member['jenis']}}</strong></span></h6>
                <h6>Metode Pembayaran : <span class="badge text-bg-success">{{$member['metode']}}</span></h6>
            </div>
        </div>
    </div>
    @elseif ($member['jenis'] == 'Black' && $member['metode'] == 'Deposit Kelas')
    <div class="col-md-3 mr-4 ml-4">
        <div class="card p-0 mx-auto" style="border: 3px solid white;">
            <img class="img-member" src="https://th.bing.com/th/id/OIP.MN_DSpmChqSjO6jqJjlUfgHaEw?pid=ImgDet&rs=1" class="card-img-top" alt="...">
            <div class="card-body text-bg-dark">
                <h5 class=""><strong>{{$member ['nama']}}</strong></h5>
                <h6>Email : {{$member['email']}}</h6>
                <h6>No Telp : {{$member['noTelp']}}</h6>
                <h6>Jenis Kartu : <span class="badge bg-dark" style="border: 1px solid white; border-radius:10px;"><strong style="color: #ffffff;">{{$member['jenis']}}</strong></span></h6>
                <h6>Metode Pembayaran : <span class="badge text-bg-primary">{{$member['metode']}}</span></h6>
            </div>
        </div>
    </div>
    @elseif ($member['jenis'] == 'Black' && $member['metode'] == 'Deposit Uang')
    <div class="col-md-3 mr-4 ml-4">
        <div class="card p-0 mx-auto" style="border: 3px solid white;">
            <img class="img-member" src="https://th.bing.com/th/id/OIP.MN_DSpmChqSjO6jqJjlUfgHaEw?pid=ImgDet&rs=1" class="card-img-top" alt="...">
            <div class="card-body text-bg-dark">
                <h5 class=""><strong>{{$member ['nama']}}</strong></h5>
                <h6>Email : {{$member['email']}}</h6>
                <h6>No Telp : {{$member['noTelp']}}</h6>
                <h6>Jenis Kartu : <span class="badge bg-dark" style="border: 1px solid white; border-radius:10px;"><strong style="color: #ffffff;">{{$member['jenis']}}</strong></span></h6>
                <h6>Metode Pembayaran : <span class="badge text-bg-success">{{$member['metode']}}</span></h6>
            </div>
        </div>
    </div>
    @endif

    @if ($loop->iteration % 3 == 0 || $loop->last)
</div>
@endif

@empty
@endforelse



<script>
    document.addEventListener("DOMContentLoaded", function() {
        var logoutButton = document.getElementById("buttonEye");
        logoutButton.addEventListener("click", function() {
            var staticBackdropModal = new bootstrap.Modal(document.getElementById("staticEye"));
            staticBackdropModal.show();

        });
    });

    $(document).ready(function() {
        $('#liveToastBtn').click(function() {
            $('.toast').toast('show');
        });
    });
</script>

<script>
    // const toastTrigger = document.getElementById('liveToastBtn')
    // const toastLiveExample = document.getElementById('liveToast')

    // if (toastTrigger) {
    //     const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
    //     toastTrigger.addEventListener('click', () => {
    //         toastBootstrap.show()
    //     })
    // }
</script>

@endsection