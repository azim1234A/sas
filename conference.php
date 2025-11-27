<?php include 'includes/header.php'; ?>

    <!-- Page Content -->
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Conferences</h1>
            
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar - Appears Last on Mobile, First on Desktop -->
                <div class="w-full lg:w-1/4 order-last lg:order-first">
                    <div class="bg-white border border-gray-300 rounded-lg shadow-md sticky top-24">
                        <div class="divide-y">
                            <a href="author-login.html" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">🔑</span> Author Login
                            </a>
                            <a href="#" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">📝</span> Submit Manuscript
                            </a>
                            <a href="https://www.sassociety.com/join-sas-society/" target="_blank" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">👥</span> Join Membership
                            </a>
                            <a href="https://www.sassociety.com/join-reviewer/" target="_blank" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">📊</span> Join As Reviewer
                            </a>
                            <a href="https://www.sassociety.com/join-editor/" target="_blank" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">📊</span> Join As Editor
                            </a>
                            <a href="payments.html" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">💳</span> Pay Publication Fee
                            </a>
                            <a href="subscribe-hardcopy.html" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm rounded-b-lg">
                                <span class="text-lg">📚</span> Subscribe Hard Copy
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="w-full lg:w-3/4 order-first lg:order-none">
                    <div class="space-y-8 conference-grid">
                        <!-- Conference 1 -->
                        <div class="flex flex-col md:flex-row gap-6 bg-white rounded-lg shadow-md p-6 card-with-shadow conference-card">
                            <div class="md:w-1/3">
                                <img src="https://via.placeholder.com/300x350?text=NFPS+2018" alt="Conference" class="w-full h-80 object-cover rounded-lg conference-image">
                            </div>
                            <div class="md:w-2/3 conference-content">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">NFPS INTERNATIONAL PHARMACEUTICAL SUMMIT 2018</h3>
                                <p class="text-gray-600 mb-4 text-sm">NFPS Conference Proceeding. Sch. Acad. J. Pharm.; Vol-7: Issue-10 (Supply-Oct-2018)</p>
                                <p class="text-gray-500 text-xs mb-4">August 18th, 2018 - Venue: Taj Krishna, Hyderabad, India</p>
                                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold flex items-center gap-2 transition download-btn">
                                    <span>📥</span> Download PDF
                                </button>
                            </div>
                        </div>

                        <!-- Conference 2 -->
                        <div class="flex flex-col md:flex-row gap-6 bg-white rounded-lg shadow-md p-6 card-with-shadow conference-card">
                            <div class="md:w-1/3">
                                <img src="https://via.placeholder.com/300x350?text=Indo-Australian" alt="Conference" class="w-full h-80 object-cover rounded-lg conference-image">
                            </div>
                            <div class="md:w-2/3 conference-content">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Current Trends in Pharmaceutical Technology and Nano Science</h3>
                                <p class="text-gray-600 mb-4 text-sm">1st Indo-Australian Conference, 27th December, 2017</p>
                                <p class="text-gray-500 text-xs mb-4">In collaboration with: ANURAG Pharmacy College, Kodad, Telangana & Association of Pharmacy Professionals (APP)</p>
                                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold flex items-center gap-2 transition download-btn">
                                    <span>📥</span> Download PDF
                                </button>
                            </div>
                        </div>

                        <!-- Conference 3 -->
                        <div class="flex flex-col md:flex-row gap-6 bg-white rounded-lg shadow-md p-6 card-with-shadow conference-card">
                            <div class="md:w-1/3">
                                <img src="https://via.placeholder.com/300x350?text=Medical+Science" alt="Conference" class="w-full h-80 object-cover rounded-lg conference-image">
                            </div>
                            <div class="md:w-2/3 conference-content">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">International Conference on Medical Science and Technology</h3>
                                <p class="text-gray-600 mb-4 text-sm">Conference Proceedings - Volume 15, Issue 3 (2019)</p>
                                <p class="text-gray-500 text-xs mb-4">Held across multiple venues with international participation</p>
                                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold flex items-center gap-2 transition download-btn">
                                    <span>📥</span> Download PDF
                                </button>
                            </div>
                        </div>

                        <!-- Conference 4 -->
                        <div class="flex flex-col md:flex-row gap-6 bg-white rounded-lg shadow-md p-6 card-with-shadow conference-card">
                            <div class="md:w-1/3">
                                <img src="https://via.placeholder.com/300x350?text=Research+Summit" alt="Conference" class="w-full h-80 object-cover rounded-lg conference-image">
                            </div>
                            <div class="md:w-2/3 conference-content">
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Global Research Summit on Advanced Sciences</h3>
                                <p class="text-gray-600 mb-4 text-sm">Annual International Research Conference - 2020</p>
                                <p class="text-gray-500 text-xs mb-4">Virtual Conference with Global Participation</p>
                                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold flex items-center gap-2 transition download-btn">
                                    <span>📥</span> Download PDF
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Quick Links Column -->
                <div>
                    <h4 class="text-white font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="../index.html" class="hover:text-white transition">Home</a></li>
                        <li><a href="about-us.html" class="hover:text-white transition">About Us</a></li>
                        <li><a href="journals.html" class="hover:text-white transition">Journals</a></li>
                        <li><a href="books.html" class="hover:text-white transition">Books</a></li>
                        <li><a href="conference.html" class="hover:text-white transition">Conference</a></li>
                    </ul>
                </div>

                <!-- Download Certificate Column -->
                <div>
                    <h4 class="text-white font-bold mb-4">Download Certificate</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Download Published Certificate</a></li>
                        <li><a href="#" class="hover:text-white transition">Download Member Certificate</a></li>
                        <li><a href="#" class="hover:text-white transition">Download Editorial Certificate</a></li>
                        <li><a href="#" class="hover:text-white transition">Download Reviewer Certificate</a></li>
                        <li><a href="#" class="hover:text-white transition">Download Publication Certificate</a></li>
                    </ul>
                </div>

                <!-- Contact Us Column -->
                <div>
                    <h4 class="text-white font-bold mb-4">Contact Us</h4>
                    <p class="text-sm mb-3">📧 submit@saspublishers.com</p>
                    <p class="text-sm mb-3">📧 saspjournals@gmail.com</p>
                    <p class="text-sm mb-3">📞 +91-9365665504</p>
                    <p class="text-sm">📞 +91-8724002629</p>
                </div>

                <!-- License Column -->
                <div>
                    <h4 class="text-white font-bold mb-4">License</h4>
                    <div class="text-center">
                        <div class="text-2xl mb-1">©</div>
                        <p class="text-xs font-bold">CC BY NC</p>
                    </div>
                    <p class="text-sm text-gray-400 mt-3">This work is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.</p>
                </div>
            </div>

            <hr class="border-gray-700 mb-8 mt-8">

            <div class="text-center text-gray-500">
                <p>Copyright © 2025 SAS Publishers. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="../assets/js/script.js"></script>
</body>
</html>
