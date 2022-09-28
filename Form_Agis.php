<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan Membuat Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <form class="border border-light p-5">

            <p class="h4 mb-4 text-center">Isi Data</p>
        
            <label for="napeg">Nama Pegawai</label>
            <input type="text" id="napeg" class="form-control mb-4" placeholder="Masukkan Nama">

            <label for="agama">Agama</label>            
            <br>
            <select class="browser-default custom-select mb-4" id="agama">
                <option value="" disabled="" selected="">--- Pilih Agama ---</option>
                <option value="1">Islam</option>
                <option value="2">Kristen Katolik</option>
                <option value="3">Kristen Protestan</option>
                <option value="4">Hindu</option>
                <option value="5">Budha</option>
                <option value="6">Konghucu</option>
            </select>
            <br>
            <small id="helper" class="form-text text-muted mb-4">Jabatan</small>
        
            <div class="custom-control custom-radio mb-4">
                <input type="radio" class="custom-control-input" id="manager" name="custom-control-input">
                <label class="custom-control-label" for="manager">Manager</label>
            </div>
        
            <div class="custom-control custom-radio mb-4">
                <input type="radio" class="custom-control-input" id="asisten" name="custom-control-input">
                <label class="custom-control-label" for="asisten">Asisten</label>
            </div>
        
            <div class="custom-control custom-radio mb-4">
                <input type="radio" class="custom-control-input" id="kabag" name="custom-control-input">
                <label class="custom-control-label" for="kabag">Kepala Bagian</label>
            </div>
        
            <div class="custom-control custom-radio mb-4">
                <input type="radio" class="custom-control-input" id="staff" name="custom-control-input">
                <label class="custom-control-label" for="staff">Staff</label>
            </div>
        
            <small id="helper" class="form-text text-muted mb-4">Status</small>
        
            <div class="custom-control custom-radio mb-4">
                <input type="radio" class="custom-control-input" id="menikah" name="custom-control-input">
                <label class="custom-control-label" for="menikah">Menikah</label>
            </div>
        
            <div class="custom-control custom-radio mb-4">
                <input type="radio" class="custom-control-input" id="nonikah" name="custom-control-input">
                <label class="custom-control-label" for="nonikah">Belum Menikah</label>
            </div>
        
            <label for="anak">Jumlah Anak</label>
            <input type="text" id="anak" class="form-control mb-4" placeholder="--- Masukkan Jumlah Anak ---">
        
            <button class="btn btn-info btn-block" type="submit">Save</button>
        </form>
    </div>
    </div>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>