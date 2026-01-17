@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-neutral-100">
    <!-- Hero Section -->
    <section class="bg-voodoo py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-bold text-white tracking-wide mb-3">Get in Touch</h2>
                <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl text-white mb-6 text-balance">
                    Contact Us
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Have a question or need help? We're here to assist you with any inquiries about resources, bookings, or technical support.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
                <!-- Left Column: Contact Form -->
                <div>
                    <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-10">
                        <h2 class="font-heading text-3xl font-bold text-voodoo mb-6">Send us a message</h2>
                        <p class="text-base text-rum mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>
                        
                        <form action="#" method="POST" class="space-y-6">
                            @csrf
                            
                            <!-- Name Field -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-voodoo mb-2">Name</label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required
                                       class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-voodoo focus:border-voodoo transition-colors text-neutral-900"
                                       placeholder="Your full name">
                            </div>
                            
                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-voodoo mb-2">Email</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required
                                       class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-voodoo focus:border-voodoo transition-colors text-neutral-900"
                                       placeholder="your.email@fontys.nl">
                            </div>
                            
                            <!-- Subject Field -->
                            <div>
                                <label for="subject" class="block text-sm font-medium text-voodoo mb-2">Subject</label>
                                <select id="subject" 
                                        name="subject" 
                                        required
                                        class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-voodoo focus:border-voodoo transition-colors text-neutral-900">
                                    <option value="">Select a subject</option>
                                    <option value="booking">Booking Question</option>
                                    <option value="resource">Resource Inquiry</option>
                                    <option value="technical">Technical Support</option>
                                    <option value="general">General Question</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <!-- Message Field -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-voodoo mb-2">Message</label>
                                <textarea id="message" 
                                          name="message" 
                                          rows="6" 
                                          required
                                          class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-voodoo focus:border-voodoo transition-colors text-neutral-900 resize-none"
                                          placeholder="Tell us how we can help you..."></textarea>
                            </div>
                            
                            <!-- Submit Button -->
                            <div>
                                <button type="submit" 
                                        class="w-full bg-voodoo text-white px-8 py-3 rounded-lg font-medium hover:bg-rum transition-colors">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Right Column: Contact Information -->
                <div>
                    <h2 class="font-heading text-3xl font-bold text-voodoo mb-6">Contact Information</h2>
                    <p class="text-base text-rum mb-8">You can also reach us through these channels.</p>
                    
                    <div class="space-y-6">
                        <!-- Email Card -->
                        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-neutral-200">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-voodoo/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-voodoo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-heading text-lg font-bold text-voodoo mb-1">Email</h3>
                                    <a href="mailto:support@fontys.nl" class="text-rum hover:text-voodoo transition-colors">
                                        support@fontys.nl
                                    </a>
                                    <p class="text-sm text-neutral-600 mt-1">We typically respond within 24 hours</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Phone Card -->
                        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-neutral-200">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-voodoo/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-voodoo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-heading text-lg font-bold text-voodoo mb-1">Phone</h3>
                                    <a href="tel:+31402720000" class="text-rum hover:text-voodoo transition-colors">
                                        +31 (0)40 272 0000
                                    </a>
                                    <p class="text-sm text-neutral-600 mt-1">Monday - Friday, 9:00 - 17:00</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Location Card -->
                        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-neutral-200">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-voodoo/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-voodoo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-heading text-lg font-bold text-voodoo mb-1">Location</h3>
                                    <p class="text-rum">
                                        Fontys Hogeschool ICT<br>
                                        Rachelsmolen 1<br>
                                        5612 MA Eindhoven
                                    </p>
                                    <p class="text-sm text-neutral-600 mt-1">Building R1, Room 1.01</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Office Hours Card -->
                        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-neutral-200">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-voodoo/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-voodoo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-heading text-lg font-bold text-voodoo mb-1">Office Hours</h3>
                                    <p class="text-rum">
                                        Monday - Friday: 9:00 - 17:00<br>
                                        Saturday - Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

