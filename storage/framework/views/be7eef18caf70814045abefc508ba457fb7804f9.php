
<?php $__env->startSection('content'); ?>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <form id="form_create_adopsi">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama_adopsi">Nama Hewan</label>
                        <input type="hidden" class="form-control" name="donasi_id" value="<?php echo e($donasi->id); ?>" readonly placeholder="Nama Hewan">
                        <input type="text" class="form-control" id="nama_adopsi" name="nama" value="<?php echo e($donasi->nama); ?>" readonly placeholder="Nama Hewan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lokasi_adopsi">Lokasi Anda</label>
                        <input type="text" class="form-control" id="lokasi_adopsi" name="lokasi">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="alasan_adopsi">Alasan</label>
                        <textarea class="form-control" id="alasan_adopsi" name="alasan" placeholder="Alasan"></textarea>
                    </div>
                </div>
                <button id="tombol_kirim_adopsi" onclick="save_form('#tombol_kirim_adopsi','#form_create_adopsi','<?php echo e(route('adopsi_store')); ?>' ,'<?php echo e(route('adopsi')); ?>');" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.main',["title" => "Adopsi ".$donasi->nama], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\source\sh FInal\resources\views/adopsi/create.blade.php ENDPATH**/ ?>