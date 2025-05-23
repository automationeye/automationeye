@extends('layouts.main')
@section('content')
<div class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1>Research Paper Details</h1>
                    <div class="breadcrumb-list">
                        <a href="/">Home</a><i class='bx bxs-chevrons-right'></i>
                        <a href="{{ route('papers.index') }}">Research Papers</a><i class='bx bxs-chevrons-right'></i>
                        <span>{{ $paper->title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="text-end mb-3">
        <a href="{{ route('admin.papers.edit', $paper->id) }}" class="btn btn-warning btn-sm">
            <i class="bx bx-edit"></i> Edit Paper
        </a>
    </div>
<div class="paper-details-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="paper-details-wrapper">
                    <div class="paper-header">
                        <h2>{{ $paper->title }}</h2>
                        <div class="paper-meta">
                            <span><i class='bx bx-calendar'></i> Published: {{ $paper->published_date->format('F d, Y') }}</span>
                            <span><i class='bx bx-user'></i> Authors: {{ $paper->authors }}</span>
                        </div>
                    </div>

                    @if($paper->thumbnail_url)
                    <div class="paper-feature-img">
                        <img src="{{ $paper->thumbnail_url }}" alt="{{ $paper->title }}">
                    </div>
                    @endif

                    <div class="paper-abstract">
                        <h3>Abstract</h3>
                        <p>{{ $paper->abstract }}</p>
                    </div>

                    @if($paper->keywords)
                    <div class="paper-keywords">
                        <h3>Keywords</h3>
                        <div class="keywords-list">
                            @foreach(explode(',', $paper->keywords) as $keyword)
                                <span class="keyword-badge">{{ trim($keyword) }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if($paper->excerpt)
                    <div class="paper-excerpt">
                        <h3>Excerpt</h3>
                        <div class="excerpt-content">
                            {!! $paper->excerpt !!}
                        </div>
                    </div>
                    @endif

                    <div class="paper-download-section">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="download-info">
                                    <h4>Get the full paper</h4>
                                    <p>Download the complete research paper to read offline or access on your mobile device.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <a href="{{ $paper->download_url }}" class="primary-btn2">
                                    <i class='bx bx-download'></i> Download Paper
                                </a>
                            </div>
                        </div>
                    </div>

                    @if($paper->references)
                    <div class="paper-references">
                        <h3>References</h3>
                        <div class="references-list">
                            {!! $paper->references !!}
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-4">
                <div class="paper-sidebar">
                    <div class="sidebar-widget qr-widget">
                        <h4>Scan to Download</h4>
                        <div class="qr-code-container">
                            @if($paper->qr_code_url)
                                <img src="{{ $paper->qr_code_url }}" alt="QR Code for {{ $paper->title }}" class="img-fluid">
                            @else
                                <div class="alert alert-warning">QR code not available</div>
                            @endif
                        </div>
                        <p>Scan this QR code with your smartphone to download this research paper directly to your mobile device.</p>
                    </div>

                    <div class="sidebar-widget author-widget">
                        <h4>About the Authors</h4>
                        <div class="author-info">
                            {!! $paper->author_bios !!}
                        </div>
                    </div>

                    <div class="sidebar-widget related-papers">
                        <h4>Related Papers</h4>
                        <div class="related-papers-list">
                            @foreach($relatedPapers as $relatedPaper)
                                <div class="related-paper-item">
                                    <a href="{{ route('papers.show', $relatedPaper->slug) }}">
                                        <div class="related-paper-img">
                                            <img src="{{ $paper->qr_code_url }}" alt="QR Code for {{ $paper->title }}" class="img-fluid">
                                        </div>
                                        <div class="related-paper-content">
                                            <h6>{{ $relatedPaper->title }}</h6>
                                            <span class="related-paper-date">{{ $relatedPaper->published_date->format('M d, Y') }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
document.addEventListener('DOMContentLoaded', function() {
    const qrImage = document.querySelector('.qr-code-container img');
    if (qrImage) {
        qrImage.onerror = function() {
            this.parentNode.innerHTML = '<div class="alert alert-warning">QR code not available. Please use the download button instead.</div>';
        };
    }
});
</script>