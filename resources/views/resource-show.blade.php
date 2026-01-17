@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-neutral-100">
    {{-- TODO: Haal individuele resource op via API call in controller --}}
    {{-- Voorbeeld: $resource = Http::get("/api/resources/{$id}")->json(); --}}
    {{-- Of via Eloquent: $resource = Resource::findOrFail($id); --}}
    
    @php
        // TODO: Vervang dit met echte API call
        // Placeholder data structuur:
        // $resource = [
        //     'id' => 1,
        //     'name' => 'Laptops',
        //     'description' => 'High-performance laptops for development work',
        //     'status' => 'available',
        //     'available_count' => 5,
        //     'total_count' => 10,
        //     'category' => 'Electronics',
        //     'image_url' => '/images/laptops.jpg',
        //     'icon_type' => 'laptop',
        //     'specifications' => ['Intel i7', '16GB RAM', '512GB SSD'],
        //     'location' => 'Building A, Room 101',
        //     'booking_info' => ['Max 7 days', 'Requires student ID']
        // ];
        
        // Tijdelijk: placeholder
        $resource = null;
    @endphp

    @if($resource)
        <!-- Hero Section -->
        <section class="bg-voodoo py-12 lg:py-16">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center gap-4 mb-4">
                    <a href="{{ route('resources') }}" class="text-white/80 hover:text-white transition-colors">
                        ← Back to Resources
                    </a>
                </div>
                <div class="flex flex-col md:flex-row items-start gap-8">
                    {{-- TODO: Resource image uit API: $resource['image_url'] --}}
                    <div class="w-full md:w-1/3">
                        <div class="bg-neutral-300 rounded-2xl h-64 md:h-96 flex items-center justify-center">
                            @if(isset($resource['image_url']) && $resource['image_url'])
                                <img src="{{ $resource['image_url'] }}" alt="{{ $resource['name'] }}" class="w-full h-full object-cover rounded-2xl">
                            @else
                                {{-- Fallback: Icon --}}
                                @include('components.resource-icon', ['iconType' => $resource['icon_type'] ?? 'default'])
                            @endif
                        </div>
                    </div>
                    
                    <div class="flex-1">
                        {{-- TODO: Resource naam uit API: $resource['name'] --}}
                        <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-4">
                            {{ $resource['name'] ?? 'Resource Name' }}
                        </h1>
                        
                        {{-- TODO: Status uit API: $resource['status'] --}}
                        <div class="flex items-center gap-4 mb-6">
                            <span class="px-4 py-2 bg-white/20 text-white rounded-lg text-sm font-medium">
                                {{ ucfirst($resource['status'] ?? 'Available') }}
                            </span>
                            {{-- TODO: Categorie uit API: $resource['category'] --}}
                            @if(isset($resource['category']))
                                <span class="px-4 py-2 bg-rum/30 text-white rounded-lg text-sm">
                                    {{ $resource['category'] }}
                                </span>
                            @endif
                        </div>
                        
                        {{-- TODO: Beschikbaarheid uit API: $resource['available_count'], $resource['total_count'] --}}
                        @if(isset($resource['available_count']) && isset($resource['total_count']))
                            <div class="mb-6">
                                <p class="text-white/90 text-lg">
                                    <span class="font-bold">{{ $resource['available_count'] }}</span> of 
                                    <span class="font-bold">{{ $resource['total_count'] }}</span> available
                                </p>
                            </div>
                        @endif
                        
                        {{-- TODO: Booking button - link naar booking pagina met resource ID --}}
                        <a href="{{ route('bookings.create', ['resource_id' => $resource['id']]) }}" 
                           class="inline-block bg-white text-voodoo px-8 py-3 rounded-lg font-medium hover:bg-lavender-gray transition-colors">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Details Section -->
        <section class="py-12 lg:py-16">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Left Column: Description & Details -->
                    <div>
                        <h2 class="font-heading text-3xl font-bold text-voodoo mb-6">Description</h2>
                        {{-- TODO: Beschrijving uit API: $resource['description'] --}}
                        <p class="text-base text-neutral-700 leading-relaxed mb-8">
                            {{ $resource['description'] ?? 'No description available.' }}
                        </p>
                        
                        {{-- TODO: Specifications uit API: $resource['specifications'] --}}
                        @if(isset($resource['specifications']) && is_array($resource['specifications']))
                            <h3 class="font-heading text-2xl font-bold text-voodoo mb-4">Specifications</h3>
                            <ul class="list-disc list-inside text-neutral-700 space-y-2">
                                @foreach($resource['specifications'] as $spec)
                                    <li>{{ $spec }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    
                    <!-- Right Column: Booking Info -->
                    <div>
                        <h2 class="font-heading text-3xl font-bold text-voodoo mb-6">Booking Information</h2>
                        <div class="bg-white rounded-2xl p-6 shadow-lg">
                            {{-- TODO: Location uit API: $resource['location'] --}}
                            @if(isset($resource['location']))
                                <div class="mb-4">
                                    <h4 class="font-semibold text-neutral-900 mb-2">Location</h4>
                                    <p class="text-neutral-600">{{ $resource['location'] }}</p>
                                </div>
                            @endif
                            
                            {{-- TODO: Booking info uit API: $resource['booking_info'] --}}
                            @if(isset($resource['booking_info']) && is_array($resource['booking_info']))
                                <div class="mb-4">
                                    <h4 class="font-semibold text-neutral-900 mb-2">Important Notes</h4>
                                    <ul class="list-disc list-inside text-neutral-600 space-y-1">
                                        @foreach($resource['booking_info'] as $info)
                                            <li>{{ $info }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            {{-- TODO: Availability calendar/schedule uit API --}}
                            <div>
                                <h4 class="font-semibold text-neutral-900 mb-2">Availability</h4>
                                <p class="text-neutral-600">
                                    {{-- TODO: Calendar component of schedule data uit API --}}
                                    Check calendar for available time slots
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        {{-- TODO: Error handling wanneer resource niet gevonden wordt --}}
        <section class="py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
                <h1 class="font-heading text-4xl font-bold text-voodoo mb-4">Resource not found</h1>
                <p class="text-neutral-600 mb-8">The resource you're looking for doesn't exist or has been removed.</p>
                <a href="{{ route('resources') }}" class="bg-voodoo text-white px-8 py-3 rounded-lg font-medium hover:bg-rum transition-colors">
                    Back to Resources
                </a>
            </div>
        </section>
    @endif
</div>

{{-- TODO: JavaScript voor interactieve features (bijv. calendar, real-time availability) --}}
<script>
    // TODO: Functie voor het ophalen van resource details via API
    // async function fetchResourceDetails(id) {
    //     try {
    //         const response = await fetch(`/api/resources/${id}`);
    //         const data = await response.json();
    //         // Update de pagina met resource data
    //         updateResourceDetails(data);
    //     } catch (error) {
    //         console.error('Error fetching resource details:', error);
    //     }
    // }
    
    // TODO: Functie voor het ophalen van beschikbaarheid/calendar
    // async function fetchAvailability(resourceId, startDate, endDate) {
    //     try {
    //         const response = await fetch(`/api/resources/${resourceId}/availability?start=${startDate}&end=${endDate}`);
    //         const data = await response.json();
    //         // Update calendar met beschikbaarheid
    //         updateCalendar(data);
    //     } catch (error) {
    //         console.error('Error fetching availability:', error);
    //     }
    // }
</script>
@endsection

