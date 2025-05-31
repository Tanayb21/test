@extends('layouts.app')

@section('content')
<div class="content">
    <section class="min-h-screen pt-32">
        <div class="container mx-auto px-6">
            <!-- Hero Section -->
            <div class="text-center mb-12">
                <h1 class="text-5xl font-bold text-white mb-6">Get in Touch</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <!-- Form Card -->
                <div class="stats-card p-8">
                    @if(session('success'))
                        <div class="bg-green-500/20 border border-green-500 text-green-400 px-4 py-3 rounded-lg mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="bg-red-500/20 border border-red-500 text-red-400 px-4 py-3 rounded-lg mb-6">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('submit.form') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- Name Field -->
                        <div>
                            <label class="block text-gray-300 mb-2" for="name">Full Name <span class="text-blue-400">*</span></label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="{{ old('name') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:border-blue-400 transition-colors" 
                                required
                            >
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label class="block text-gray-300 mb-2" for="email">Email Address <span class="text-blue-400">*</span></label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:border-blue-400 transition-colors" 
                                required
                            >
                        </div>

                        <!-- Company Field -->
                        <div>
                            <label class="block text-gray-300 mb-2" for="company">Company Name <span class="text-blue-400">*</span></label>
                            <input 
                                type="text" 
                                id="company" 
                                name="company" 
                                value="{{ old('company') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:border-blue-400 transition-colors" 
                                required
                            >
                        </div>

                        <!-- Location Field -->
                        <div>
                            <label class="block text-gray-300 mb-2" for="location">Company Location <span class="text-blue-400">*</span></label>
                            <input 
                                type="text" 
                                id="location" 
                                name="location" 
                                value="{{ old('location') }}"
                                class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:border-blue-400 transition-colors" 
                                required
                            >
                        </div>

                        <!-- Purpose Field -->
                        <div>
                            <label class="block text-gray-300 mb-2" for="purpose">Purpose of Contact <span class="text-blue-400">*</span></label>
                            <select 
                                id="purpose" 
                                name="purpose" 
                                class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:border-blue-400 transition-colors"
                                required
                            >
                                <option value="">Select a purpose</option>
                                <option value="recruitment" {{ old('purpose') == 'recruitment' ? 'selected' : '' }}>Recruitment Services</option>
                                <option value="consultation" {{ old('purpose') == 'consultation' ? 'selected' : '' }}>AI Consultation</option>
                                <option value="partnership" {{ old('purpose') == 'partnership' ? 'selected' : '' }}>Partnership Opportunities</option>
                                <option value="demo" {{ old('purpose') == 'demo' ? 'selected' : '' }}>Request Demo</option>
                                <option value="other" {{ old('purpose') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <!-- Additional Details Field -->
                        <div>
                            <label class="block text-gray-300 mb-2" for="details">Additional Details</label>
                            <textarea 
                                id="details" 
                                name="details" 
                                rows="4" 
                                class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:border-blue-400 transition-colors"
                            >{{ old('details') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-between pt-4">
                            <p class="text-sm text-gray-400">
                                <span class="text-blue-400">*</span> Required fields
                            </p>
                            <button type="submit" class="primary-button">
                                Submit Form
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="mt-12 text-center">
                    <p class="text-gray-300">
                        Need immediate assistance? Contact us directly:
                    </p>
                    <div class="flex items-center justify-center space-x-6 mt-4">
                        <a href="tel:+1555-123-4567" class="flex items-center text-gray-300 hover:text-blue-400 transition-colors">
                            <i class="fas fa-phone mr-2"></i>
                            +1 (555) 123-4567
                        </a>
                        <a href="mailto:contact@nitaisolutions.com" class="flex items-center text-gray-300 hover:text-blue-400 transition-colors">
                            <i class="fas fa-envelope mr-2"></i>
                            contact@nitaisolutions.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection 