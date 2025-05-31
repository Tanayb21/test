@extends('layouts.app')

@section('content')
<div class="content">
    <section class="min-h-screen pt-32">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-bold text-white mb-12">Our Services</h1>
            
            <!-- Main Services Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <div class="stats-card p-8">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-users-cog text-4xl text-blue-400 mr-4"></i>
                        <h3 class="text-2xl font-bold text-white">Recruitment Process Outsourcing</h3>
                    </div>
                    <p class="text-gray-300 mb-6">End-to-end recruitment solution tailored to your organization's needs.</p>
                    <ul class="space-y-3 text-gray-300">
                        <li>• Full-cycle recruitment</li>
                        <li>• Candidate sourcing</li>
                        <li>• Interview scheduling</li>
                        <li>• Offer management</li>
                    </ul>
                </div>

                <div class="stats-card p-8">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-brain text-4xl text-blue-400 mr-4"></i>
                        <h3 class="text-2xl font-bold text-white">AI Consultation</h3>
                    </div>
                    <p class="text-gray-300 mb-6">Expert guidance on implementing AI in your recruitment process.</p>
                    <ul class="space-y-3 text-gray-300">
                        <li>• Process automation</li>
                        <li>• AI implementation</li>
                        <li>• Workflow optimization</li>
                        <li>• Performance tracking</li>
                    </ul>
                </div>

                <div class="stats-card p-8">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-chart-network text-4xl text-blue-400 mr-4"></i>
                        <h3 class="text-2xl font-bold text-white">Talent Analytics</h3>
                    </div>
                    <p class="text-gray-300 mb-6">Data-driven insights to optimize your hiring process.</p>
                    <ul class="space-y-3 text-gray-300">
                        <li>• Recruitment metrics</li>
                        <li>• Performance analytics</li>
                        <li>• Market insights</li>
                        <li>• Trend analysis</li>
                    </ul>
                </div>
            </div>

            <!-- Process Section -->
            <div class="mb-20">
                <h2 class="text-3xl font-bold text-white mb-12 text-center">Our Process</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-400/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-blue-400">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Assessment</h3>
                        <p class="text-gray-400">Understanding your needs and challenges</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-400/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-blue-400">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Strategy</h3>
                        <p class="text-gray-400">Developing a customized solution</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-400/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-blue-400">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Implementation</h3>
                        <p class="text-gray-400">Executing the planned strategy</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-400/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-blue-400">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Optimization</h3>
                        <p class="text-gray-400">Continuous improvement and refinement</p>
                    </div>
                </div>
            </div>

            <!-- Testimonials Section -->
            <div class="mb-20">
                <h2 class="text-3xl font-bold text-white mb-12 text-center">What Our Clients Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="stats-card p-8">
                        <p class="text-gray-300 mb-6">"Nitai Solutions transformed our recruitment process, reducing our time-to-hire by 60% while improving candidate quality."</p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-400/20 rounded-full mr-4"></div>
                            <div>
                                <h4 class="text-white font-bold">Sarah Johnson</h4>
                                <p class="text-gray-400">HR Director, Tech Corp</p>
                            </div>
                        </div>
                    </div>
                    <div class="stats-card p-8">
                        <p class="text-gray-300 mb-6">"The AI-powered matching system has been a game-changer for our organization. We've seen a significant improvement in retention rates."</p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-400/20 rounded-full mr-4"></div>
                            <div>
                                <h4 class="text-white font-bold">Michael Chen</h4>
                                <p class="text-gray-400">CEO, Innovation Labs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center py-20">
                <h2 class="text-3xl font-bold text-white mb-6">Ready to Get Started?</h2>
                <p class="text-gray-300 mb-8 max-w-2xl mx-auto">Let's discuss how we can help optimize your recruitment process.</p>
                <button class="primary-button mr-4" onclick="window.location.href='/form'">Schedule a Demo</button>
                <button class="secondary-button" onclick="window.location.href='/about'">Learn More</button>
            </div>
        </div>
    </section>
</div>
@endsection 