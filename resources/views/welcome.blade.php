@extends('layouts.app')

@section('content')
<div class="min-h-screen">

    <!-- Hero Section -->
    <section class="bg-voodoo py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-rum/30 backdrop-blur-sm rounded-3xl border border-rum/40 px-8 py-16 lg:py-24">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl text-white mb-6 text-balance">
                        Book the tools you need in seconds
                    </h1>
                    <p class="text-lg md:text-xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                        Access laptops, 3D printers, soldering machines, and more. Reserve your equipment for the exact time you need it. Simple, fast, and built for Fontys.
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <a href="/resources" class="bg-white text-voodoo px-8 py-3 rounded-lg font-medium hover:bg-lavender-gray transition-colors">
                            Browse
                        </a>
                        <a href="#learn" class="bg-rum text-white px-8 py-3 rounded-lg font-medium hover:bg-rum/80 transition-colors">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-sm font-medium text-voodoo/70 uppercase tracking-wide mb-3">Features</h2>
                <h3 class="font-heading text-4xl md:text-5xl font-bold text-voodoo">What you can do</h3>
                <p class="text-base text-rum mt-4">See everything available right now</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mt-16">
                <!-- Feature 1 -->
                <div class="bg-white rounded-2xl p-8 hover:shadow-lg transition-shadow">
                    <div class="text-xs font-medium text-voodoo/70 uppercase tracking-wide mb-3">Browse</div>
                    <h4 class="font-heading text-2xl font-bold text-voodoo mb-3">Pick your time and reserve instantly</h4>
                    <p class="text-base text-rum leading-relaxed mb-6">Choose a slot that works for you</p>
                    <a href="#explore" class="inline-flex items-center text-voodoo font-medium transition-all">
                        Explore
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-2xl p-8 hover:shadow-lg transition-shadow">
                    <div class="text-xs font-medium text-voodoo/70 uppercase tracking-wide mb-3">Manage</div>
                    <h4 class="font-heading text-2xl font-bold text-voodoo mb-3">Keep track of all your reservations</h4>
                    <p class="text-base text-rum leading-relaxed mb-6">View and cancel bookings anytime</p>
                    <a href="#view" class="inline-flex items-center text-voodoo font-medium transition-all">
                        View
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-2xl p-8 hover:shadow-lg transition-shadow">
                    <div class="text-xs font-medium text-voodoo/70 uppercase tracking-wide mb-3">Secure</div>
                    <h4 class="font-heading text-2xl font-bold text-voodoo mb-3">Your account stays protected always</h4>
                    <p class="text-base text-rum leading-relaxed mb-6">Login with your Fontys credentials</p>
                    <a href="#access" class="inline-flex items-center text-voodoo font-medium transition-all">
                        Access
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="min-h-screen py-20 lg:py-32 bg-white flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="text-center mb-12">
                <h2 class="text-sm font-medium text-voodoo/70 uppercase tracking-wide mb-3">Process</h2>
                <h3 class="font-heading text-4xl md:text-5xl lg:text-5xl font-bold text-voodoo">Get what you need in three steps</h3>
                <p class="text-base text-rum mt-4 max-w-2xl mx-auto">Finding equipment takes no time at all. Log in, search, and book what matters to you.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-16 mt-20 max-w-7xl mx-auto px-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <h4 class="font-heading text-2xl md:text-3xl font-bold text-voodoo mb-4">View available resources</h4>
                    <p class="text-base text-rum leading-relaxed">Browse all equipment and see what is open now.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <h4 class="font-heading text-2xl md:text-3xl font-bold text-voodoo mb-4">Select your time slot</h4>
                    <p class="text-base text-rum leading-relaxed">Pick the hours that fit your schedule.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <h4 class="font-heading text-2xl md:text-3xl font-bold text-voodoo mb-4">Confirm your booking</h4>
                    <p class="text-base text-rum leading-relaxed">Reserve it and you are done.</p>
                </div>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-4 mt-16">
                <a href="#start" class="bg-voodoo text-white px-8 py-3 rounded-lg font-medium hover:bg-rum transition-colors">
                    Start
                </a>
                <a href="#explore" class="inline-flex items-center text-voodoo font-medium hover:text-rum transition-all">
                    Explore
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
