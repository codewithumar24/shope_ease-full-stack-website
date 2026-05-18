<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Ecommerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        body { font-family: 'Poppins', sans-serif; overflow: hidden; }
        
        .shape-top { clip-path: polygon(0 0, 100% 0, 100% 40%, 0 85%); background: linear-gradient(135deg, #ff0000 0%, #ff8c00 100%); }
        .shape-bottom { clip-path: polygon(0 60%, 100% 15%, 100% 100%, 0 100%); background: linear-gradient(135deg, #00ff88 0%, #0077ff 100%); }

        .animated-border-wrapper {
            position: relative;
            padding: 4px;
            border-radius: 45px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }
        .animated-border-wrapper::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            background: conic-gradient(transparent, transparent, transparent, #00ff88, #ff0000, #0077ff);
            animation: rotateLine 4s linear infinite;
        }
        @keyframes rotateLine { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        .inner-card { background: white; width: 100%; height: 100%; border-radius: 40px; position: relative; z-index: 20; }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen relative">

    <div class="absolute top-0 left-0 w-full h-64 shape-top z-0"></div>
    <div class="absolute bottom-0 left-0 w-full h-64 shape-bottom z-0"></div>

    <div class="animated-border-wrapper w-96 shadow-2xl">
        <div class="inner-card p-10 min-h-[500px] flex flex-col justify-center">
            <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">New Password</h2>
            <p class="text-xs text-gray-400 text-center mb-10">Set a strong password to protect your account.</p>
            
            <form class="space-y-6">
                <div class="relative border-b-2 border-gray-200 focus-within:border-green-400 transition-colors">
                    <span class="absolute left-0 bottom-2 text-gray-400"><i class="fas fa-lock"></i></span>
                    <input type="password" placeholder="New Password" class="w-full pl-8 pb-2 outline-none bg-transparent" required>
                </div>

                <div class="relative border-b-2 border-gray-200 focus-within:border-green-400 transition-colors">
                    <span class="absolute left-0 bottom-2 text-gray-400"><i class="fas fa-check-double"></i></span>
                    <input type="password" placeholder="Confirm Password" class="w-full pl-8 pb-2 outline-none bg-transparent" required>
                </div>

                <div class="flex justify-center pt-8">
                    <button type="submit" class="border-2 border-red-400 text-red-500 px-10 py-2 rounded-full font-semibold hover:bg-red-500 hover:text-white transition-all shadow-sm uppercase text-sm tracking-wider">
                        update now
                    </button>
                </div>

                <div class="text-center pt-6">
                    <a href="login.html" class="text-gray-400 text-xs hover:text-gray-600 italic underline">Return to Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>