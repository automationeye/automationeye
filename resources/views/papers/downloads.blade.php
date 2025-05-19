@extends('layouts.main')
@section('content')
<style>
.title{
        color: #0056b3;
    }
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

.download-btn {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    aspect-ratio: 1/1;
    width: 150px;
    height: 50px;
    padding: 12px;
    border-radius: 4px;
    flex-direction: column;
    gap: 5px;
}

.download-btn .bx-download {
    display: inline-block;
    line-height: 1;
}

.download-btn.loading {
    background-color: #004085;
    pointer-events: none;
}

.download-btn .btn-text {
    display: inline-block;
    transition: opacity 0.3s ease;
}

.download-btn .spinner {
    position: absolute;
    display: none;
    width: 20px;
    height: 20px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    border-top: 2px solid #fff;
    animation: spin 1s linear infinite;
}

.download-btn.loading .btn-text {
    opacity: 0.5;
}

.download-btn.loading .spinner {
    display: block;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.toast-container {
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
}

.toast {
    background-color: #333;
    color: white;
    padding: 12px 20px;
    border-radius: 4px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
}

.toast.show {
    opacity: 1;
}

.toast i {
    margin-right: 10px;
    font-size: 18px;
}

.toast.success {
    background-color: #28a745;
}

.toast.info {
    background-color: #0d6efd;
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
                            <div class="title">
                            <h4>{{ $paper->title }}</h4>
                            </div>
                            <p>{{ Str::limit($paper->abstract, 120) }}</p>
                            <div class="paper-footer">
                                <a href="{{ route('papers.download', $paper->id) }}" class="primary-btn2 download-btn" data-paper-id="{{ $paper->id }}">
                                    <span class="spinner"></span>
                                    <span class="btn-text"><i class='bx bx-download'></i>&nbsp;Download</span>
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

<div class="toast-container"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const downloadButtons = document.querySelectorAll('.download-btn');
    
    downloadButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            
            this.classList.add('loading');
            
            const paperCard = this.closest('.research-paper-card');
            const paperTitle = paperCard ? paperCard.querySelector('.title h4').textContent : 'Paper';
            
            showToast('info', '<i class="bx bx-download"></i> Downloading "' + paperTitle + '"');
            setTimeout(() => {
                if (this.classList.contains('loading')) {
                    this.classList.remove('loading');
                    showToast('success', '<i class="bx bx-check"></i> Download complete for "' + paperTitle + '"');
                }
            }, 5000);
        });
    });
    
    function showToast(type, message) {
        const toastContainer = document.querySelector('.toast-container');
        const toast = document.createElement('div');
        toast.className = `toast ${type}`;
        toast.innerHTML = message;
        
        toastContainer.appendChild(toast);
        
        toast.offsetHeight;
        
        toast.classList.add('show');
        
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => {
                toastContainer.removeChild(toast);
            }, 300);
        }, 3000);
    }
});
</script>
@endsection