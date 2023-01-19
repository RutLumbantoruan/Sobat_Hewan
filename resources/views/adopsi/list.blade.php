<div id="daftar_hewan" class="portfolio row grid-container gutter-20" data-layout="fitRows">
    @foreach ($data as $item)
        <!-- Portfolio Item: Start -->
        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12">
            <!-- Grid Inner: Start -->
            <div class="grid-inner">
                <!-- Image: Start -->
                <div class="portfolio-image">
                    <a href="javascript:void(0);">
                        <img src="{{$item->takeImage}}" alt="{{$item->nama}}">
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
                    <h3><a href="javascript:void(0);">{{$item->nama}}</a></h3>
                    <span>
                        <a href="javascript:void(0);">{{$item->jenis}}</a>
                    </span>
                    <a href="hewan/{{$item->id}}/adopsi">
                        Adopsi
                    </a>
                    @if($item->user_id == Auth::user()->id)
                    <a href="donasi/{{$item->id}}/edit" style="float:right;">
                        Update
                    </a>
                    @endif
                </div>
                <!-- Description: End -->
            </div>
            <!-- Grid Inner: End -->
        </article>
        <!-- Portfolio Item: End -->
    @endforeach
<!-- #portfolio end -->
</div>
{{$data->links()}}