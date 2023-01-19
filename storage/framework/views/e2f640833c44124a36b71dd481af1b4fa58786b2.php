<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.css')); ?>" />
    <title><?php echo e(config('app.name')); ?> <?php echo e('| ' . $title ?? ''); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('images/orange.png')); ?>" />
</head><?php /**PATH C:\xampp\htdocs\sh FInal\resources\views/theme/auth_head.blade.php ENDPATH**/ ?>