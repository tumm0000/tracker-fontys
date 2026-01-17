@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-voodoo py-8 lg:py-12">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
        <div class="max-w-md mx-auto">
            <!-- Register Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="font-heading text-4xl md:text-5xl font-bold text-voodoo mb-3">
                        Create account
                    </h1>
                    <p class="text-base text-rum">
                        Sign up to start booking resources and equipment
                    </p>
                </div>

                <!-- Register Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-neutral-900 mb-2">
                            Full name
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}" 
                            required 
                            autofocus
                            class="w-full px-4 py-3 rounded-lg border border-neutral-300 bg-neutral-50 text-neutral-900 placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-voodoo focus:border-transparent transition-all"
                            placeholder="John Doe"
                        >
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral-900 mb-2">
                            Email address
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required
                            class="w-full px-4 py-3 rounded-lg border border-neutral-300 bg-neutral-50 text-neutral-900 placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-voodoo focus:border-transparent transition-all"
                            placeholder="you@fontys.nl"
                        >
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-neutral-900 mb-2">
                            Password
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="w-full px-4 py-3 rounded-lg border border-neutral-300 bg-neutral-50 text-neutral-900 placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-voodoo focus:border-transparent transition-all"
                            placeholder="Create a strong password"
                        >
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Confirmation Field -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-neutral-900 mb-2">
                            Confirm password
                        </label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            required
                            class="w-full px-4 py-3 rounded-lg border border-neutral-300 bg-neutral-50 text-neutral-900 placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-voodoo focus:border-transparent transition-all"
                            placeholder="Confirm your password"
                        >
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-start">
                        <input 
                            type="checkbox" 
                            id="terms" 
                            name="terms" 
                            required
                            class="mt-1 w-4 h-4 text-voodoo border-neutral-300 rounded focus:ring-voodoo focus:ring-2"
                        >
                        <label for="terms" class="ml-2 text-sm text-neutral-700">
                            I agree to the 
                            <a href="#" class="text-voodoo hover:text-rum transition-colors">Terms of Service</a> 
                            and 
                            <a href="#" class="text-voodoo hover:text-rum transition-colors">Privacy Policy</a>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full bg-voodoo text-white px-8 py-3 rounded-lg font-medium hover:bg-rum transition-colors focus:outline-none focus:ring-2 focus:ring-voodoo focus:ring-offset-2"
                    >
                        Create account
                    </button>
                </form>

                <!-- Divider -->
                <div class="my-8 flex items-center">
                    <div class="flex-1 border-t border-neutral-300"></div>
                    <span class="px-4 text-sm text-neutral-500">or</span>
                    <div class="flex-1 border-t border-neutral-300"></div>
                </div>  

                <!-- Sign In Link -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-neutral-600">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="text-voodoo font-medium hover:text-rum transition-colors">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>

            <!-- Back to Home Link -->
            <div class="mt-6 text-center">
                <a href="/" class="text-white/90 hover:text-white transition-colors text-sm flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to home
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

