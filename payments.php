<?php include 'includes/header.php'; ?>

    <!-- Page Content -->
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar - Appears Last on Mobile, First on Desktop -->
                <div class="w-full lg:w-1/4 order-last lg:order-first">
                    <div class="space-y-3 sticky top-24">
                        <a href="author-login.php" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition">
                            ↪ Author Login
                        </a>
                        <a href="submit-manuscript.php" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition">
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
                        <a href="payments.php" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition bg-blue-50 border-l-4 border-blue-600">
                            💳 Pay Publication Fee
                        </a>
                        <a href="subscribe-hardcopy.php" class="block w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 text-sm transition">
                            ✓ Subscribe Hard Copy
                        </a>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="w-full lg:w-3/4 order-first lg:order-none">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Foreign Authors Card -->
                        <div class="bg-white border border-gray-300 rounded-lg p-6 shadow-sm">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Foreign Authors</h3>
                            <p class="text-gray-600 mb-6">Pay online in USD (PayPal, Credit Card, Debit Card)</p>
                            
                            <div class="mb-6">
                                <label class="block text-gray-700 font-semibold mb-3">Processing Fees</label>
                                <select class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500 bg-white">
                                    <option value="25">$25.00 USD</option>
                                    <option value="50">$50.00 USD</option>
                                    <option value="75">$75.00 USD</option>
                                    <option value="100">$100.00 USD</option>
                                </select>
                            </div>

                            <!-- PayPal Button -->
                            <button class="w-full bg-yellow-400 hover:bg-yellow-500 text-blue-800 font-bold py-4 px-6 rounded-lg mb-4 transition duration-300 text-lg flex items-center justify-center">
                                <span class="text-2xl font-bold">PayPal</span>
                            </button>

                            <!-- Credit/Debit Card Button -->
                            <button class="w-full bg-gray-800 hover:bg-gray-900 text-white font-bold py-4 px-6 rounded-lg mb-4 transition duration-300 flex items-center justify-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="5" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2" fill="none"/>
                                    <path d="M2 10h20" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                <span>Debit or Credit Card</span>
                            </button>

                            <div class="text-center text-sm text-gray-500 mb-6">
                                <span class="italic">Powered by</span> <span class="font-bold text-blue-600">PayPal</span>
                            </div>

                            <!-- Instructions -->
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                <ol class="text-sm text-gray-700 space-y-2">
                                    <li><strong>1.</strong>Please select required Payment Option and Fee and enter amount (Eg- 50 or 75 or 100 as required)</li>
                                    <li><strong>2.</strong> Click add to Cart and proceed for required payment option</li>
                                    <li><strong>3.</strong> Select the Check out (For Credit Card or debit Card Option) otherwise you can check out with PayPal.</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Indian Authors Card -->
                        <div class="bg-white border border-gray-300 rounded-lg p-6 shadow-sm">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Indian Authors</h3>
                            <p class="text-gray-600 mb-6">Pay online in INR using PayUmoney</p>
                            
                            <!-- PayUmoney Section -->
                            <div class="bg-gray-50 border border-gray-300 rounded-lg p-6 mb-6">
                                <h4 class="text-lg font-bold text-gray-800 mb-4">PayUmoney</h4>
                                <p class="text-red-600 font-semibold text-center mb-4">Click on the image</p>
                            </div>

                            <!-- Payment Secured Section -->
                            <div class="bg-white border border-gray-300 rounded-lg p-6">
                                <div class="text-center mb-6">
                                    <h4 class="text-lg font-bold text-gray-800">Payment Secured by <span class="text-blue-600">PAYU</span><span class="text-blue-400">money</span></h4>
                                </div>
                                
                                <div class="space-y-4">
                                    <!-- VISA -->
                                    <div class="flex justify-center">
                                        <div class="bg-white border border-gray-300 rounded px-6 py-2">
                                            <span class="text-2xl font-bold text-blue-900">VISA</span>
                                        </div>
                                    </div>

                                    <!-- Maestro & Mastercard -->
                                    <div class="flex justify-center gap-4">
                                        <!-- Maestro -->
                                        <div class="bg-white border border-gray-300 rounded p-3 flex items-center justify-center">
                                            <div class="flex">
                                                <div class="w-6 h-6 rounded-full bg-blue-600"></div>
                                                <div class="w-6 h-6 rounded-full bg-red-600 -ml-3"></div>
                                            </div>
                                            <span class="text-sm font-bold ml-2 text-blue-900">Maestro</span>
                                        </div>
                                        
                                        <!-- Mastercard -->
                                        <div class="bg-white border border-gray-300 rounded p-3 flex items-center justify-center">
                                            <div class="flex">
                                                <div class="w-6 h-6 rounded-full bg-red-600"></div>
                                                <div class="w-6 h-6 rounded-full bg-yellow-400 -ml-3"></div>
                                            </div>
                                            <span class="text-sm font-bold ml-2 text-red-600">MasterCard</span>
                                        </div>
                                    </div>

                                    <!-- Net Banking -->
                                    <div class="flex justify-center">
                                        <div class="bg-blue-600 text-white px-8 py-3 rounded font-bold">
                                            Net Banking
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
