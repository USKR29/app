<x-layout>
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-auto p-6 bg-white rounded-xl shadow-lg transform transition duration-300 hover:scale-[1.01]">
        
        <!-- Header with tabs -->
        <div class="flex border-b border-gray-200 mb-6">
            <button id="login-tab" class="tab-button w-1/2 py-3 text-center text-gray-500 hover:text-blue-600 transition duration-200 active">Login</button>
            <button id="signup-tab" class="tab-button w-1/2 py-3 text-center text-gray-500 hover:text-blue-600 transition duration-200">Sign Up</button>
        </div>

        <!-- Login Form -->
        <form id="login-form" method="POST" action="{{route('login')}}" class="space-y-4">
            @csrf
            <h2 class="text-2xl font-semibold text-center text-gray-800">Welcome Back</h2>
            <p class="text-sm text-center text-gray-500 mb-6">Please enter your details to sign in.</p>

            <div>
                <label for="login-email" class="block text-gray-700 font-medium">Email Address</label>
                <input type="email" id="login-email" name="email" placeholder="you@example.com" required>
            </div>
            
            <div>
                <label for="login-password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="login-password" name="password" placeholder="••••••••" required>
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 px-4 rounded-md hover:bg-blue-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Log In
            </button>
        </form>

        <!-- Sign Up Form (hidden by default) -->
        <form id="signup-form" class="space-y-4 hidden" method="POST" action="{{route('signup')}}">
            @csrf
            <h2 class="text-2xl font-semibold text-center text-gray-800">Create an Account</h2>
            <p class="text-sm text-center text-gray-500 mb-6">Join us and start your journey with a new account.</p>

            <div>
                <label for="signup-name" class="block text-gray-700 font-medium">Full Name</label>
                <input type="text" id="signup-name" name="name" placeholder="John Doe" required>
            </div>
            
            <div>
                <label for="signup-email" class="block text-gray-700 font-medium">Email Address</label>
                <input type="email" id="signup-email" name="email" placeholder="you@example.com" required>
            </div>
             @error('email')
                <div class="text-red-500 text-sm m-1">{{$message}}</div>
            @enderror
            <div>
                <label for="signup-password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="signup-password" name="password" placeholder="••••••••" required>
            </div>
            @error('password')
                <div class="text-red-500 text-sm m-1">{{$message}}</div>
            @enderror
             <div>
                <label for="signup-password" class="block text-gray-700 font-medium">Confirm Password</label>
                <input type="password" id="signup-password" name="password_confirmation" placeholder="••••••••" required>
            </div>
            
            <button type="submit" class="w-full bg-green-600 text-white font-bold py-3 px-4 rounded-md hover:bg-green-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-green-500">
                Sign Up
            </button>
        </form>

    </div>

    <script>
        const loginTab = document.getElementById('login-tab');
        const signupTab = document.getElementById('signup-tab');
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');

        // Function to show the login form and hide the signup form
        function showLoginForm() {
            loginTab.classList.add('active');
            signupTab.classList.remove('active');
            loginForm.classList.remove('hidden');
            signupForm.classList.add('hidden');
        }

        // Function to show the signup form and hide the login form
        function showSignupForm() {
            signupTab.classList.add('active');
            loginTab.classList.remove('active');
            signupForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
        }

        // Add event listeners to the tab buttons
        loginTab.addEventListener('click', showLoginForm);
        signupTab.addEventListener('click', showSignupForm);

        // You can add your form submission logic here
        loginForm.addEventListener('submit', (e) => {
            // e.preventDefault();
            console.log('Login form submitted!');
            // Your API call or logic for login
        });
        
        signupForm.addEventListener('submit', (e) => {
            // e.preventDefault();
            console.log('Sign Up form submitted!');
            // Your API call or logic for sign up
        });
    </script>

</div>
</x-layout>