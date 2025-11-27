<?php include 'includes/header.php'; ?>

    <!-- Main Content -->
    <main class="login-container flex items-center justify-center py-16 px-4">
        <div class="w-full max-w-6xl mx-auto grid md:grid-cols-4 gap-8">
            <!-- Login Form - Mobile First -->
            <div class="md:col-span-3 order-1 md:order-2">
                <div class="bg-white rounded-xl shadow-lg p-8 md:p-12 login-form">
                    <div class="max-w-md mx-auto">
                        <h1 class="text-3xl font-bold text-gray-900 mb-2 text-center">Author Login</h1>
                        <p class="text-gray-600 text-center mb-8">Access your author dashboard to manage submissions</p>

                        <form class="space-y-6" id="loginForm">
                            <div>
                                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                                <input type="text" id="username" name="username" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent input-field transition duration-200"
                                    placeholder="Enter your username">
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                                <input type="password" id="password" name="password" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent input-field transition duration-200"
                                    placeholder="Enter your password">
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                                </div>
                                <a href="#" class="text-sm text-blue-600 hover:text-blue-800">Forgot password?</a>
                            </div>

                            <button type="submit" 
                                class="w-full bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 btn-primary transition duration-200">
                                Login
                            </button>
                        </form>

                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <p class="text-center text-sm text-gray-600">
                                Don't have an account? 
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Register as Author</a>
                            </p>
                        </div>

                        <div class="mt-6 text-center">
                            <p class="text-xs text-gray-500">
                                By logging in, you agree to our 
                                <a href="#" class="text-blue-600 hover:text-blue-800">Terms of Service</a> and 
                                <a href="#" class="text-blue-600 hover:text-blue-800">Privacy Policy</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar - Mobile Second -->
            <div class="md:col-span-1 order-2 md:order-1">
                <div class="space-y-3">
                    <a href="author-login.html" class="w-full bg-blue-500 text-white hover:bg-blue-600 px-6 py-4 rounded-lg font-semibold flex items-center gap-2 transition">
                        ↪ Author Login
                    </a>
                    <a href="submit-manuscript.html" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
                        📄 Submit Manuscript
                    </a>
                    <a href="https://www.sassociety.com/join-sas-society/" target="_blank" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
                        👥 Join Membership
                    </a>
                    <a href="https://www.sassociety.com/join-reviewer/" target="_blank" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
                        👤 Join As Reviewer
                    </a>
                    <a href="https://www.sassociety.com/join-editor/" target="_blank" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
                        📋 Join As Editor
                    </a>
                    <a href="../pages/payments.html" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
                        💳 Pay Publication Fee
                    </a>
                    <a href="subscribe-hardcopy.html" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
                        ✓ Subscribe Hard Copy
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="px-4 md:px-12">
            <div class="grid md:grid-cols-4 gap-12 mb-8 max-w-7xl mx-auto">
                <!-- Quick Links Column -->
                <div>
                    <h4 class="text-lg font-bold text-white mb-6">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Fellow Membership</a></li>
                        <li><a href="#" class="hover:text-white transition">Life Membership</a></li>
                        <li><a href="#" class="hover:text-white transition">Regular Membership</a></li>
                        <li><a href="#" class="hover:text-white transition">Join Membership</a></li>
                        <li><a href="#" class="hover:text-white transition">Join as Chief Editor</a></li>
                        <li><a href="#" class="hover:text-white transition">Join as Associate Editor</a></li>
                        <li><a href="#" class="hover:text-white transition">Join as Reviewer</a></li>
                    </ul>
                </div>

                <!-- Download Certificate Column -->
                <div>
                    <h4 class="text-lg font-bold text-white mb-6">Download Certificate</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Download Editorial Certificate</a></li>
                        <li><a href="#" class="hover:text-white transition">Download Reviewer Certificate</a></li>
                        <li><a href="#" class="hover:text-white transition">Download Publication Certificate</a></li>
                    </ul>
                </div>

                <!-- Contact Us Column -->
                <div>
                    <h4 class="text-lg font-bold text-white mb-6">Contact Us</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li>📞 +91-9365665504</li>
                        <li>📞 +91-8724002629</li>
                        <li>📧 submit@saspublishers.com /</li>
                        <li class="ml-6">saspjournals@gmail.com</li>
                    </ul>
                </div>

                <!-- License Column -->
                <div class="text-center md:text-right">
                    <div class="bg-gray-800 rounded-full p-4 w-24 h-24 flex items-center justify-center mx-auto md:mx-0 mb-4">
                        <div class="text-center">
                            <div class="text-2xl mb-1">©</div>
                            <p class="text-xs font-bold">CC BY NC</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-400">This work is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.</p>
                </div>
            </div>

            <hr class="border-gray-700 mb-8">

            <div class="text-center text-gray-500">
                <p>Copyright © 2025 SAS Publishers. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="../assets/js/script.js"></script>
</body>
</html>