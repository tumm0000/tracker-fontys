@extends('layouts.app')

@section('content')
<div class="min-h-screen">

    <!-- Hero Section -->
    <section class="bg-voodoo py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-bold text-white tracking-wide mb-3">Available</h2>
                <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl text-white mb-6 text-balance">
                    Book what you need
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Find and reserve equipment for your projects in minutes
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="#resources" class="bg-white text-voodoo px-8 py-3 rounded-lg font-medium hover:bg-lavender-gray transition-colors">
                        Browse
                    </a>
                    <a href="/login" class="bg-rum text-white px-8 py-3 rounded-lg font-medium hover:bg-rum/80 transition-colors">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipment Section -->
    <section id="resources" class="bg-neutral-100 py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-sm font-medium text-voodoo/70 uppercase tracking-wide mb-3">Equipment</h2>
                <h3 class="font-heading text-4xl md:text-5xl font-bold text-voodoo">Resources</h3>
                <p class="text-base text-rum mt-4">Filter by category or search for what you need</p>
            </div>

            {{-- TODO: Haal resources op via API call in controller --}}
            {{-- Voorbeeld: $resources = Http::get('/api/resources')->json(); --}}
            {{-- Of via Eloquent: $resources = Resource::all(); --}}
            
            {{-- Placeholder: Dit moet vervangen worden door echte data uit API --}}
            @php
                // TODO: Vervang dit met echte API call
                // Voorbeeld structuur van wat de API zou moeten returnen:
                // $resources = [
                //     ['id' => 1, 'name' => 'Laptops', 'status' => 'available', 'icon_type' => 'laptop', 'available_count' => 5, 'total_count' => 10, 'category' => 'Electronics'],
                //     ['id' => 2, 'name' => 'Study Rooms', 'status' => 'available', 'icon_type' => 'room', 'available_count' => 3, 'total_count' => 5, 'category' => 'Rooms'],
                //     // ... etc
                // ];
                
                // Tijdelijk: lege array zodat de foreach werkt (vervang met echte data)
                $resources = [];
            @endphp

            <div class="grid md:grid-cols-3 gap-8 mt-16" id="resources-grid">
                {{-- TODO: Loop door resources uit API --}}
                @forelse($resources as $index => $resource)
                    {{-- Gebruik de resource-card component --}}
                    @include('components.resource-card', ['resource' => $resource, 'index' => $index])
                @empty
                    {{-- TODO: Loading state of empty state kan hier --}}
                    {{-- Tijdelijk: placeholder voor wanneer er geen data is --}}
                    <div class="col-span-3 text-center py-12">
                        <p class="text-neutral-600">No resources available. Waiting for API connection...</p>
                        {{-- TODO: Verwijder deze placeholder wanneer API werkt --}}
                    </div>
                @endforelse
            </div>

            <!-- View All Button -->
            {{-- TODO: Toon alleen als er meer dan 6 resources zijn (of gebruik paginatie uit API) --}}
            @if(count($resources) > 6)
                <div class="text-center mt-12">
                    <button id="view-all-btn" onclick="toggleResources()" class="bg-voodoo text-white px-8 py-3 rounded-lg font-medium hover:bg-rum transition-colors">
                        View All
                    </button>
                </div>
            @endif

            <script>
                // TODO: Deze functie kan aangepast worden wanneer API filtering wordt toegevoegd
                function toggleResources() {
                    const additionalResources = document.querySelectorAll('.additional-resource');
                    const viewAllBtn = document.getElementById('view-all-btn');
                    
                    // Check of er verborgen resources zijn
                    if (additionalResources.length === 0) {
                        // TODO: Als alle resources al zichtbaar zijn, kan je hier API call doen voor meer resources
                        // Bijvoorbeeld: fetchMoreResources();
                        return;
                    }
                    
                    if (additionalResources[0].classList.contains('hidden')) {
                        additionalResources.forEach(resource => {
                            resource.classList.remove('hidden');
                        });
                        viewAllBtn.textContent = 'Show Less';
                    } else {
                        additionalResources.forEach(resource => {
                            resource.classList.add('hidden');
                        });
                        viewAllBtn.textContent = 'View All';
                        document.getElementById('resources').scrollIntoView({ behavior: 'smooth' });
                    }
                }
                
                // TODO: Functie voor het ophalen van resources via API (wanneer backend klaar is)
                // async function fetchResources() {
                //     try {
                //         const response = await fetch('/api/resources');
                //         const data = await response.json();
                //         // Update de resources grid met nieuwe data
                //         updateResourcesGrid(data);
                //     } catch (error) {
                //         console.error('Error fetching resources:', error);
                //     }
                // }
                
                // TODO: Functie voor filtering/search (wanneer backend klaar is)
                // function filterResources(category, searchTerm) {
                //     // API call met filters
                //     fetch(`/api/resources?category=${category}&search=${searchTerm}`)
                //         .then(response => response.json())
                //         .then(data => updateResourcesGrid(data));
                // }
            </script>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-sm font-medium text-voodoo/70 uppercase tracking-wide mb-3">Features</h2>
                <h3 class="font-heading text-4xl md:text-5xl font-bold text-voodoo">Everything you need to book</h3>
                <p class="text-base text-rum mt-4">Browse and reserve equipment with just a few clicks</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mt-16">
                <!-- Feature 1 -->
                <div class="bg-neutral-100 rounded-2xl p-8 hover:shadow-lg transition-shadow">
                    <div class="text-xs font-medium text-voodoo/70 uppercase tracking-wide mb-3">Filter</div>
                    <h4 class="font-heading text-2xl font-bold text-voodoo mb-3">Sort by category and type</h4>
                    <p class="text-base text-rum leading-relaxed mb-6">Find electronics, fabrication tools or audio-visual gear</p>
                    <a href="#explore" class="inline-flex items-center text-voodoo font-medium transition-all">
                        Explore
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Feature 2 -->
                <div class="bg-neutral-100 rounded-2xl p-8 hover:shadow-lg transition-shadow">
                    <div class="text-xs font-medium text-voodoo/70 uppercase tracking-wide mb-3">Status</div>
                    <h4 class="font-heading text-2xl font-bold text-voodoo mb-3">See what is available</h4>
                    <p class="text-base text-rum leading-relaxed mb-6">Real-time updates show exactly when items become free</p>
                    <a href="#view" class="inline-flex items-center text-voodoo font-medium transition-all">
                        Check
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Feature 3 -->
                <div class="bg-neutral-100 rounded-2xl p-8 hover:shadow-lg transition-shadow">
                    <div class="text-xs font-medium text-voodoo/70 uppercase tracking-wide mb-3">Booking</div>
                    <h4 class="font-heading text-2xl font-bold text-voodoo mb-3">Reserve your slot in seconds</h4>
                    <p class="text-base text-rum leading-relaxed mb-6">Pick a time and confirm your reservation instantly</p>
                    <a href="#access" class="inline-flex items-center text-voodoo font-medium transition-all">
                        Reserve
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
