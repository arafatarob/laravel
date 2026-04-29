<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Md Arafat</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    <canvas id="neural-bg"></canvas>

    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="logo-text">ARAFAT</div>
            
            <h2 style="font-size: 1.5rem; margin-bottom: 10px;">Welcome Back</h2>
            <p style="text-align: center; color: rgba(255,255,255,0.6); font-size: 0.85rem; margin-bottom: 30px;">Log in to continue to your dashboard.</p>

            <form action="{{ route('login_submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                    <i class="ri-mail-fill"></i>
                </div>
                <div class="form-group password-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    <i class="ri-lock-2-fill"></i>
                    <button type="button" class="password-toggle" id="pToggle" onclick="togglePassword('password', this)">
                        <i class="ri-eye-fill"></i>
                    </button>
                </div>
                <button type="submit" class="auth-btn">Login</button>
            </form>
            
            <div class="auth-link">
                Don't have an account? <a href="{{ route('register') }}" style="color: #00d4ff;">Register Here</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(inputId, btn) {
            const input = document.getElementById(inputId);
            const icon = btn.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('ri-eye-fill', 'ri-eye-off-fill');
            } else {
                input.type = 'password';
                icon.classList.replace('ri-eye-off-fill', 'ri-eye-fill');
            }
        }

        const canvas = document.getElementById('neural-bg');
        const ctx = canvas.getContext('2d');
        let particles = [];

        function init() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            particles = [];
            for (let i = 0; i < 100; i++) {
                particles.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    vx: (Math.random() - 0.5) * 0.5,
                    vy: (Math.random() - 0.5) * 0.5
                });
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = '#fff';
            ctx.strokeStyle = 'rgba(255, 255, 255, 0.1)';

            particles.forEach((p, i) => {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
                if (p.y < 0 || p.y > canvas.height) p.vy *= -1;

                ctx.beginPath();
                ctx.arc(p.x, p.y, 2, 0, Math.PI * 2);
                ctx.fill();

                for (let j = i + 1; j < particles.length; j++) {
                    let p2 = particles[j];
                    let dist = Math.hypot(p.x - p2.x, p.y - p2.y);
                    if (dist < 150) {
                        ctx.lineWidth = 1 - dist / 150;
                        ctx.beginPath();
                        ctx.moveTo(p.x, p.y);
                        ctx.lineTo(p2.x, p2.y);
                        ctx.stroke();
                    }
                }
            });
            requestAnimationFrame(animate);
        }

        window.addEventListener('resize', init);
        init();
        animate();
    </script>
</body>
</html>