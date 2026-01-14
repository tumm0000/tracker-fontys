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

            <div class="grid md:grid-cols-3 gap-8 mt-16" id="resources-grid">
                <!-- First 6 Resources (Always Visible) -->
                <!-- Resource Card 1: Laptops -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden">
                    <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                        </svg>
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Laptops</h4>
                        <p class="text-sm text-neutral-600 mb-2">Available</p>
                        <p class="text-lg font-bold text-neutral-900">Free</p>
                    </div>
                </div>

                <!-- Resource Card 2: Study Rooms -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden">
                    <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                        </svg>
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Study Rooms</h4>
                        <p class="text-sm text-neutral-600 mb-2">Available</p>
                        <p class="text-lg font-bold text-neutral-900">Free</p>
                    </div>
                </div>

                <!-- Resource Card 3: Arduino -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden">
                    <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-16.5 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Arduino</h4>
                        <p class="text-sm text-neutral-600 mb-2">Available</p>
                        <p class="text-lg font-bold text-neutral-900">Free</p>
                    </div>
                </div>

                <!-- Resource Card 4: Raspberry Pi -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden">
                    <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                        </svg>
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Raspberry Pi</h4>
                        <p class="text-sm text-neutral-600 mb-2">Available</p>
                        <p class="text-lg font-bold text-neutral-900">Free</p>
                    </div>
                </div>

                <!-- Resource Card 5: 3D-printer -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden">
                    <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>
                        </svg>
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">3D-printer</h4>
                        <p class="text-sm text-neutral-600 mb-2">Available</p>
                        <p class="text-lg font-bold text-neutral-900">Free</p>
                    </div>
                </div>

                <!-- Resource Card 6: Camera's, audio- and video equipment -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden">
                    <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0v3.75m0-3.75h3.75m-3.75 0h-3.75"/>
                        </svg>
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Camera's, audio- and video equipment</h4>
                        <p class="text-sm text-neutral-600 mb-2">Available</p>
                        <p class="text-lg font-bold text-neutral-900">Free</p>
                    </div>
                </div>

                <!-- Remaining 9 Resources (Hidden by default) -->
                <!-- Resource Card 7: Keyboard & Mouse -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden hidden additional-resource">
                        <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                            <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                            </svg>
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Keyboard & Mouse</h4>
                            <p class="text-sm text-neutral-600 mb-2">Available</p>
                            <p class="text-lg font-bold text-neutral-900">Free</p>
                        </div>
                    </div>

                <!-- Resource Card 8: Soldering Station -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden hidden additional-resource">
                        <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                            <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655-5.653a1.5 1.5 0 00-2.103-.18L3 12.75M3 12.75l-.75.75"/>
                            </svg>
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Soldering Station</h4>
                            <p class="text-sm text-neutral-600 mb-2">Available</p>
                            <p class="text-lg font-bold text-neutral-900">Free</p>
                        </div>
                    </div>

                <!-- Resource Card 9: (Any) Cable -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden hidden additional-resource">
                        <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                            <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                            </svg>
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">(Any) Cable</h4>
                            <p class="text-sm text-neutral-600 mb-2">Available</p>
                            <p class="text-lg font-bold text-neutral-900">Free</p>
                        </div>
                    </div>

                <!-- Resource Card 10: Router -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden hidden additional-resource">
                        <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                            <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                            </svg>
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Router</h4>
                            <p class="text-sm text-neutral-600 mb-2">Available</p>
                            <p class="text-lg font-bold text-neutral-900">Free</p>
                        </div>
                    </div>

                <!-- Resource Card 11: Flipper (Zero) -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden hidden additional-resource">
                        <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                            <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                            </svg>
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Flipper (Zero)</h4>
                            <p class="text-sm text-neutral-600 mb-2">Available</p>
                            <p class="text-lg font-bold text-neutral-900">Free</p>
                        </div>
                    </div>

                <!-- Resource Card 12: Monitors / Smartboards -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden hidden additional-resource">
                        <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                            <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                            </svg>
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Monitors / Smartboards</h4>
                            <p class="text-sm text-neutral-600 mb-2">Available</p>
                            <p class="text-lg font-bold text-neutral-900">Free</p>
                        </div>
                    </div>

                <!-- Resource Card 13: Server -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden hidden additional-resource">
                        <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                            <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
                            </svg>
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Server</h4>
                            <p class="text-sm text-neutral-600 mb-2">Available</p>
                            <p class="text-lg font-bold text-neutral-900">Free</p>
                        </div>
                    </div>

                <!-- Resource Card 14: Switches (layer 2 & layer 3) -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden hidden additional-resource">
                        <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                            <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3V6a3 3 0 013-3h13.5a3 3 0 013 3v5.25a3 3 0 01-3 3m-16.5 0a3 3 0 003 3h13.5a3 3 0 003-3m-16.5 0v-1.5A2.25 2.25 0 015.25 9h13.5a2.25 2.25 0 012.25 2.25v1.5"/>
                            </svg>
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Switches (L2 & L3)</h4>
                            <p class="text-sm text-neutral-600 mb-2">Available</p>
                            <p class="text-lg font-bold text-neutral-900">Free</p>
                        </div>
                    </div>

                <!-- Resource Card 15: Suggestion -->
                <div class="bg-neutral-200 rounded-2xl overflow-hidden hidden additional-resource">
                    <div class="bg-neutral-300 rounded-t-2xl h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m4.5 0a12.05 12.05 0 003-4.5m-3-4.5a12.05 12.05 0 00-3 4.5m3-4.5v5.25"/>
                        </svg>
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="font-heading text-xl font-bold text-neutral-900 mb-2">Suggestion</h4>
                        <p class="text-sm text-neutral-600 mb-2">Own input</p>
                        <p class="text-lg font-bold text-neutral-900">Free</p>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-12">
                <button id="view-all-btn" onclick="toggleResources()" class="bg-voodoo text-white px-8 py-3 rounded-lg font-medium hover:bg-rum transition-colors">
                    View All
                </button>
            </div>

            <script>
                function toggleResources() {
                    const additionalResources = document.querySelectorAll('.additional-resource');
                    const viewAllBtn = document.getElementById('view-all-btn');
                    
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
