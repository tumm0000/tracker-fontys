{{-- 
    Resource Card Component
    Gebruik: @include('components.resource-card', ['resource' => $resource, 'index' => $index])
    
    Verwachte resource properties:
    - id: resource ID voor link naar detail pagina
    - name: naam van de resource
    - status: 'available', 'unavailable', 'pending', etc.
    - icon_type: type icon (optioneel, fallback naar default)
    - category: categorie van resource (optioneel)
    - description: korte beschrijving (optioneel)
--}}

@php
    // Helper functie om icon SVG te renderen op basis van icon_type
    // TODO: Vervang dit met icon data uit API (resource->icon of resource->icon_type)
    $iconType = $resource['icon_type'] ?? 'default';
    
    // Bepaal of deze resource verborgen moet zijn (voor "View All" functionaliteit)
    // TODO: Logica kan aangepast worden op basis van API data (bijv. featured resources)
    $isHidden = isset($index) && $index >= 6 ? 'hidden additional-resource' : '';
@endphp

<div class="bg-neutral-200 rounded-2xl overflow-hidden {{ $isHidden }}">
    {{-- TODO: Link naar detail pagina - pas aan wanneer route definitief is --}}
    <a href="{{ route('resource.show', ['id' => $resource['id'] ?? 1]) }}" class="block hover:opacity-90 transition-opacity">
        {{-- Image/Icon Section --}}
        <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
            {{-- TODO: Vervang met echte image URL uit API: $resource['image_url'] --}}
            @if(isset($resource['image_url']) && $resource['image_url'])
                <img src="{{ $resource['image_url'] }}" alt="{{ $resource['name'] }}" class="w-full h-full object-cover">
            @else
                {{-- Fallback: SVG Icon --}}
                {{-- TODO: Icon type kan uit API komen: $resource['icon_type'] --}}
                @include('components.resource-icon', ['iconType' => $iconType])
            @endif
        </div>
        
        {{-- Content Section --}}
        <div class="p-6 text-center">
            {{-- TODO: Resource naam uit API: $resource['name'] --}}
            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">{{ $resource['name'] ?? 'Resource Name' }}</h4>
            
            {{-- TODO: Status uit API: $resource['status'] --}}
            <p class="text-sm text-neutral-600 mb-2">
                {{-- Status kan zijn: Available, Unavailable, Pending, etc. --}}
                {{ ucfirst($resource['status'] ?? 'Available') }}
            </p>
            
            {{-- TODO: Beschikbaarheid info uit API: $resource['available_count'], $resource['total_count'] --}}
            <p class="text-lg font-bold text-neutral-900">
                @if(isset($resource['available_count']) && isset($resource['total_count']))
                    {{ $resource['available_count'] }} / {{ $resource['total_count'] }} Available
                @else
                    {{-- Fallback tekst --}}
                    Free
                @endif
            </p>
            
            {{-- TODO: Optionele extra info uit API --}}
            @if(isset($resource['category']))
                <p class="text-xs text-neutral-500 mt-2">{{ $resource['category'] }}</p>
            @endif
        </div>
    </a>
</div>

