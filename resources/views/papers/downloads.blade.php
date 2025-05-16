@extends('layouts.main')
@section('content')
<style>
.paper-icon {
    background-color: #f5f5f5;
    text-align: center;
    padding: 40px 0;
    border-radius: 5px 5px 0 0;
}
.paper-icon i {
    font-size: 60px;
    color: #0056b3;
}
.research-paper-card {
    border: 1px solid #e8e8e8;
    border-radius: 5px;
    transition: all 0.3s ease;
    height: 100%;
}
.research-paper-card:hover {
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.paper-download-info {
    background-color: #1a1a1a;
    padding: 50px 30px;
    border-radius: 8px;
    color: #fff;
    margin-top: 60px;
    text-align: center;
}

.paper-download-info h3 {
    color: #fff;
    font-size: 28px;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 15px;
}

.paper-download-info h3:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background-color: #0d6efd;
}

.paper-download-info p {
    color: #aaaaaa;
    font-size: 16px;
    line-height: 1.6;
    max-width: 800px;
    margin: 0 auto;
}

.paper-download-info a {
    color: #0d6efd;
    text-decoration: none;
    transition: color 0.3s ease;
}

.paper-download-info a:hover {
    color: #0a58ca;
    text-decoration: underline;
}
</style>

<div class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1>Research Papers Downloads</h1>
                    <div class="breadcrumb-list">
                        <a href="/">Home</a><i class='bx bxs-chevrons-right'></i><span>Paper Downloads</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="paper-downloads-section pt-120 pb-120">
    <div class="container">
        <div class="row mb-60">
            <div class="col-12">
                <div class="section-title2 text-center">
                    <h2>Research Papers</h2>
                    <p>Download our latest research papers on automation, AI, and related technologies</p>
                </div>
            </div>
        </div>
        
        <div class="row g-4">
            @if(isset($papers) && count($papers) > 0)
                @foreach($papers as $paper)
                <div class="col-lg-4 col-md-6">
                    <div class="research-paper-card wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.{{ $loop->iteration % 6 }}s">
                        <div class="paper-icon">
                            <i class='bx bx-file-blank'></i>
                        </div>
                        <div class="paper-content">
                            <div class="paper-meta">
                                <span><i class='bx bx-calendar'></i> {{ $paper->published_date->format('M d, Y') }}</span>
                                <span><i class='bx bx-user'></i> {{ $paper->authors }}</span>
                            </div>
                            <h4>{{ $paper->title }}</h4>
                            <p>{{ Str::limit($paper->abstract, 120) }}</p>
                            <div class="paper-footer">
                                <a href="{{ route('papers.download', $paper->id) }}" class="primary-btn2">
                                    <i class='bx bx-download'></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p>No papers available for download at the moment.</p>
                </div>
            @endif
        </div>
        
        <div class="row mt-80">
            <div class="col-lg-8 mx-auto">
                <div class="paper-download-info text-center">
                    <h3>About Our Research Papers</h3>
                    <p>Our research papers feature cutting-edge insights in automation, AI, and related technologies. Download any paper to read offline or on your device. For more information, visit our <a href="{{ route('papers.index') }}">Research Papers</a> section.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection