@extends('layouts.app')

@section('content')
<div class="content">
    <section class="min-h-screen pt-32">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-bold text-white mb-12">Our Solutions</h1>
            
            <!-- Main Solutions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
                <div class="stats-card p-8">
                    <h3 class="text-2xl font-bold text-white mb-4">AI-Powered Recruitment</h3>
                    <p class="text-gray-300 mb-6">Leverage advanced machine learning algorithms to match the perfect candidates with your job openings.</p>
                    <ul class="space-y-4 text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-blue-400 mr-3"></i>
                            Resume parsing and analysis
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-blue-400 mr-3"></i>
                            Skill matching algorithms
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-blue-400 mr-3"></i>
                            Predictive performance analytics
                        </li>
                    </ul>
                </div>

                <div class="stats-card p-8">
                    <h3 class="text-2xl font-bold text-white mb-4">Automated Screening</h3>
                    <p class="text-gray-300 mb-6">Streamline your hiring process with intelligent screening tools.</p>
                    <ul class="space-y-4 text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-blue-400 mr-3"></i>
                            Automated background checks
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-blue-400 mr-3"></i>
                            Skills assessment platform
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-blue-400 mr-3"></i>
                            Video interview analysis
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Features Section -->
            <div class="mb-20">
                <h2 class="text-3xl font-bold text-white mb-8">Key Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-800/50 p-6 rounded-xl hover:transform hover:scale-105 transition-all">
                        <i class="fas fa-rocket text-3xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-2">Quick Implementation</h3>
                        <p class="text-gray-400">Get started within days, not months</p>
                    </div>
                    <div class="bg-gray-800/50 p-6 rounded-xl hover:transform hover:scale-105 transition-all">
                        <i class="fas fa-shield-alt text-3xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-2">Data Security</h3>
                        <p class="text-gray-400">Enterprise-grade security protocols</p>
                    </div>
                    <div class="bg-gray-800/50 p-6 rounded-xl hover:transform hover:scale-105 transition-all">
                        <i class="fas fa-chart-bar text-3xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-2">Analytics Dashboard</h3>
                        <p class="text-gray-400">Real-time recruitment metrics</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold text-white mb-6">Ready to Transform Your Recruitment?</h2>
                <p class="text-gray-300 mb-8 max-w-2xl mx-auto">Join hundreds of companies that have revolutionized their hiring process with our solutions.</p>
                <button class="primary-button mr-4" onclick="window.location.href='/form'">Get Started</button>
                <button class="secondary-button" onclick="window.location.href='/contact'">Contact Sales</button>
            </div>
        </div>
    </section>
</div>
@endsection 