@extends('layouts.app')

@section('content')
<div class="content">
    <section class="min-h-screen pt-32">
        <div class="container mx-auto px-6">
            <!-- Hero Section -->
            <div class="text-center mb-20">
                <h1 class="text-5xl font-bold text-white mb-6">Contact Us</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Get in touch with our team to learn how we can help transform your recruitment process.</p>
                <div class="mt-8">
                    <a href="{{ route('form') }}" class="primary-button inline-block" onclick="window.location.href='/form'">Schedule a Demo</a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
                <!-- Contact Form -->
                <div class="stats-card p-8">
                    <h2 class="text-2xl font-bold text-white mb-8">Send us a Message</h2>
                    
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
                        <div>
                            <label class="block text-gray-300 mb-2" for="details">Additional Details</label>
                            <textarea 
                                id="details" 
                                name="details" 
                                rows="4" 
                                class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:border-blue-400 transition-colors"
                            >{{ old('details') }}</textarea>
                        </div>
                        <div class="flex items-center justify-between pt-4">
                            <p class="text-sm text-gray-400">
                                <span class="text-blue-400">*</span> Required fields
                            </p>
                            <button type="submit" class="primary-button">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="stats-card p-8">
                        <h2 class="text-2xl font-bold text-white mb-6">Contact Information</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-4"></i>
                                <div>
                                    <h3 class="text-white font-bold">Address</h3>
                                    <p class="text-gray-300">Mumbai<br>Maharashtra</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone text-blue-400 mt-1 mr-4"></i>
                                <div>
                                    <h3 class="text-white font-bold">Phone</h3>
                                    <p class="text-gray-300">+91 9321628232</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-blue-400 mt-1 mr-4"></i>
                                <div>
                                    <h3 class="text-white font-bold">Email</h3>
                                    <p class="text-gray-300">nitaidata@gmail.com</p>
                                    <p class="text-gray-300">Shushant@nitaisolutions.co.in</p>
                                    <p class="text-gray-300">Sidhant@nitaisolutions.co.in</p>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="stats-card p-8">
                        <h2 class="text-2xl font-bold text-white mb-6">Office Hours</h2>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-300">Monday - Friday</span>
                                <span class="text-white">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-300">Saturday</span>
                                <span class="text-white">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-300">Sunday</span>
                                <span class="text-white">Closed</span>
                            </div>
                        </div>
                    </div>

                    <div class="stats-card p-8">
                        <h2 class="text-2xl font-bold text-white mb-6">Connect With Us</h2>
                        <div class="flex space-x-4">
                            <a href="https://www.linkedin.com/company/nitai-solutions-pvt-ltd/" class="text-gray-300 hover:text-blue-400 text-2xl">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-blue-400 text-2xl">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-blue-400 text-2xl">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/nitai.solutions?igsh=MW1zYXNzMjVpMjZobA==" class="text-gray-300 hover:text-blue-400 text-2xl">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="mb-20">
                <div class="stats-card p-8">
                    <h2 class="text-2xl font-bold text-white mb-8">Our Location</h2>
                    <div id="map" class="w-full h-96 rounded-lg overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588048.0027295462!2d72.82855326492619!3d18.93983308729201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1748663794913!5m2!1sen!2sin" 
                            class="w-full h-full"
                            style="border: 0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mb-20">
                <h2 class="text-3xl font-bold text-white mb-12 text-center">Frequently Asked Questions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="stats-card p-8">
                        <h3 class="text-xl font-bold text-white mb-4">How quickly can you start?</h3>
                        <p class="text-gray-300">We can typically begin implementation within 1-2 weeks of contract signing.</p>
                    </div>
                    <div class="stats-card p-8">
                        <h3 class="text-xl font-bold text-white mb-4">Do you offer custom solutions?</h3>
                        <p class="text-gray-300">Yes, we tailor our solutions to meet your specific recruitment needs and challenges.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" defer></script>
<script>
    let map;
    function initMap() {
        // Mumbai coordinates
        const mumbai = { lat: 19.0760, lng: 72.8777 };
        
        // Create map
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: mumbai,
            styles: [
                {
                    "elementType": "geometry",
                    "stylers": [{"color": "#242f3e"}]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{"color": "#242f3e"}]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#746855"}]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#d59563"}]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#d59563"}]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{"color": "#263c3f"}]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#6b9a76"}]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{"color": "#38414e"}]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#212a37"}]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#9ca5b3"}]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{"color": "#746855"}]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#1f2835"}]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#f3d19c"}]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{"color": "#17263c"}]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#515c6d"}]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.stroke",
                    "stylers": [{"color": "#17263c"}]
                }
            ]
        });

        // Add marker
        const marker = new google.maps.Marker({
            position: mumbai,
            map: map,
            title: "Nitai Solutions - Mumbai Office"
        });

        // Add info window
        const infowindow = new google.maps.InfoWindow({
            content: `
                <div class="p-2">
                    <h3 class="font-bold text-gray-900">Nitai Solutions</h3>
                    <p class="text-gray-700">Mumbai, Maharashtra</p>
                </div>
            `
        });

        marker.addListener("click", () => {
            infowindow.open(map, marker);
        });
    }
</script>
@endsection 