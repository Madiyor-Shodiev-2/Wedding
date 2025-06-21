{{-- resources/views/welcome.blade.php --}}
@foreach($categories as $cat)
<h3 class="mt-5 mb-3 text-primary">{{ $cat }}</h3>
<div class="row g-3">
    @forelse($servicesByCategory[$cat] as $service)
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            @if($service->image)
            <img src="{{ asset('storage/' . $service->image->path) }}" class="card-img-top" style="height:200px;object-fit:cover;" alt="Not found">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $service->name }}</h5>
                <p class="card-text">{{ $service->description }}</p>
                @if($service->venue)
                <div class="mb-2 text-muted small">{{ $service->venue->venue_name }}</div>
                @endif
                <span class="badge bg-primary">{{ $service->type }}</span>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">Xizmatlar yo'q</div>
    @endforelse
</div>
@endforeach

{{-- Кнопка для обновления кеша --}}
<a href="{{ route('refresh.services') }}" class="btn btn-outline-primary mt-5">Keshni yangilash</a>