<?php $__env->startSection('content'); ?>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <a class="btn btn-danger mb-4"href="<?php echo e(route('donasi_pdf')); ?>" target="_blank">Cetak PDF</a>
            <a class="btn btn-success mb-4"href="<?php echo e(route('donasi_excel')); ?>" target="_blank">Cetak Excel</a>
            <div class="table-responsive">
                <table id="table_donasi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th>Nama Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Lokasi</th>
                            <th>Alasan</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $donasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->user->name); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->jenis); ?></td>
                                <td><?php echo e($item->lokasi); ?></td>
                                <td><?php echo e($item->alasan); ?></td>
                                <td>
                                    <img src="<?php echo e($item->takeImage); ?>" style="width:50%;">
                                </td>
                                <td><?php echo e($item->st); ?></td>
                                <td>
                                    <?php if($item->st == "Pending"): ?>
                                    <a href="javascript:void(0);" onclick="handle_confirm('<?php echo e($item->id); ?>','donasi/<?php echo e($item->id); ?>/deny','#table_donasi')" class="mr-3">
                                        <i class="icon-line-cross-octagon">
                                            Tolak
                                        </i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="handle_confirm('<?php echo e($item->id); ?>','donasi/<?php echo e($item->id); ?>/acc','#table_donasi')">
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
            <div class="bottommargin mx-auto" style="max-width: 750px; min-height: 350px;">
                <canvas id="chart-0"></canvas>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_js'); ?>
<script>
$(document).ready(function() {
    $('#table_donasi').dataTable();
});
var MONTHS = ["","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var color = Chart.helpers.color;
var barChartData = {
    labels: [
        <?php $__currentLoopData = $count_donasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            MONTHS[<?php echo e($count->bulan); ?>],
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    ],
    datasets: [{
        label: 'Donasi',
        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
        borderColor: window.chartColors.red,
        borderWidth: 1,
        data: [
            <?php $__currentLoopData = $count_donasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($count->total); ?>,
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ]
    }]

};

window.onload = function() {
    var ctx = document.getElementById("chart-0").getContext("2d");
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Bar Chart'
            }
        }
    });

};

document.getElementById('randomizeData').addEventListener('click', function() {
    var zero = Math.random() < 0.2 ? true : false;
    barChartData.datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function() {
            return zero ? 0.0 : randomScalingFactor();
        });

    });
    window.myBar.update();
});

var colorNames = Object.keys(window.chartColors);
document.getElementById('addDataset').addEventListener('click', function() {
    var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
    var dsColor = window.chartColors[colorName];
    var newDataset = {
        label: 'Dataset ' + barChartData.datasets.length,
        backgroundColor: color(dsColor).alpha(0.5).rgbString(),
        borderColor: dsColor,
        borderWidth: 1,
        data: []
    };

    for (var index = 0; index < barChartData.labels.length; ++index) {
        newDataset.data.push(randomScalingFactor());
    }

    barChartData.datasets.push(newDataset);
    window.myBar.update();
});

document.getElementById('addData').addEventListener('click', function() {
    if (barChartData.datasets.length > 0) {
        var month = MONTHS[barChartData.labels.length % MONTHS.length];
        barChartData.labels.push(month);

        for (var index = 0; index < barChartData.datasets.length; ++index) {
            //window.myBar.addData(randomScalingFactor(), index);
            barChartData.datasets[index].data.push(randomScalingFactor());
        }

        window.myBar.update();
    }
});

document.getElementById('removeDataset').addEventListener('click', function() {
    barChartData.datasets.splice(0, 1);
    window.myBar.update();
});

document.getElementById('removeData').addEventListener('click', function() {
    barChartData.labels.splice(-1, 1); // remove the label first

    barChartData.datasets.forEach(function(dataset, datasetIndex) {
        dataset.data.pop();
    });

    window.myBar.update();
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.main',["title" => "List Donasi"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sh FInal\resources\views/donasi/index.blade.php ENDPATH**/ ?>