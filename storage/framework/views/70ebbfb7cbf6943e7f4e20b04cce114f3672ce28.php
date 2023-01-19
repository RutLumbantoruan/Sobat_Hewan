<div id="daftar_hewan" class="portfolio row grid-container gutter-20" data-layout="fitRows">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Portfolio Item: Start -->
        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12">
            <!-- Grid Inner: Start -->
            <div class="grid-inner">
                <!-- Image: Start -->
                <div class="portfolio-image">
                    <a href="javascript:void(0);">
                        <img src="<?php echo e($item->takeImage); ?>" alt="<?php echo e($item->nama); ?>">
                    </a>
                    <!-- Overlay: Start -->
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                            
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                    <!-- Overlay: End -->
                </div>
                <!-- Image: End -->
                <!-- Decription: Start -->
                <div class="portfolio-desc">
                    <h3><a href="javascript:void(0);"><?php echo e($item->nama); ?></a></h3>
                    <span>
                        <a href="javascript:void(0);"><?php echo e($item->jenis); ?></a>
                    </span>
                    <a href="hewan/<?php echo e($item->id); ?>/adopsi">
                        Adopsi
                    </a>
                    <?php if($item->user_id == Auth::user()->id): ?>
                    <a href="donasi/<?php echo e($item->id); ?>/edit" style="float:right;">
                        Update
                    </a>
                    <?php endif; ?>
                </div>
                <!-- Description: End -->
            </div>
            <!-- Grid Inner: End -->
        </article>
        <!-- Portfolio Item: End -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- #portfolio end -->
</div>
<?php echo e($data->links()); ?><?php /**PATH C:\xampp\htdocs\sh FInal\resources\views/adopsi/list.blade.php ENDPATH**/ ?>