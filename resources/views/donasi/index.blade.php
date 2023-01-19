@extends('theme.main',["title" => "List Donasi"])
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <a class="btn btn-danger mb-4"href="{{route('donasi_pdf')}}" target="_blank">Cetak PDF</a>
            <a class="btn btn-success mb-4"href="{{route('donasi_excel')}}" target="_blank">Cetak Excel</a>
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
                        @foreach ($donasi as $item)
                            <tr>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->jenis}}</td>
                                <td>{{$item->lokasi}}</td>
                                <td>{{$item->alasan}}</td>
                                <td>
                                    <img src="{{$item->takeImage}}" style="width:50%;">
                                </td>
                                <td>{{$item->st}}</td>
                                <td>
                                    @if ($item->st == "Pending")
                                    <a href="javascript:void(0);" onclick="handle_confirm('{{$item->id}}','donasi/{{$item->id}}/deny','#table_donasi')" class="mr-3">
                                        <i class="icon-line-cross-octagon">
                                            Tolak
                                        </i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="handle_confirm('{{$item->id}}','donasi/{{$item->id}}/acc','#table_donasi')">
                                        <i class="icon-line-circle-check">
                                            Terima
                                        </i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="bottommargin mx-auto" style="max-width: 750px; min-height: 350px;">
                <canvas id="chart-0"></canvas>
            </div>
        </div>
    </div>
</section>
@endsection
@section('custom_js')
<script>
$(document).ready(function() {
    $('#table_donasi').dataTable();
});
var MONTHS = ["","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var color = Chart.helpers.color;
var barChartData = {
    labels: [
        @foreach($count_donasi AS $count)
            MONTHS[{{$count->bulan}}],
        @endforeach
    ],
    datasets: [{
        label: 'Donasi',
        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
        borderColor: window.chartColors.red,
        borderWidth: 1,
        data: [
            @foreach($count_donasi AS $count)
                {{$count->total}},
            @endforeach
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
@endsection
