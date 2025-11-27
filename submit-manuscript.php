<?php include 'includes/header.php'; ?>

    <!-- Page Content -->
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar - Appears Last on Mobile, First on Desktop -->
                <div class="w-full lg:w-1/4 order-last lg:order-first">
                    <div class="space-y-3">
                        <a href="author-login.php" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition">
                            ↪ Author Login
                        </a>
                        <a href="submit-manuscript.php" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition bg-blue-50 border-l-4 border-blue-600">
                            📋 Submit Manuscript
                        </a>
                        <a href="https://www.sassociety.com/join-sas-society/" target="_blank" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition">
                            👥 Join Membership
                        </a>
                        <a href="https://www.sassociety.com/join-reviewer/" target="_blank" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition">
                            👤 Join As Reviewer
                        </a>
                        <a href="https://www.sassociety.com/join-editor/" target="_blank" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition">
                            📋 Join As Editor
                        </a>
                        <a href="payments.php" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition">
                            💳 Pay Publication Fee
                        </a>
                        <a href="subscribe-hardcopy.php" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition">
                            ✓ Subscribe Hard Copy
                        </a>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="w-full lg:w-3/4 order-first lg:order-none">
                    <!-- Process Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Fast Process Card -->
                        <div class="bg-green-600 text-white rounded-lg p-6">
                            <h3 class="text-xl font-bold mb-4">Fast Process</h3>
                            <p class="mb-4 text-green-100">You can submit your Manuscript to the following email. Please mention the Journal name to which manuscript is submitting. Note:</p>
                            <ol class="mb-6 space-y-2 text-green-100">
                                <li>1. Immediate acknowledgement of manuscript within 12 hours</li>
                                <li>2. Acceptance letter after urgent review within 1 day</li>
                                <li>3. Gallery Proof within 1 day after Payment and</li>
                                <li>4. Immediate Publication within 1 day after Gallery Proof confirmation by author</li>
                            </ol>
                            <div class="bg-green-500 border-2 border-green-300 rounded-lg p-4 text-center font-bold">
                                Email: fastpublication.sas@gmail.com
                            </div>
                        </div>

                        <!-- Normal Process Card -->
                        <div class="bg-white border border-gray-300 rounded-lg p-6">
                            <h3 class="text-xl font-bold mb-4 text-gray-800">Normal Process</h3>
                            <p class="mb-4 text-gray-700">You can submit your Manuscript to the following email. Please mention the Journal name to which manuscript is submitting. Note:</p>
                            <ol class="mb-6 space-y-2 text-gray-700">
                                <li>1. Acknowledgement of manuscript submission within 24-48 hours;</li>
                                <li>2. Acceptance letter after review Process which takes 5-7 days;</li>
                                <li>3. Gallery Proof within 7 days after Payment and</li>
                                <li>4. Monthly Publication Online and Print</li>
                            </ol>
                            <div class="bg-gray-50 border-2 border-gray-300 rounded-lg p-4 text-center font-bold text-gray-800">
                                Email: sasjournals@gmail.com
                            </div>
                        </div>
                    </div>

                    <!-- Additional Email -->
                    <p class="text-gray-700 mb-8">You may also submit your paper through email to <span class="text-red-600 font-bold">saspjournals@gmail.com</span></p>

                    <!-- Submission Form -->
                    <div class="bg-white">
                        <form class="space-y-6">
                            <!-- Process Selection -->
                            <div>
                                <label for="process" class="block text-gray-700 font-semibold mb-2">Process</label>
                                <select id="process" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500">
                                    <option value="fast">Fast Track Process</option>
                                    <option value="normal">Normal Process</option>
                                </select>
                            </div>

                            <!-- Full Name -->
                            <div>
                                <label for="fullname" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                                <input type="text" id="fullname" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500" placeholder="Enter your full name" required>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                                <input type="email" id="email" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500" placeholder="Enter your email" required>
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                                <input type="tel" id="phone" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500" placeholder="Enter your phone number" required>
                            </div>

                            <!-- Journal -->
                            <div>
                                <label for="journal" class="block text-gray-700 font-semibold mb-2">Journal</label>
                                <select id="journal" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500">
                                    <option value="">Scholars Journal of Medical Case Reports</option>
                                    <option value="sajb">Scholars Journal of Agriculture and Veterinary Sciences</option>
                                    <option value="sjah">Scholars Journal of Arts, Humanities and Social Sciences</option>
                                    <option value="sjab">Scholars Academic Journal of Biosciences</option>
                                    <option value="sjds">Scholars Journal of Dental Sciences</option>
                                    <option value="sjebm">Scholars Journal of Economics, Business and Management</option>
                                    <option value="sjet">Scholars Journal of Engineering and Technology</option>
                                </select>
                            </div>

                            <!-- Manuscript Title -->
                            <div>
                                <label for="manuscript-title" class="block text-gray-700 font-semibold mb-2">Manuscript Title</label>
                                <input type="text" id="manuscript-title" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500" placeholder="Enter manuscript title" required>
                            </div>

                            <!-- Article File -->
                            <div>
                                <label for="article-file" class="block text-gray-700 font-semibold mb-2">Article File</label>
                                <input type="file" id="article-file" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500" accept=".pdf,.doc,.docx">
                            </div>

                            <!-- Captcha -->
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Captcha</label>
                                <div class="bg-gray-50 border border-gray-300 rounded-lg p-4 max-w-sm">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-shrink-0 mt-1">
                                            <input type="checkbox" id="captcha" class="w-5 h-5 text-blue-600 bg-white border-2 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 cursor-pointer">
                                        </div>
                                        <div class="flex-1">
                                            <label for="captcha" class="text-gray-800 font-medium cursor-pointer select-none">I'm not a robot</label>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-green-500 rounded flex items-center justify-center shadow-sm">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" fill="white"/>
                                                    <circle cx="12" cy="12" r="8" stroke="white" stroke-width="1.5" fill="none" opacity="0.3"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 pt-3 border-t border-gray-200">
                                        <div class="flex items-center justify-between text-xs">
                                            <div class="flex items-center gap-2">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C3.58 0 0 3.58 0 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z" fill="#1f4e79"/>
                                                    <path d="M8 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" fill="#1f4e79"/>
                                                </svg>
                                                <span class="text-gray-600 font-medium">reCAPTCHA</span>
                                            </div>
                                            <div class="flex items-center gap-3 text-gray-500">
                                                <a href="#" class="hover:text-blue-600 transition-colors duration-200">Privacy</a>
                                                <span>-</span>
                                                <a href="#" class="hover:text-blue-600 transition-colors duration-200">Terms</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-4">
                                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                                    Submit Manuscript
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>