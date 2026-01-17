@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-neutral-100">
    <!-- Hero Section -->
    <section class="bg-voodoo py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-bold text-white tracking-wide mb-3">Help Center</h2>
                <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl text-white mb-6 text-balance">
                    Frequently Asked Questions
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Find quick answers to common questions about booking resources, managing reservations, and using our platform.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 lg:py-32">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-2xl p-6 lg:p-8 border border-neutral-200 shadow-md hover:shadow-lg transition-shadow">
                    <h4 class="font-heading text-xl font-bold text-voodoo mb-3">How do I book a resource?</h4>
                    <p class="text-base text-rum leading-relaxed">Browse available resources, select your desired time slot, and confirm your booking. You'll receive a confirmation email with all the details.</p>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-2xl p-6 lg:p-8 border border-neutral-200 shadow-md hover:shadow-lg transition-shadow">
                    <h4 class="font-heading text-xl font-bold text-voodoo mb-3">Can I cancel my booking?</h4>
                    <p class="text-base text-rum leading-relaxed">Yes, you can cancel your booking at any time through the bookings page. Make sure to cancel at least 24 hours in advance to avoid any issues.</p>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-2xl p-6 lg:p-8 border border-neutral-200 shadow-md hover:shadow-lg transition-shadow">
                    <h4 class="font-heading text-xl font-bold text-voodoo mb-3">What if a resource is unavailable?</h4>
                    <p class="text-base text-rum leading-relaxed">If a resource is currently unavailable, you can check the calendar to see when it becomes available again, or contact us for alternative options.</p>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-2xl p-6 lg:p-8 border border-neutral-200 shadow-md hover:shadow-lg transition-shadow">
                    <h4 class="font-heading text-xl font-bold text-voodoo mb-3">Do I need to be a Fontys student?</h4>
                    <p class="text-base text-rum leading-relaxed">Yes, this platform is exclusively for Fontys students and staff. You'll need to log in with your Fontys credentials to access resources.</p>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-2xl p-6 lg:p-8 border border-neutral-200 shadow-md hover:shadow-lg transition-shadow">
                    <h4 class="font-heading text-xl font-bold text-voodoo mb-3">How long can I book a resource for?</h4>
                    <p class="text-base text-rum leading-relaxed">The maximum booking duration depends on the resource type. Most resources can be booked for up to 7 days. Check the resource details page for specific limits.</p>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="bg-white rounded-2xl p-6 lg:p-8 border border-neutral-200 shadow-md hover:shadow-lg transition-shadow">
                    <h4 class="font-heading text-xl font-bold text-voodoo mb-3">What happens if I'm late to pick up my resource?</h4>
                    <p class="text-base text-rum leading-relaxed">If you're more than 30 minutes late without notification, your booking may be cancelled and the resource will become available to others. Please contact us if you expect to be late.</p>
                </div>
                
                <!-- FAQ Item 7 -->
                <div class="bg-white rounded-2xl p-6 lg:p-8 border border-neutral-200 shadow-md hover:shadow-lg transition-shadow">
                    <h4 class="font-heading text-xl font-bold text-voodoo mb-3">Can I extend my booking?</h4>
                    <p class="text-base text-rum leading-relaxed">You can request to extend your booking if the resource is available. Go to your bookings page and click "Modify" to see extension options.</p>
                </div>
                
                <!-- FAQ Item 8 -->
                <div class="bg-white rounded-2xl p-6 lg:p-8 border border-neutral-200 shadow-md hover:shadow-lg transition-shadow">
                    <h4 class="font-heading text-xl font-bold text-voodoo mb-3">How do I report a problem with a resource?</h4>
                    <p class="text-base text-rum leading-relaxed">If you encounter any issues with a resource, please contact us immediately through the contact page or email support@fontys.nl. We'll help resolve the issue as quickly as possible.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="bg-white py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-voodoo rounded-3xl p-12 lg:p-16 text-center">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-white mb-4">Still have questions?</h2>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    Can't find what you're looking for? Our support team is here to help you.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="bg-white text-voodoo px-8 py-3 rounded-lg font-medium hover:bg-lavender-gray transition-colors">
                        Contact Us
                    </a>
                    <a href="/resources" class="bg-rum text-white px-8 py-3 rounded-lg font-medium hover:bg-rum/80 transition-colors">
                        Browse Resources
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

