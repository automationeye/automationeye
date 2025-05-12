@extends('layouts.main')
@section('content')
<div class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1>Research Papers</h1>
                    <div class="breadcrumb-list">
                        <a href="/">Home</a><i class='bx bxs-chevrons-right'></i><span>Research Papers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="research-papers-section pt-120 pb-120">
    <div class="container">
        <div class="row mb-60" id="featured">
            <div class="col-12">
                <div class="section-title2 text-center">
                    <h2>Featured Papers</h2>
                    <p>Explore our most impactful and groundbreaking research contributions</p>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mb-100">
            @if(isset($featuredPapers) && count($featuredPapers) > 0)
                @foreach($featuredPapers as $paper)
                <div class="col-lg-4 col-md-6">
                    <div class="research-paper-card wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.{{ $loop->iteration }}s">
                        <div class="paper-img">
                            <img src="{{ $paper->qr_code_url }}" alt="QR Code for {{ $paper->title }}" class="img-fluid qr-code">
                                <div class="qr-overlay">
                                    <p>Scan to download</p>
                        </div>
                                </div>
                            <div class="paper-content">
                                <div class="paper-meta">
                                    <span><i class='bx bx-calendar'></i> {{ $paper->published_date->format('M d, Y') }}</span>
                                    <span><i class='bx bx-user'></i> {{ $paper->authors }}</span>
                                </div>
                                <h4><a href="{{ route('papers.show', $paper->slug) }}">{{ $paper->title }}</a></h4>
                                <p>{{ Str::limit($paper->abstract, 150) }}</p>
                                <div class="paper-footer">
                                    <a href="{{ route('papers.show', $paper->slug) }}" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p>No featured papers available at the moment.</p>
                </div>
            @endif
        </div>

        <div class="row mb-60" id="recent">
            <div class="col-12">
                <div class="section-title2 text-center">
                    <h2>Recent Publications</h2>
                    <p>Stay updated with our latest research findings and publications</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-80">
            @if(isset($recentPapers) && count($recentPapers) > 0)
                @foreach($recentPapers as $paper)
                    <div class="col-lg-4 col-md-6 align-items-stretch">
                        <div class="research-paper-list-item d-flex flex-column h-100 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.{{ $loop->iteration }}s">
                            <div class="paper-list-img">
                                <img src="{{ $paper->qr_code_url ?? asset('assets/img/images/global-papers-qr.png') }}" alt="{{ $paper->title }}">
                            </div>
                            <div class="paper-list-content">
                                <div class="paper-meta">
                                    <span><i class='bx bx-calendar'></i> {{ $paper->published_date->format('M d, Y') }}</span>
                                </div>
                                <h5><a href="{{ route('papers.show', $paper->slug) }}">{{ $paper->title }}</a></h5>
                                <p>{{ Str::limit($paper->abstract, 100) }}</p>
                                <div class="paper-footer">
                                    <a href="{{ route('papers.show', $paper->slug) }}" class="read-more-btn">View Details</a>
                                    <a href="{{ $paper->download_url }}" class="download-btn"><i class='bx bx-download'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p>No recent publications available at the moment.</p>
                </div>
            @endif
        </div>

        <div class="row mt-100">
            <div class="col-lg-8 mx-auto">
                <div class="global-qr-section text-center">
                    <h3>Quick Access to All Research Papers</h3>
                    <p>Scan this QR code with your smartphone to access our complete research paper repository on your mobile device.</p>
                    <div class="global-qr-code mt-4">
                        <img src="{{ $globalQrCode }}" alt="Research Papers QR Code">
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection