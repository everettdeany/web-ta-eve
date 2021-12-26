@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Add Video Data')

@section('container')

    <div class="" style="padding: 2.5% 7.5%;">
        <h1>Input Data Video</h1>
        <form action="/admin/add-video-data-post" method="post">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="input judul..." name="judul">
            </div>
            <div class="mb-3">
                <label for="link-video" class="form-label">Link Video</label>
                <input type="text" class="form-control" id="link-video" placeholder="input link video..." name="link-video">
            </div>
            <div class="mb-3">
                <label for="pengajar" class="form-label">Pengajar</label>
                <select class="form-control form-select" aria-label="pengajar" name="pengajar">
                    @foreach($PengajarData as $pengajar)
                        <option value="{{ $pengajar->id }}">{{ $pengajar->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="materi" class="form-label">Materi Video</label>
                <select class="form-control form-select" aria-label="materi" name="materi">
                    @for($i = 0; $i < count($MateriData); $i++)
                        @if($i != 0)
                            <option value="{{ $MateriData[$i]->id }}">{{ $MateriData[$i]->nama }}</option>
                        @else
                            <option selected value="{{ $MateriData[$i]->id }}">{{ $MateriData[$i]->nama }}</option>
                        @endif
                    @endfor
                </select>
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi Video</label>
                <!-- <input id="duration-input" type="text" required pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}:[0-9]{2}" value="00:00:00:00" title="Write a duration in the format hh:mm:ss:ms">
                <p id="output"></p> -->
                <div class="row">
                    <div class="col-2" style="display: flex; align-items: center;">
                        <input type="number" min="0" class="form-control" id="durasi_jam" placeholder="input..." name="durasi_jam">
                        <span style="margin-left: 10px;">Jam</span>
                    </div>
                    <div class="col-2" style="display: flex; align-items: center;">
                        <input type="number" min="0" class="form-control" id="durasi_menit" placeholder="input..." name="durasi_menit">
                        <span style="margin-left: 10px;">Menit</span>
                    </div>
                    <div class="col-2" style="display: flex; align-items: center;">
                        <input type="number" min="0" class="form-control" id="duras_detik" placeholder="input..." name="durasi_detik">
                        <span style="margin-left: 10px;">Detik</span>
                    </div>
                </div>
                <span style="font-size: 10px;">Contoh pengisian durasi : 1 jam 3 menit 45 detik</span>
            </div>
            <div class="mb-3">
                <label for="tanggal_dibuat" class="form-label">Tanggal Video Dibuat</label>
                <input type="date" class="form-control" id="tanggal_dibuat" placeholder="input tanggal_dibuat..." name="tanggal_dibuat">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Example textarea</label>
                <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <!-- <script type="text/javascript">
        let durationIn = document.getElementById("duration-input");
        let resultP = document.getElementById("output");

        durationIn.addEventListener("change", function (e) {
            resultP.textContent = "";
            durationIn.checkValidity();
        });

        durationIn.addEventListener("invalid", function (e) {
            resultP.textContent = "Invalid input";
        });
    </script> -->
@endsection
    