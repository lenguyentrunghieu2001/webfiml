@extends('layout')

@section('content')
    <div class="container">
        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                    <div class="ajax"></div>
                </div>
            </div>

            {{-- Slider --}}
            @include('pages.inc.slider')
            {{-- EndSlider --}}

            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
                <section id="halim-advanced-widget-2">
                    <div class="section-heading">
                        <a href="danhmuc.php" title="Phim Bộ">
                            <span class="h-text">Phim Bộ</span>
                        </a>
                    </div>
                    <div id="halim-advanced-widget-2-ajax-box" class="halim_box">
                        <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                            <div class="halim-item">
                                <a class="halim-thumb" href="{{ route('movie') }}">
                                    <figure><img class="lazy img-responsive"
                                            src="https://image.bongngocdn.com/upload/poster-loki-marvel-2021.jpg"
                                            alt="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO" title="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO">
                                    </figure>
                                    <span class="status">TẬP 15</span><span class="episode"><i class="fa fa-play"
                                            aria-hidden="true"></i>Vietsub</span>
                                    <div class="icon_overlay"></div>
                                    <div class="halim-post-title-box">
                                        <div class="halim-post-title ">
                                            <p class="entry-title">BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO</p>
                                            <p class="original_title">My Roommate Is a Gumiho</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </article>

                    </div>
                </section>
                <div class="clearfix"></div>
                <section id="halim-advanced-widget-2">
                    <div class="section-heading">
                        <a href="danhmuc.php" title="Phim Lẻ">
                            <span class="h-text">Phim Lẻ</span>
                        </a>
                    </div>
                    <div id="halim-advanced-widget-2-ajax-box" class="halim_box">
                        <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                            <div class="halim-item">
                                <a class="halim-thumb" href="chitiet.php">
                                    <figure><img class="lazy img-responsive"
                                            src="https://upload.wikimedia.org/wikipedia/vi/e/e8/Avengers-Infinity_War-Official-Poster.jpg"
                                            alt="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO" title="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO">
                                    </figure>
                                    <span class="status">TẬP 15</span><span class="episode"><i class="fa fa-play"
                                            aria-hidden="true"></i>Vietsub</span>
                                    <div class="icon_overlay"></div>
                                    <div class="halim-post-title-box">
                                        <div class="halim-post-title ">
                                            <p class="entry-title">BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO</p>
                                            <p class="original_title">My Roommate Is a Gumiho</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </article>
                    </div>
                </section>
                <div class="clearfix"></div>
                <section id="halim-advanced-widget-2">
                    <div class="section-heading">
                        <a href="danhmuc.php" title="Phim Lẻ">
                            <span class="h-text">Phim Chiếu Rạp</span>
                        </a>
                    </div>
                    <div id="halim-advanced-widget-2-ajax-box" class="halim_box">
                        <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                            <div class="halim-item">
                                <a class="halim-thumb" href="chitiet.php">
                                    <figure><img class="lazy img-responsive"
                                            src="https://fptninhbinh.vn/wp-content/uploads/2021/06/bo-gia.jpg"
                                            alt="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO" title="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO">
                                    </figure>
                                    <span class="status">TẬP 15</span><span class="episode"><i class="fa fa-play"
                                            aria-hidden="true"></i>Vietsub</span>
                                    <div class="icon_overlay"></div>
                                    <div class="halim-post-title-box">
                                        <div class="halim-post-title ">
                                            <p class="entry-title">BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO</p>
                                            <p class="original_title">My Roommate Is a Gumiho</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </article>



                    </div>
                </section>
                <div class="clearfix"></div>
            </main>

            {{-- sidebar --}}
            @include('pages.inc.sidebar')
            {{-- endsidebar --}}

        </div>
    </div>
@endsection
