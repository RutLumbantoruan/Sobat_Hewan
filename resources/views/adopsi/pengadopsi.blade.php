@extends('theme.main',["title" => "Pengadopsi"])
@section('content')
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
                        @foreach ($adopsi as $item)
                            <tr>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->donasi->nama}}</td>
                                <td>{{$item->donasi->jenis}}</td>
                                <td>{{$item->lokasi}}</td>
                                <td>{{$item->alasan}}</td>
                                <td>{{$item->st}}</td>
                                <td>
                                    @if ($item->st == "Pending")
                                    <a href="javascript:void(0);" onclick="handle_confirm('{{$item->id}}','adopsi/{{$item->id}}/deny','#table_adopsi')" class="mr-3">
                                        <i class="icon-line-cross-octagon">
                                            Tolak
                                        </i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="handle_confirm('{{$item->id}}','adopsi/{{$item->id}}/acc','#table_adopsi')">
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

        </div>
    </div>
</section>
@endsection
@section('custom_js')
<script>
$(document).ready(function() {
    $('#table_adopsi').dataTable();
});
</script>
@endsection