@extends('admin/app')

@section('content')
<link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
<script defer src="https://pyscript.net/alpha/pyscript.js"></script>

<py-env>
    - matplotlib
    - pandas
    - paths:
        - py/data.csv
</py-env>
<div class="container-fluid py-3">
    <div class="row mt-4">
        <div class="mb-lg-0 mb-4">
            <div class="card ">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <div class="d-flex justify-content-between ">
                            <h6 class="mb-0"><?= $title ?></h6>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <!-- @foreach($Grafik as $row)
                        @if($row->img == "grafik.png")
                        <center>
                            <img src="{{'/assets/img/'.$row->img}}" alt="Grafik Jenis Usaha">
                        </center>
                        @endif
                        @endforeach -->
                        <center>
                        <div id="grafik"></div>
                        </center>
                        <py-script output="grafik" src="py/banyak_jenis_usaha_01.py">
                        </py-script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end menu -->
@endsection