<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nitai Solutions - Next-Gen Human Recruitment')</title>
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

        .stats-card {
            background: rgba(10, 15, 26, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            border-color: rgba(75, 123, 255, 0.5);
            background: rgba(10, 15, 26, 0.8);
        }
    </style>
</head>
<body>
    <canvas id="bg-canvas"></canvas>

    <!-- Navigation -->
    <nav class="navbar fixed w-full z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="text-2xl font-bold text-white">
                    Nitai Solutions
                </a>
                <div class="hidden md:flex space-x-8">
                    <a href="/solutions" class="nav-link">Solutions</a>
                    <a href="/services" class="nav-link">Services</a>
                    <a href="/about" class="nav-link">About Us</a>
                    <a href="/contact" class="nav-link">Contact</a>
                </div>
                <a href="{{ route('form') }}" class="primary-button">
                    Get Started
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-800 py-12 relative z-10">
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
                        <li><a href="/careers" class="hover:text-blue-400">Careers</a></li>
                        <li><a href="/contact" class="hover:text-blue-400">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-white mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-400"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Nitai Solutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Background Animation
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
        const points = 200;
        const curveAmplitude = 50;
        const screenWidth = window.innerWidth;
        const lineWidth = screenWidth * 2;

        for (let i = 0; i < lineCount; i++) {
            const lineGeometry = new THREE.BufferGeometry();
            const positions = new Float32Array(points * 3);
            
            for (let j = 0; j < points; j++) {
                const x = (j / points) * lineWidth - lineWidth/2;
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
                        float wave = sin(pos.x * 0.02 + uTime + uOffset) * 2.0;
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
            line.position.y = (i - lineCount/2) * 3;
            lines.push(line);
            scene.add(line);
        }

        // Mouse interaction
        let mouseX = 0;
        let mouseY = 0;
        const windowHalfX = window.innerWidth / 2;
        const windowHalfY = window.innerHeight / 2;

        document.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX - windowHalfX) * 0.0005;
            mouseY = (event.clientY - windowHalfY) * 0.0005;
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            const newWidth = window.innerWidth;
            camera.aspect = newWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(newWidth, window.innerHeight);

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

            camera.position.x += (mouseX - camera.position.x) * 0.02;
            camera.position.y += (-mouseY - camera.position.y) * 0.02;
            camera.lookAt(scene.position);

            lines.forEach((line) => {
                line.material.uniforms.uTime.value = time * 0.3;
            });

            renderer.render(scene, camera);
        }

        animate();
    </script>
</body>
</html> 