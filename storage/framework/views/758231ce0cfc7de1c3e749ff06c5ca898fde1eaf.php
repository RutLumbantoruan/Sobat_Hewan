<?php if($paginator->hasPages()): ?>
<div class="card card-custom">
    <div class="card-body py-7">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex flex-wrap mr-3">
                <?php if($paginator->onFirstPage()): ?>
                <?php else: ?>
                <a halaman="<?php echo e($paginator->previousPageUrl()); ?>" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 paginasi">
                    <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                </a>
                <?php endif; ?>
                
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(is_string($element)): ?>
                    <a href="javascript:void(0);" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1 disabled">...</a>
                    <?php endif; ?>
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <a href="javascript:void(0);" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1 paginasi"><?php echo e($page); ?></a>
                            <?php else: ?>
                                <a halaman="<?php echo e($url); ?>" href="javascript:void(0);" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1 paginasi"><?php echo e($page); ?></a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <?php if($paginator->hasMorePages()): ?>
                <a halaman="<?php echo e($paginator->nextPageUrl()); ?>" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 paginasi">
                    <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                </a>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <div class="d-flex align-items-center">
                
                <span class="text-muted">Displaying <?php echo e($paginator->firstItem()); ?> to <?php echo e($paginator->lastItem()); ?> of <?php echo e($paginator->total()); ?> records</span>
            </div>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\sh FInal\resources\views/theme/pagination.blade.php ENDPATH**/ ?>