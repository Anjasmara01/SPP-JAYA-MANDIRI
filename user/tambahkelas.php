<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
           <center> <h3 class="btn btn-info mt-3">~ TAMBAH DATA KELAS ~</h3></center>
           <br>
        <form action="admin.php?page=insertkelas" method="post">
        <div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kompetensi Keahlian</label>
            <input type="text" name="kompetensi_keahlian" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
        </form>
        </div>
    </div>
</div>