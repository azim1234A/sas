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
                    <!-- Fast Track Publication Fee Banner -->
                    <div class="bg-green-600 text-white rounded-lg p-6 mb-8">
                        <h2 class="text-xl font-bold mb-2">FAST TRACK PUBLICATION FEE</h2>
                        <p class="text-lg">Any Journal : Rs. 7000 [India] / USD 200 [Foreign] (Published within 3 days)</p>
                    </div>

                    <!-- Normal Publication Fees Section -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">NORMAL PUBLICATION FEES</h2>

                        <!-- Fees Table -->
                        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden shadow-sm">
                            <table class="w-full">
                                <thead>
                                    <tr class="bg-gray-50 border-b border-gray-300">
                                        <th class="px-6 py-4 text-left font-semibold text-gray-800">Journal Name</th>
                                        <th class="px-6 py-4 text-center font-semibold text-gray-800">Indian(INR)</th>
                                        <th class="px-6 py-4 text-center font-semibold text-gray-800">Foreign(USD)</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Cross-Currents: An International Peer-Reviewed Journal on Humanities & Social Sciences</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">2500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">50</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Ghana Alternative Medicine Journal</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">2500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">50</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Journal of Microbial Impact</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">4000</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">50</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">SAS Journal of Medicine</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">SAS Journal of Surgery</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Academic Journal of Biosciences</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Academic Journal of Pharmacy</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Journal of Agriculture and Veterinary Sciences</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Journal of Applied Medical Sciences</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Journal of Arts, Humanities and Social Sciences</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Journal of Dental Sciences</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Journal of Economics, Business and Management</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Journal of Engineering and Technology</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Journal of Medical Case Reports</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-800">Scholars Journal of Physics, Mathematics and Statistics</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">3500</td>
                                        <td class="px-6 py-4 text-center font-semibold text-gray-900">100</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Hard Copy Fee Section -->
                    <div class="bg-white border border-gray-300 rounded-lg p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">HARD COPY FEE (Optional)</h3>
                        <div class="space-y-2">
                            <p class="text-gray-800"><span class="font-semibold">Any Journal Issue:</span> Rs. 2000 (India)</p>
                            <p class="text-gray-800">/ USD 50 (Foreign)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>