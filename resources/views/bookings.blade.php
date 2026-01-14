@extends('layouts.app')

@section('content')
<div class="min-h-screen">

    <!-- Hero Section -->
    <section class="bg-voodoo py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-bold text-white tracking-wide mb-3">Manage</h2>
                <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl text-white mb-6 text-balance">
                    Your booked resources
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                    View all your reservations and manage upcoming bookings in one place
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="#" class="bg-white text-voodoo px-8 py-3 rounded-lg font-medium hover:bg-lavender-gray transition-colors">
                        Home
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Manage Section -->
    <section class="bg-neutral-100 py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-start">
                <!-- Left Side: Navigation -->
                <div>
                    <h2 class="text-sm font-medium text-voodoo/70 uppercase tracking-wide mb-3">Manage</h2>
                    <h3 class="font-heading text-4xl md:text-5xl font-bold text-voodoo mb-8">What you can do here</h3>
                    <div class="flex gap-3">
                        <button class="bg-neutral-300 text-neutral-900 px-6 py-2.5 rounded-full font-medium hover:bg-neutral-400 transition-colors">View</button>
                        <button class="text-neutral-700 px-6 py-2.5 rounded-full font-medium flex items-center gap-2 hover:bg-neutral-200 transition-colors">
                            History
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Right Side: Functionalities List -->
                <div class="relative">
                    <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-neutral-300"></div>
                    <div class="space-y-8 pl-12">
                        <!-- Functionality 1: View upcoming bookings -->
                        <div class="relative">
                            <div class="absolute -left-12 top-2 w-12 h-12 rounded-full bg-neutral-200 border-4 border-neutral-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-neutral-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </div>
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">View your upcoming bookings</h4>
                            <p class="text-base text-neutral-600">See all active reservations with dates and times</p>
                        </div>

                        <!-- Functionality 2: Check booking history -->
                        <div class="relative">
                            <div class="absolute -left-12 top-2 w-12 h-12 rounded-full bg-neutral-200 border-4 border-neutral-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-neutral-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Check your booking history</h4>
                            <p class="text-base text-neutral-600">Review past reservations and completed bookings</p>
                        </div>

                        <!-- Functionality 3: Cancel reservation -->
                        <div class="relative">
                            <div class="absolute -left-12 top-2 w-12 h-12 rounded-full bg-neutral-200 border-4 border-neutral-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-neutral-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Cancel a reservation anytime</h4>
                            <p class="text-base text-neutral-600">Remove bookings you no longer need</p>
                        </div>

                        <!-- Functionality 4: Monitor reservations -->
                        <div class="relative">
                            <div class="absolute -left-12 top-2 w-12 h-12 rounded-full bg-neutral-200 border-4 border-neutral-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-neutral-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Monitor your reservations</h4>
                            <p class="text-base text-neutral-600">Keep track of all your active reservations with real-time updates and status information</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="bg-white py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-sm font-medium text-voodoo/70 uppercase tracking-wide mb-3">Schedule</h2>
                <h3 class="font-heading text-4xl md:text-5xl font-bold text-neutral-900 mb-4">Your upcoming resource reservations</h3>
                <p class="text-base text-neutral-600 max-w-2xl mx-auto mb-6">
                    See what you have booked and when. Each reservation shows the resource, date, and time slot you selected.
                </p>
                <div class="flex items-center justify-center gap-6">
                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors">Edit</a>
                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors flex items-center gap-1">
                        View
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Timeline -->
            <div class="relative max-w-5xl mx-auto">
                <!-- Vertical Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-neutral-600"></div>

                <!-- Timeline Items -->
                <div class="space-y-16">
                    <!-- Card 1: Monday - 3D printer (Right side) -->
                    <div class="relative flex items-center">
                        <div class="w-1/2 pr-8 flex justify-end">
                            <div class="bg-neutral-200 rounded-xl p-6 max-w-md">
                                <div class="font-heading text-2xl font-bold text-neutral-900 mb-2">Monday</div>
                                <div class="font-heading text-lg font-semibold text-neutral-900 mb-3">3D printer reserved</div>
                                <p class="text-base text-neutral-600 mb-4 leading-relaxed">
                                    Your booking for the 3D printer runs from 2 PM to 4 PM. The device is ready for your project work.
                                </p>
                                <div class="flex gap-4">
                                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors">Modify</a>
                                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors flex items-center gap-1">
                                        Details
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-neutral-600 border-4 border-lavender-gray"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>

                    <!-- Card 2: Wednesday - Soldering station (Left side) -->
                    <div class="relative flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-neutral-600 border-4 border-lavender-gray"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-neutral-200 rounded-xl p-6 max-w-md">
                                <div class="font-heading text-2xl font-bold text-neutral-900 mb-2">Wednesday</div>
                                <div class="font-heading text-lg font-semibold text-neutral-900 mb-3">Soldering station booked</div>
                                <p class="text-base text-neutral-600 mb-4 leading-relaxed">
                                    Your soldering station reservation is scheduled for 10 AM to 12 PM. Everything is set for your electronics work.
                                </p>
                                <div class="flex gap-4">
                                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors">Modify</a>
                                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors flex items-center gap-1">
                                        Details
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Friday - Laptop (Right side) -->
                    <div class="relative flex items-center">
                        <div class="w-1/2 pr-8 flex justify-end">
                            <div class="bg-neutral-200 rounded-xl p-6 max-w-md">
                                <div class="font-heading text-2xl font-bold text-neutral-900 mb-2">Friday</div>
                                <div class="font-heading text-lg font-semibold text-neutral-900 mb-3">Laptop checkout confirmed</div>
                                <p class="text-base text-neutral-600 mb-4 leading-relaxed">
                                    Your laptop is reserved from 1 PM to 5 PM. You can pick it up at the resource desk when ready.
                                </p>
                                <div class="flex gap-4">
                                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors">Modify</a>
                                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors flex items-center gap-1">
                                        Details
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-neutral-600 border-4 border-lavender-gray"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>

                    <!-- Card 4: Next week - Camera equipment (Left side) -->
                    <div class="relative flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-neutral-600 border-4 border-lavender-gray"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-neutral-200 rounded-xl p-6 max-w-md">
                                <div class="font-heading text-2xl font-bold text-neutral-900 mb-2">Next week</div>
                                <div class="font-heading text-lg font-semibold text-neutral-900 mb-3">Camera equipment reserved</div>
                                <p class="text-base text-neutral-600 mb-4 leading-relaxed">
                                    Your camera booking is locked in for Tuesday at 9 AM to 3 PM. The equipment will be waiting for you.
                                </p>
                                <div class="flex gap-4">
                                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors">Modify</a>
                                    <a href="#" class="text-neutral-900 font-medium hover:text-voodoo transition-colors flex items-center gap-1">
                                        Details
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-rum py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl text-white mb-6 text-balance">
                    Ready to book more?
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                    View all your reservations and manage upcoming bookings in one place
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="/resources" class="bg-voodoo text-white px-8 py-3 rounded-lg font-medium hover:bg-lavender-gray transition-colors">
                        Resources
                    </a>
                    <a href="/" class="bg-white text-voodoo px-8 py-3 rounded-lg font-medium hover:bg-lavender-gray transition-colors">
                        Home
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
