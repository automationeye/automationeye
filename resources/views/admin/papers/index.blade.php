@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Research Papers</h1>
        <a href="{{ route('admin.papers.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New Paper
        </a>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Research Papers</h6>
        </div>
        <a href="{{ route('admin.papers.business.card.qr') }}" class="btn btn-info mb-3">
        <i class="bx bx-qr"></i> Generate Business Card QR
        </a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="papers-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Authors</th>
                            <th>Publication Date</th>
                            <th>Featured</th>
                            <th>Downloads</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($papers as $paper)
                            <tr>
                                <td>{{ $paper->title }}</td>
                                <td>{{ $paper->authors }}</td>
                                <td>{{ $paper->published_date->format('M d, Y') }}</td>
                                <td>{!! $paper->is_featured ? '<span class="badge badge-success">Yes</span>' : '<span class="badge badge-secondary">No</span>' !!}</td>
                                <td>{{ $paper->downloads }}</td>
                                <td>
                                    <a href="{{ route('papers.show', $paper->slug) }}" class="btn btn-sm btn-info" target="_blank">View</a>
                                    <a href="{{ route('admin.papers.edit', $paper->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.papers.destroy', $paper->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this paper?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No research papers found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                
                <div class="mt-4">
                    {{ $papers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#papers-table').DataTable();
    });
</script>
@endsection