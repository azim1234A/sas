<?php include 'includes/header.php'; ?>

    <!-- Page Content -->
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar - Appears Last on Mobile, First on Desktop -->
                <div class="w-full lg:w-1/4 order-last lg:order-first">
                    <div class="bg-white border border-gray-300 rounded-lg shadow-md sticky top-24">
                        <div class="divide-y">
                            <a href="author-login.html" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">🔑</span> Author Login
                            </a>
                            <a href="submit-manuscript.html" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
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
                            <a href="subscribe-hardcopy.html" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm rounded-b-lg bg-gray-100">
                                <span class="text-lg">📚</span> Subscribe Hard Copy
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Content - Appears First on Mobile, Last on Desktop -->
                <div class="w-full lg:w-3/4 order-first lg:order-last">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Subscribe Hardcopy</h2>
                    
                    <!-- Hardcopy Subscription Content -->
                    <div class="hardcopy-content">
                        <p>All journals published by Scholars Academic and Scientific Society(SAS Society) are open access and accessible for free on the Internet. SAS defrays subscription charges only for its printed version.</p>

                        <!-- Price Section -->
                        <div class="price-section">
                            <p><strong>Price:</strong></p>
                            <p><strong>Single Issue Complete Hard Copy</strong></p>
                            <p>INR 1000/( Including Postal Charge) -INDIA</p>
                            <p>USD 25 (Foreign) (Including Postal Charge)-FOREIGN</p>
                        </div>

                        <p>For Purchase of Hard Copy please contact email: <span class="email-highlight">print.sasjournals@gmail.com</span></p>
                        <p>Whatsapp: <span class="whatsapp-highlight">91-8724002629</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="../index.html" class="hover:text-teal-400 transition">Home</a></li>
                        <li><a href="journals.html" class="hover:text-teal-400 transition">Journals</a></li>
                        <li><a href="books.html" class="hover:text-teal-400 transition">Books</a></li>
                        <li><a href="about-us.html" class="hover:text-teal-400 transition">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Download Certificate</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-teal-400 transition">Download Author Certificate</a></li>
                        <li><a href="#" class="hover:text-teal-400 transition">Download Reviewer Certificate</a></li>
                        <li><a href="#" class="hover:text-teal-400 transition">Download Editor Certificate</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-sm">
                        <li>📞 +91-9365665504</li>
                        <li>📞 +91-8724002629</li>
                        <li>✉️ submit@saspublishers.com</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">License</h4>
                    <p class="text-sm">This work is licensed under a Creative Commons Attribution 4.0 International License.</p>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-6">
                <p class="text-center text-sm text-gray-400">&copy; 2024 SAS Publishers. All rights reserved. | Powered by SAS</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const forAuthorsToggle = document.getElementById('forAuthorsToggle');
        const forAuthorsMenu = document.getElementById('forAuthorsMenu');
        const forAuthorsArrow = document.getElementById('forAuthorsArrow');

        // Desktop dropdown functionality
        const forAuthorsDropdown = document.getElementById('forAuthorsDropdown');
        const forAuthorsDropdownMenu = document.getElementById('forAuthorsDropdownMenu');
        let dropdownTimeout;

        if (forAuthorsDropdown && forAuthorsDropdownMenu) {
            // Show dropdown on click
            forAuthorsDropdown.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                if (forAuthorsDropdownMenu.classList.contains('opacity-0')) {
                    forAuthorsDropdownMenu.classList.remove('opacity-0', 'invisible');
                    forAuthorsDropdownMenu.classList.add('opacity-100', 'visible');
                } else {
                    forAuthorsDropdownMenu.classList.remove('opacity-100', 'visible');
                    forAuthorsDropdownMenu.classList.add('opacity-0', 'invisible');
                }
            });

            // Show dropdown on hover
            forAuthorsDropdown.addEventListener('mouseenter', () => {
                clearTimeout(dropdownTimeout);
                forAuthorsDropdownMenu.classList.remove('opacity-0', 'invisible');
                forAuthorsDropdownMenu.classList.add('opacity-100', 'visible');
            });

            // Hide dropdown when mouse leaves
            forAuthorsDropdown.addEventListener('mouseleave', () => {
                dropdownTimeout = setTimeout(() => {
                    forAuthorsDropdownMenu.classList.remove('opacity-100', 'visible');
                    forAuthorsDropdownMenu.classList.add('opacity-0', 'invisible');
                }, 300);
            });

            forAuthorsDropdownMenu.addEventListener('mouseenter', () => {
                clearTimeout(dropdownTimeout);
            });

            forAuthorsDropdownMenu.addEventListener('mouseleave', () => {
                dropdownTimeout = setTimeout(() => {
                    forAuthorsDropdownMenu.classList.remove('opacity-100', 'visible');
                    forAuthorsDropdownMenu.classList.add('opacity-0', 'invisible');
                }, 300);
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!forAuthorsDropdown.contains(e.target) && !forAuthorsDropdownMenu.contains(e.target)) {
                    forAuthorsDropdownMenu.classList.remove('opacity-100', 'visible');
                    forAuthorsDropdownMenu.classList.add('opacity-0', 'invisible');
                }
            });
        }

        // Mobile menu toggle
        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu when clicking on a link
            const mobileMenuLinks = mobileMenu.querySelectorAll('a');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

        // For Authors submenu toggle in mobile
        if (forAuthorsToggle && forAuthorsMenu && forAuthorsArrow) {
            forAuthorsToggle.addEventListener('click', () => {
                forAuthorsMenu.classList.toggle('hidden');
                // Rotate the arrow icon
                if (forAuthorsMenu.classList.contains('hidden')) {
                    forAuthorsArrow.style.transform = 'rotate(0deg)';
                } else {
                    forAuthorsArrow.style.transform = 'rotate(180deg)';
                }
            });
            
            // Smooth transition for arrow
            forAuthorsArrow.style.transition = 'transform 0.3s ease';
        }
    </script>
</body>
</html>