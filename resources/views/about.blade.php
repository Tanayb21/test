@extends('layouts.app')

@section('content')
<div class="content">
    <section class="min-h-screen pt-32">
        <div class="container mx-auto px-6">
            <!-- Hero Section -->
            <div class="text-center mb-20">
                <h1 class="text-5xl font-bold text-white mb-6">About Nitai Solutions</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Transforming the future of recruitment through innovation, technology, and human-centric approaches.</p>
            </div>

            <!-- Mission & Vision -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
                <div class="stats-card p-8">
                    <h2 class="text-3xl font-bold text-white mb-6">Our Mission</h2>
                    <p class="text-gray-300 text-lg leading-relaxed">To revolutionize the recruitment industry by combining cutting-edge AI technology with human expertise, creating perfect matches between organizations and talent.</p>
                </div>
                <div class="stats-card p-8">
                    <h2 class="text-3xl font-bold text-white mb-6">Our Vision</h2>
                    <p class="text-gray-300 text-lg leading-relaxed">To become the global leader in AI-powered recruitment solutions, setting new standards for efficiency, accuracy, and candidate experience in talent acquisition.</p>
                </div>
            </div>

            <!-- Values Section -->
            <div class="mb-20">
                <h2 class="text-3xl font-bold text-white mb-12 text-center">Our Core Values</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="bg-gray-800/50 p-8 rounded-xl text-center">
                        <i class="fas fa-lightbulb text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-4">Innovation</h3>
                        <p class="text-gray-400">Constantly pushing boundaries in recruitment technology</p>
                    </div>
                    <div class="bg-gray-800/50 p-8 rounded-xl text-center">
                        <i class="fas fa-handshake text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-4">Integrity</h3>
                        <p class="text-gray-400">Building trust through transparent practices</p>
                    </div>
                    <div class="bg-gray-800/50 p-8 rounded-xl text-center">
                        <i class="fas fa-users text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-4">Collaboration</h3>
                        <p class="text-gray-400">Working together to achieve excellence</p>
                    </div>
                    <div class="bg-gray-800/50 p-8 rounded-xl text-center">
                        <i class="fas fa-chart-line text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-4">Impact</h3>
                        <p class="text-gray-400">Creating meaningful change in recruitment</p>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="mb-20">
                <h2 class="text-3xl font-bold text-white mb-12 text-center">Leadership Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="stats-card p-8 text-center">
                        <div class="w-24 h-24 bg-blue-400/20 rounded-full mx-auto mb-6"></div>
                        <h3 class="text-xl font-bold text-white mb-2">Alex Thompson</h3>
                        <p class="text-blue-400 mb-4">Chief Executive Officer</p>
                        <p class="text-gray-400">15+ years of experience in HR technology and recruitment innovation.</p>
                    </div>
                    <div class="stats-card p-8 text-center">
                        <div class="w-24 h-24 bg-blue-400/20 rounded-full mx-auto mb-6"></div>
                        <h3 class="text-xl font-bold text-white mb-2">Dr. Emily Chen</h3>
                        <p class="text-blue-400 mb-4">Chief Technology Officer</p>
                        <p class="text-gray-400">AI expert with a Ph.D. in Machine Learning from MIT.</p>
                    </div>
                    <div class="stats-card p-8 text-center">
                        <div class="w-24 h-24 bg-blue-400/20 rounded-full mx-auto mb-6"></div>
                        <h3 class="text-xl font-bold text-white mb-2">Marcus Rodriguez</h3>
                        <p class="text-blue-400 mb-4">Head of Operations</p>
                        <p class="text-gray-400">Specialized in scaling recruitment operations globally.</p>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="mb-20">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <h3 class="text-4xl font-bold text-blue-400 mb-2">500+</h3>
                        <p class="text-gray-300">Clients Worldwide</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-4xl font-bold text-blue-400 mb-2">50,000+</h3>
                        <p class="text-gray-300">Successful Placements</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-4xl font-bold text-blue-400 mb-2">98%</h3>
                        <p class="text-gray-300">Client Satisfaction</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-4xl font-bold text-blue-400 mb-2">25+</h3>
                        <p class="text-gray-300">Countries Served</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold text-white mb-6">Join Our Journey</h2>
                <p class="text-gray-300 mb-8 max-w-2xl mx-auto">Be part of the revolution in recruitment technology.</p>
                <button class="primary-button mr-4" onclick="window.location.href='/form'">Get Started</button>
            </div>
        </div>
    </section>
</div>
@endsection 