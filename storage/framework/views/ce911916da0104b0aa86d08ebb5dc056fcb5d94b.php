
<?php $__env->startSection('content'); ?>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="table-responsive">
                <table id="table_adopsi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th>Nama Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Lokasi</th>
                            <th>Alasan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $adopsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->user->name); ?></td>
                                <td><?php echo e($item->donasi->nama); ?></td>
                                <td><?php echo e($item->donasi->jenis); ?></td>
                                <td><?php echo e($item->lokasi); ?></td>
                                <td><?php echo e($item->alasan); ?></td>
                                <td><?php echo e($item->st); ?></td>
                                <td>
                                    <?php if($item->st == "Pending"): ?>
                                    <a href="javascript:void(0);" onclick="handle_confirm('<?php echo e($item->id); ?>','adopsi/<?php echo e($item->id); ?>/deny','#table_adopsi')" class="mr-3">
                                        <i class="icon-line-cross-octagon">
                                            Tolak
                                        </i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="handle_confirm('<?php echo e($item->id); ?>','adopsi/<?php echo e($item->id); ?>/acc','#table_adopsi')">
                                        <i class="icon-line-circle-check">
                                            Terima
                                        </i>
                                    </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_js'); ?>
<script>
$(document).ready(function() {
    $('#table_adopsi').dataTable();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.main',["title" => "Pengadopsi"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sh FInal\resources\views/adopsi/pengadopsi.blade.php ENDPATH**/ ?>