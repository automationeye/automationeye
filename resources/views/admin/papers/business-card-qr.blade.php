@extends('layouts.main')
@section('content')
<div class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1>Business Card QR Code</h1>
                    <div class="breadcrumb-list">
                        <a href="/">Home</a><i class='bx bxs-chevrons-right'></i>
                        <a href="{{ route('admin.papers.index') }}">Admin</a><i class='bx bxs-chevrons-right'></i>
                        <span>Business Card QR</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="global-qr-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Business Card QR Code</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <p>This QR code links directly to the Research Papers Downloads page. Use this for business cards and marketing materials.</p>
                            
                            <div class="alert alert-info">
                                <p class="mb-1">QR code links to:</p>
                                <p class="fw-bold mb-0">{{ route('papers.downloads') }}</p>
                            </div>
                        </div>
                        
                        <div class="text-center mb-4 py-4 bg-light rounded">
                            <img src="{{ $qrUrl }}" alt="Global QR Code for Papers" class="img-fluid mb-3" style="max-width: 300px;">
                            
                            <div class="mt-3">
                                <a href="{{ $qrUrl }}" download="automationeye-papers-qr.png" class="primary-btn2">
                                    <i class='bx bx-download'></i> Download QR Code
                                </a>
                            </div>
                        </div>
                        
                        <div class="alert alert-warning">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class='bx bx-info-circle fs-4'></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-0">
                                        When scanning this QR code, users will be taken directly to the downloads page where they can download any research paper.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection