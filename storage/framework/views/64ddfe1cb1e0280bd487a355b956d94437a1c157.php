<!-- JavaScripts ============================================= -->
<script src="<?php echo e(asset('semicolon/js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('semicolon/js/plugins.min.js')); ?>"></script>
<script src="<?php echo e(asset('semicolon/js/components/bs-datatable.js')); ?>"></script>
<!-- Footer Scripts ============================================= -->
<script src="<?php echo e(asset('semicolon/js/functions.js')); ?>"></script>
<script src="<?php echo e(asset('semicolon/js/chart.js')); ?>"></script>
<script src="<?php echo e(asset('semicolon/js/chart-utils.js')); ?>"></script>
<script type="text/javascript">
    $("body").on("contextmenu", "img", function(e) {
        return false;
    });
    $('img').attr('draggable', false);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
            event.preventDefault();
            load_list(1);
            }
        });
    });
    let str = `really long base64 string`;
    let blob = atob(str);
</script>
<script src="<?php echo e(asset('js/toastr.js')); ?>"></script>
<script src="<?php echo e(asset('js/swa2.js')); ?>"></script>
<script src="<?php echo e(asset('js/plugin.js')); ?>"></script>
<script src="<?php echo e(asset('js/routes.js')); ?>"></script><?php /**PATH C:\xampp\htdocs\source\sh FInal\resources\views/theme/script.blade.php ENDPATH**/ ?>