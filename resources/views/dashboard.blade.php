@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-neutral-100">
    <!-- Hero Section -->
    <section class="bg-voodoo py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-2">
                        Bookings Dashboard
                    </h1>
                    <p class="text-lg text-white/90">
                        Manage all bookings and reservations
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Content -->
    <section class="py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Table Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-neutral-100">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-voodoo uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-voodoo uppercase tracking-wider">
                                    Item
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-voodoo uppercase tracking-wider">
                                    Time Period
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-voodoo uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-voodoo uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-neutral-200" id="bookings-table-body">
                            <!-- Sample data rows - will be replaced by API data -->
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    John Doe
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    3D Printer
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    1-1 tot 8-1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex items-center gap-2">
                                        <button class="bg-voodoo text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-rum transition-colors">
                                            Edit
                                        </button>
                                        <button class="bg-rum text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-rum/80 transition-colors">
                                            Show
                                        </button>
                                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-red-700 transition-colors">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    Jane Smith
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    Laptop
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    15-1 tot 22-1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex items-center gap-2">
                                        <button class="bg-voodoo text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-rum transition-colors">
                                            Edit
                                        </button>
                                        <button class="bg-rum text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-rum/80 transition-colors">
                                            Show
                                        </button>
                                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-red-700 transition-colors">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    Bob Johnson
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    Soldering Station
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    10-2 tot 17-2
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex items-center gap-2">
                                        <button class="bg-voodoo text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-rum transition-colors">
                                            Edit
                                        </button>
                                        <button class="bg-rum text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-rum/80 transition-colors">
                                            Show
                                        </button>
                                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-red-700 transition-colors">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="bg-neutral-50 px-6 py-4 border-t border-neutral-200 flex items-center justify-between">
                    <div class="text-sm text-neutral-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">3</span> results
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="px-3 py-2 text-sm font-medium text-neutral-700 bg-white border border-neutral-300 rounded-lg hover:bg-neutral-50 transition-colors disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button class="px-4 py-2 text-sm font-medium text-white bg-voodoo rounded-lg hover:bg-rum transition-colors">
                            1
                        </button>
                        <button class="px-4 py-2 text-sm font-medium text-neutral-700 bg-white border border-neutral-300 rounded-lg hover:bg-neutral-50 transition-colors">
                            2
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-neutral-700 bg-white border border-neutral-300 rounded-lg hover:bg-neutral-50 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
// Placeholder for API integration
// This will be replaced when connecting to the actual API
document.addEventListener('DOMContentLoaded', function() {
    // Example: Fetch bookings from API
    // fetch('/api/bookings')
    //     .then(response => response.json())
    //     .then(data => {
    //         const tbody = document.getElementById('bookings-table-body');
    //         tbody.innerHTML = '';
    //         data.forEach(booking => {
    //             const row = createBookingRow(booking);
    //             tbody.appendChild(row);
    //         });
    //     });
});

function createBookingRow(booking) {
    const tr = document.createElement('tr');
    tr.className = 'hover:bg-neutral-50 transition-colors';
    
    const statusColors = {
        'active': 'bg-green-100 text-green-800',
        'pending': 'bg-yellow-100 text-yellow-800',
        'cancelled': 'bg-red-100 text-red-800',
        'completed': 'bg-neutral-100 text-neutral-800'
    };
    
    const statusClass = statusColors[booking.status.toLowerCase()] || statusColors.pending;
    
    tr.innerHTML = `
        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">${booking.name}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">${booking.item}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">${booking.start_date} tot ${booking.end_date}</td>
        <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full ${statusClass}">
                ${booking.status}
            </span>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
            <div class="flex items-center gap-2">
                <button onclick="editBooking(${booking.id})" class="bg-voodoo text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-rum transition-colors">
                    Edit
                </button>
                <button onclick="showBooking(${booking.id})" class="bg-rum text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-rum/80 transition-colors">
                    Show
                </button>
                <button onclick="deleteBooking(${booking.id})" class="bg-red-600 text-white px-4 py-2 rounded-lg text-xs font-medium hover:bg-red-700 transition-colors">
                    Delete
                </button>
            </div>
        </td>
    `;
    
    return tr;
}

// Placeholder functions for CRUD operations
function editBooking(id) {
    console.log('Edit booking:', id);
    // Implement edit functionality
}

function showBooking(id) {
    console.log('Show booking:', id);
    // Implement show functionality
}

function deleteBooking(id) {
    if (confirm('Are you sure you want to delete this booking?')) {
        console.log('Delete booking:', id);
        // Implement delete functionality
    }
}
</script>
@endsection

