<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nitai Solutions - Next-Gen Human Recruitment</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #0a0f1a;
            margin: 0;
            overflow-x: hidden;
        }

        #bg-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            opacity: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            min-height: 100vh;
        }

        .navbar {
            background: rgba(10, 15, 26, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-link {
            color: #ffffff;
            opacity: 0.8;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .nav-link:hover {
            opacity: 1;
            color: #4B7BFF;
        }

        .hero-title {
            font-size: 4.5rem;
            line-height: 1.1;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.25rem;
            line-height: 1.6;
            margin-bottom: 2.5rem;
            max-width: 600px;
        }

        .stats-card {
            background: rgba(10, 15, 26, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 2rem;
            transition: all 0.3s ease;
            height: 400px;
            display: flex;
            flex-direction: column;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            border-color: rgba(75, 123, 255, 0.5);
            background: rgba(10, 15, 26, 0.8);
        }

        .chart-wrapper {
            position: relative;
            flex: 1;
            min-height: 0;
            width: 100%;
        }

        canvas {
            width: 100% !important;
            height: 100% !important;
        }

        .primary-button {
            background: #4B7BFF;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            font-size: 1rem;
        }

        .primary-button:hover {
            background: #3D63CC;
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(75, 123, 255, 0.3);
        }

        .secondary-button {
            background: transparent;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 1rem;
        }

        .secondary-button:hover {
            border-color: #4B7BFF;
            background: rgba(75, 123, 255, 0.1);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <canvas id="bg-canvas"></canvas>
    <div class="content">
        <!-- Navigation -->
        <nav class="navbar fixed w-full z-50">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="text-2xl font-bold text-white">
                        Nitai Solutions
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <a href="/solutions" class="nav-link">Solutions</a>
                        <a href="/services" class="nav-link">Services</a>
                        <a href="/about" class="nav-link">About Us</a>
                        <a href="/contact" class="nav-link">Contact</a>
                    </div>
                    <button class="primary-button" onclick="window.location.href='/form'">
                        Get Started
                    </button>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="min-h-screen flex items-center pt-20">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h1 class="hero-title">
                            Future of Human<br>
                            <span class="text-blue-400">Recruitment</span>
                        </h1>
                        <p class="hero-subtitle">
                            Transforming talent acquisition with AI-powered solutions and human-centric approach.
                        </p>
                        <div class="flex space-x-4">
                            <button class="primary-button" onclick="window.location.href='/form'">
                                Start Hiring
                            </button>
                            <button class="secondary-button" onclick="window.location.href='/about'">
                                Learn More
                            </button>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-12">
                        <div class="stats-card">
                            <h3 class="text-xl font-semibold mb-4 text-white">Recruitment Success Rate</h3>
                            <div class="chart-wrapper">
                                <canvas id="successChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="stats-card">
                        <h3 class="text-xl font-semibold mb-4 text-white">Placement Growth</h3>
                        <div class="chart-wrapper">
                            <canvas id="growthChart"></canvas>
                        </div>
                    </div>
                    <div class="stats-card">
                        <h3 class="text-xl font-semibold mb-4 text-white">Industry Distribution</h3>
                        <div class="chart-wrapper">
                            <canvas id="industryChart"></canvas>
                        </div>
                    </div>
                    <div class="stats-card">
                        <h3 class="text-xl font-semibold mb-4 text-white">Time to Hire</h3>
                        <div class="chart-wrapper">
                            <canvas id="timeChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-white text-center mb-16">Our Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-800 p-8 rounded-2xl hover-scale">
                        <i class="fas fa-users text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-4">Talent Acquisition</h3>
                        <p class="text-gray-400">Strategic recruitment solutions tailored to your company's needs.</p>
                    </div>
                    <div class="bg-gray-800 p-8 rounded-2xl hover-scale">
                        <i class="fas fa-brain text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-4">AI-Powered Matching</h3>
                        <p class="text-gray-400">Advanced algorithms to find the perfect candidate-job fit.</p>
                    </div>
                    <div class="bg-gray-800 p-8 rounded-2xl hover-scale">
                        <i class="fas fa-chart-line text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-white mb-4">HR Analytics</h3>
                        <p class="text-gray-400">Data-driven insights for better hiring decisions.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-blue-600">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-4xl font-bold mb-8">Ready to Transform Your Recruitment?</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">Join hundreds of companies that have revolutionized their hiring process with Nitai Solutions.</p>
                <button class="bg-white text-blue-600 px-8 py-3 rounded-full hover:bg-gray-100" onclick="window.location.href='/form'">
                    Schedule a Demo
                </button>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 py-12">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h4 class="text-xl font-bold text-white mb-4">Nitai Solutions</h4>
                        <p class="text-gray-400">Transforming the future of recruitment through innovation and expertise.</p>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-4">Services</h4>
                        <ul class="text-gray-400 space-y-2">
                            <li><a href="#" class="hover:text-blue-400">Talent Acquisition</a></li>
                            <li><a href="#" class="hover:text-blue-400">HR Analytics</a></li>
                            <li><a href="#" class="hover:text-blue-400">Consulting</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-4">Company</h4>
                        <ul class="text-gray-400 space-y-2">
                            <li><a href="/about" class="hover:text-blue-400">About Us</a></li>
                            <li><a href="#" class="hover:text-blue-400">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-4">Connect</h4>
                        <div class="flex space-x-4">
                            <a href="https://www.linkedin.com/company/nitai-solutions-pvt-ltd/" class="text-gray-400 hover:text-blue-400"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-400 hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/nitai.solutions?igsh=MW1zYXNzMjVpMjZobA==" class="text-gray-400 hover:text-blue-400"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                    <p>&copy; 2024 Nitai Solutions. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Minimalistic Background Animation
        const canvas = document.getElementById('bg-canvas');
        const renderer = new THREE.WebGLRenderer({
            canvas,
            antialias: true,
            alpha: true
        });
        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setSize(window.innerWidth, window.innerHeight);

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 100;
        camera.fov = 60;
        camera.updateProjectionMatrix();

        // Create flowing lines
        const lines = [];
        const lineCount = 8;
        const points = 200; // Increased number of points
        const curveAmplitude = 50;
        const screenWidth = window.innerWidth;
        const lineWidth = screenWidth * 2; // Make lines wider than screen

        for (let i = 0; i < lineCount; i++) {
            const lineGeometry = new THREE.BufferGeometry();
            const positions = new Float32Array(points * 3);
            
            for (let j = 0; j < points; j++) {
                const x = (j / points) * lineWidth - lineWidth/2; // Extend beyond screen edges
                const y = Math.sin((j / points) * Math.PI * 2) * curveAmplitude;
                const z = 0;
                
                positions[j * 3] = x;
                positions[j * 3 + 1] = y;
                positions[j * 3 + 2] = z;
            }
            
            lineGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
            
            const lineMaterial = new THREE.ShaderMaterial({
                vertexShader: `
                    uniform float uTime;
                    uniform float uOffset;
                    
                    void main() {
                        vec3 pos = position;
                        float wave = sin(pos.x * 0.02 + uTime + uOffset) * 2.0; // Adjusted frequency
                        pos.y += wave;
                        
                        gl_Position = projectionMatrix * modelViewMatrix * vec4(pos, 1.0);
                    }
                `,
                fragmentShader: `
                    void main() {
                        gl_FragColor = vec4(0.5, 0.8, 1.0, 0.2);
                    }
                `,
                uniforms: {
                    uTime: { value: 0 },
                    uOffset: { value: i * (Math.PI * 2 / lineCount) }
                },
                transparent: true,
                blending: THREE.AdditiveBlending,
                depthWrite: false
            });

            const line = new THREE.Line(lineGeometry, lineMaterial);
            line.position.y = (i - lineCount/2) * 3; // Reduced spacing between lines
            lines.push(line);
            scene.add(line);
        }

        // Mouse interaction
        let mouseX = 0;
        let mouseY = 0;
        const windowHalfX = window.innerWidth / 2;
        const windowHalfY = window.innerHeight / 2;

        document.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX - windowHalfX) * 0.0005; // Reduced mouse influence
            mouseY = (event.clientY - windowHalfY) * 0.0005;
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            const newWidth = window.innerWidth;
            camera.aspect = newWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(newWidth, window.innerHeight);

            // Update line widths on resize
            lines.forEach((line, i) => {
                const positions = new Float32Array(points * 3);
                const newLineWidth = newWidth * 2;
                
                for (let j = 0; j < points; j++) {
                    const x = (j / points) * newLineWidth - newLineWidth/2;
                    const y = Math.sin((j / points) * Math.PI * 2) * curveAmplitude;
                    const z = 0;
                    
                    positions[j * 3] = x;
                    positions[j * 3 + 1] = y;
                    positions[j * 3 + 2] = z;
                }
                
                line.geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
            });
        });

        // Animation loop
        const clock = new THREE.Clock();

        function animate() {
            requestAnimationFrame(animate);

            const time = clock.getElapsedTime();

            // Very subtle camera movement
            camera.position.x += (mouseX - camera.position.x) * 0.02;
            camera.position.y += (-mouseY - camera.position.y) * 0.02;
            camera.lookAt(scene.position);

            // Update line animations with slower movement
            lines.forEach((line) => {
                line.material.uniforms.uTime.value = time * 0.3;
            });

            renderer.render(scene, camera);
        }

        animate();

        // Initialize Charts with fixed dimensions
        const chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: { 
                    beginAtZero: true,
                    grid: { color: 'rgba(255, 255, 255, 0.1)' },
                    ticks: { color: 'rgba(255, 255, 255, 0.7)' }
                },
                x: { 
                    grid: { color: 'rgba(255, 255, 255, 0.1)' },
                    ticks: { color: 'rgba(255, 255, 255, 0.7)' }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        };

        const successChart = new Chart(document.getElementById('successChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Success Rate',
                    data: [85, 88, 87, 92, 94, 96],
                    borderColor: '#4B7BFF',
                    backgroundColor: 'rgba(75, 123, 255, 0.1)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: chartOptions
        });

        const growthChart = new Chart(document.getElementById('growthChart'), {
            type: 'bar',
            data: {
                labels: ['2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Placements',
                    data: [300, 450, 600, 750, 900],
                    backgroundColor: '#4B7BFF'
                }]
            },
            options: chartOptions
        });

        const industryChart = new Chart(document.getElementById('industryChart'), {
            type: 'doughnut',
            data: {
                labels: ['Tech', 'Finance', 'Healthcare', 'Others'],
                datasets: [{
                    data: [40, 25, 20, 15],
                    backgroundColor: ['#4B7BFF', '#FF6B6B', '#4ECB71', '#FFC947']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            color: 'rgba(255, 255, 255, 0.7)',
                            padding: 20
                        }
                    }
                }
            }
        });

        const timeChart = new Chart(document.getElementById('timeChart'), {
            type: 'line',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'Average Days',
                    data: [30, 25, 20, 15],
                    borderColor: '#4ECB71',
                    backgroundColor: 'rgba(78, 203, 113, 0.1)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: chartOptions
        });
    </script>
</body>
</html>
