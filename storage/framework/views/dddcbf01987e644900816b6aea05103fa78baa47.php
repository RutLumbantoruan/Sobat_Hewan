
<?php $__env->startSection('content'); ?>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <form id="u_form_update_donasi">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="u_alasan_donasi">Alasan</label>
                        <textarea class="form-control" id="u_alasan_donasi" name="alasan" placeholder="Alasan"><?php echo e($donasi->alasan); ?></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="u_nama_donasi">Nama Hewan</label>
                        <input type="text" class="form-control" id="u_nama_donasi" name="nama" placeholder="Nama Hewan" value="<?php echo e($donasi->nama); ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="u_jenis_donasi">Jenis</label>
                        <select id="u_jenis_donasi" name="jenis" class="form-control">
                            <option disabled selected>Pilih jenis hewan</option>
                            <option value="Anjing" <?= ($donasi->jenis == "Anjing" ? 'selected="selected"' : '') ?>)>Anjing</option>
                            <option value="Kucing" <?= ($donasi->jenis == "Kucing" ? 'selected="selected"' : '') ?>)>Kucing</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="u_lokasi_donasi">Lokasi</label>
                        <input type="text" class="form-control" id="u_lokasi_donasi" name="lokasi" value="<?php echo e($donasi->lokasi); ?>">
                    </div>
                </div>
                <img src="<?php echo e(asset($donasi->TakeImage)); ?>" alt="" style="width:50%;">
                <div class="form-group">
                    <label for="u_gambar_donasi">Foto Hewan</label>
                    <input type="file" class="form-control" id="u_gambar_donasi" name="gambar">
                </div>
                <button id="u_tombol_kirim_donasi" onclick="upload_form('#u_tombol_kirim_donasi','#u_form_update_donasi','<?php echo e(route('donasi_update', $donasi->id)); ?>', '<?php echo e(route('adopsi')); ?>');" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.main',["title" => "Adopsi ".$donasi->nama], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sh FInal\resources\views/donasi/edit.blade.php ENDPATH**/ ?>