<?php
session_start();
require('../config/database.php');

$next = $_GET['next'] ?? '';
// Fetch roles for the dropdown
$roles_query = $conn->query("SELECT id, role_name FROM roles");
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $role_id = $_POST['role_id'] ?? '';

    if (!$name || !$email || !$password || !$role_id) {
        $message = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Please enter a valid email address.';
    } elseif (strlen($password) < 6) {
        $message = 'Password must be at least 6 characters long.';
    } else {
        $name = $conn->real_escape_string($name);
        $email = $conn->real_escape_string($email);
        $password = $conn->real_escape_string($password);
        $role_id = (int)$role_id;

        $check = $conn->query("SELECT id FROM users WHERE email='$email' LIMIT 1");
        if ($check && $check->num_rows > 0) {
            $message = 'Email already exists. Use a different email.';
        } else {
            $created_at = date('Y-m-d H:i:s');
            $insert = $conn->query("INSERT INTO users (name, email, password, role_id) VALUES ('$name', '$email', '$password', '$role_id')");
            if ($insert) {
                if ($next) {
                    header('Location: login.php?next=' . urlencode($next));
                } else {
                    header('Location: login.php');
                }
                exit();
            } else {
                $message = 'Database error: ' . $conn->error;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration - Premium Portal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #16213e 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            overflow: hidden;
            position: relative;
        }

        /* Animated background elements */
        .bg-blob {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            animation: float 8s ease-in-out infinite;
            z-index: 0;
        }

        .blob-1 {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            top: -100px;
            left: -100px;
            animation-delay: 0s;
        }

        .blob-2 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #8b5cf6, #5b21b6);
            bottom: -50px;
            right: -50px;
            animation-delay: 2s;
        }

        .blob-3 {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #06b6d4, #0e7490);
            top: 50%;
            right: -150px;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -50px) rotate(120deg); }
            66% { transform: translate(-30px, 30px) rotate(240deg); }
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 950px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: center;
        }

        /* Left side - Hero section */
        .hero-section {
            color: white;
            animation: slideInLeft 0.6s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #60a5fa, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
            letter-spacing: -1px;
        }

        .hero-section p {
            font-size: 1.1rem;
            color: #cbd5e1;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .features-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.95rem;
            color: #e2e8f0;
            animation: slideInLeft 0.6s ease-out backwards;
        }

        .feature-item:nth-child(1) { animation-delay: 0.1s; }
        .feature-item:nth-child(2) { animation-delay: 0.2s; }
        .feature-item:nth-child(3) { animation-delay: 0.3s; }
        .feature-item:nth-child(4) { animation-delay: 0.4s; }

        .feature-icon {
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.7rem;
            flex-shrink: 0;
        }

        /* Right side - Form section */
        .form-container {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(100, 116, 139, 0.2);
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            animation: slideInRight 0.6s ease-out;
            position: relative;
            overflow: hidden;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .form-container::before {
            content: "";
            position: absolute;
            top: -50%;
            right: -50%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.1), transparent);
            pointer-events: none;
        }

        .form-header {
            margin-bottom: 2rem;
        }

        .form-header h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .form-header p {
            font-size: 0.9rem;
            color: #94a3b8;
        }

        .form-group {
            margin-bottom: 1.5rem;
            animation: fadeInUp 0.5s ease-out backwards;
            position: relative;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-group:nth-child(1) { animation-delay: 0.2s; }
        .form-group:nth-child(2) { animation-delay: 0.25s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.35s; }
        .form-group:nth-child(5) { animation-delay: 0.4s; }

        label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #cbd5e1;
            margin-bottom: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 0.9rem 1.2rem;
            font-size: 0.95rem;
            border: 1px solid rgba(100, 116, 139, 0.3);
            border-radius: 10px;
            background: rgba(15, 23, 42, 0.5);
            color: #e2e8f0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-family: inherit;
        }

        input[type="email"]:focus,
        input[type="text"]:focus,
        input[type="password"]:focus,
        select:focus {
            outline: none;
            border-color: #3b82f6;
            background: rgba(15, 23, 42, 0.8);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2), inset 0 0 20px rgba(59, 130, 246, 0.1);
        }

        input::placeholder {
            color: #64748b;
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%2394a3b8' d='M10.293 3.293L6 7.586 1.707 3.293A1 1 0 00.293 4.707l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            padding-right: 2.5rem;
        }

        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #94a3b8;
            font-size: 1.1rem;
            transition: color 0.2s ease;
            padding: 4px 8px;
        }

        .toggle-password:hover {
            color: #3b82f6;
        }

        .submit-btn {
            width: 100%;
            padding: 1rem;
            margin-top: 0.5rem;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 50%, #1e40af 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 0.95rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .submit-btn:hover:not(:disabled)::before {
            left: 100%;
        }

        .submit-btn:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        .submit-btn:active:not(:disabled) {
            transform: translateY(-1px);
        }

        .submit-btn:disabled {
            background: linear-gradient(135deg, #64748b 0%, #475569 100%);
            cursor: not-allowed;
            opacity: 0.5;
        }

        .form-footer {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(100, 116, 139, 0.1);
            text-align: center;
            font-size: 0.85rem;
            color: #94a3b8;
        }

        .form-footer a {
            color: #60a5fa;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .form-footer a:hover {
            color: #93c5fd;
            text-decoration: underline;
        }

        .success-message {
            display: none;
            position: fixed;
            top: 2rem;
            right: 2rem;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 1.2rem 1.5rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
            z-index: 1000;
            animation: slideDown 0.4s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-message.show {
            display: block;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .hero-section {
                display: none;
            }

            .form-container {
                padding: 2rem;
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }

            .bg-blob {
                width: 200px !important;
                height: 200px !important;
            }
        }
    </style>
</head>
<body>
    <!-- Animated background blobs -->
    <div class="bg-blob blob-1"></div>
    <div class="bg-blob blob-2"></div>
    <div class="bg-blob blob-3"></div>

    <div class="content-wrapper">
        <!-- Left side - Hero section -->
        <div class="hero-section">
            <h1>Welcome to<br>AdminHub</h1>
            <p>Manage your entire workspace with powerful tools and real-time insights</p>
            
            <div class="features-list">
                <div class="feature-item">
                    <div class="feature-icon">⚡</div>
                    <span>Lightning fast dashboard</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🔒</div>
                    <span>Enterprise-grade security</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📊</div>
                    <span>Advanced analytics & reports</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🎯</div>
                    <span>Role-based access control</span>
                </div>
            </div>
        </div>

        <!-- Right side - Form section -->
        <div class="form-container">
            <div class="form-header">
                <h2>Get Started</h2>
                <p>Create your user account in seconds</p>
            </div>

            <form id="adminForm" action="" method="post">
                <?php if ($message): ?>
                    <div class="message-box"><?php echo htmlspecialchars($message); ?></div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Your full name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="your@company.com"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="role_id">Account Role</label>
                    <select id="role_id" name="role_id" required>
                        <option value="" disabled selected>Select your role</option>
                        <?php 
                        if ($roles_query):
                            while($role = $roles_query->fetch_assoc()): ?>
                                <option value="<?php echo $role['id']; ?>"><?php echo htmlspecialchars($role['role_name']); ?></option>
                            <?php endwhile; 
                        endif; ?>
                    </select>
                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Create a strong password"
                            required
                        >
                        <button type="button" class="toggle-password" id="togglePassword">
                            👁️
                        </button>
                    </div>
                </div>

                <button type="submit" class="submit-btn" id="submitBtn">
                    Create User Account
                </button>

                <div class="form-footer">
                    Already have an account? <a href="login.php<?php echo $next ? '?next=' . urlencode($next) : ''; ?>">Sign in here</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const form = document.getElementById('adminForm');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const roleInput = document.getElementById('role_id');
        const togglePasswordBtn = document.getElementById('togglePassword');
        const submitBtn = document.getElementById('submitBtn');

        // Toggle password visibility
        togglePasswordBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            togglePasswordBtn.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
        });

        // Form submission validation
        form.addEventListener('submit', (e) => {
            const name = nameInput.value.trim();
            const email = emailInput.value.trim();
            const password = passwordInput.value;
            const role = roleInput.value;

            if (!name || !email || !password || !role) {
                alert('Please fill in all fields');
                e.preventDefault();
                return;
            }

            if (password.length < 6) {
                e.preventDefault();
                alert('Password must be at least 6 characters long');
                return;
            }
        });

        // Form validation
        const validateForm = () => {
            const isValid = nameInput.value && emailInput.value && passwordInput.value && roleInput.value;
            submitBtn.disabled = !isValid;
        };

        emailInput.addEventListener('input', validateForm);
        roleInput.addEventListener('change', validateForm);
        passwordInput.addEventListener('input', validateForm);
    </script>
</body>
</html>
