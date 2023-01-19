<div id="ModalCreateDonasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="CreateDonasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-body">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="CreateDonasiLabel">Donasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form_create_donasi">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="alasan_donasi">Alasan</label>
                                <textarea class="form-control" id="alasan_donasi" name="alasan" placeholder="Alasan"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nama_donasi">Nama Hewan</label>
                                <input type="text" class="form-control" id="nama_donasi" name="nama" placeholder="Nama Hewan">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="jenis_donasi">Jenis</label>
                                <select id="jenis_donasi" name="jenis" class="form-control">
                                    <option disabled selected>Pilih jenis hewan</option>
                                    <option value="Anjing">Anjing</option>
                                    <option value="Kucing">Kucing</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lokasi_donasi">Lokasi</label>
                                <input type="text" class="form-control" id="lokasi_donasi" name="lokasi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gambar_donasi">Foto Hewan</label>
                            <input type="file" class="form-control" id="gambar_donasi" name="gambar">
                        </div>
                        <button id="tombol_kirim_donasi" onclick="upload_form_modal('#tombol_kirim_donasi','#form_create_donasi','{{route('donasi_store')}}','#ModalCreateDonasi');" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>