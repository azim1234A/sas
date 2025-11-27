<?php include 'includes/header.php'; ?>

    <section class="bg-gradient-to-r from-purple-600 to-purple-900 text-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-purple-100">Get in touch with our team</p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Phone Card 1 -->
                <div class="text-center p-8 bg-gradient-to-br from-purple-50 to-blue-50 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="text-5xl mb-4">📞</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Call Us</h3>
                    <p class="text-gray-600 mb-2">Phone 1</p>
                    <p class="text-lg font-semibold text-purple-600 mb-4">+91-9365665504</p>
                    <p class="text-gray-600 mb-2">Phone 2</p>
                    <p class="text-lg font-semibold text-purple-600">+91-8724002629</p>
                </div>

                <!-- Email Card -->
                <div class="text-center p-8 bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="text-5xl mb-4">✉️</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Email Us</h3>
                    <p class="text-gray-600 mb-2">Submissions</p>
                    <p class="text-lg font-semibold text-purple-600 mb-4 break-all">submit@saspublishers.com</p>
                    <p class="text-gray-600 mb-2">General Inquiries</p>
                    <p class="text-lg font-semibold text-purple-600 break-all">saspjournals@gmail.com</p>
                </div>

                <!-- Support Card -->
                <div class="text-center p-8 bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="text-5xl mb-4">🌐</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Online Support</h3>
                    <p class="text-gray-700 mb-4">Available 24/7 for your queries and support needs</p>
                    <button class="bg-gradient-to-r from-purple-600 to-purple-700 text-white px-6 py-2 rounded-lg font-semibold hover:shadow-lg transition w-full">
                        Contact Support
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-gray-800 mb-12 text-center">Send Us a Message</h2>
            
            <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
                <form onsubmit="handleSubmit(event)">
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Full Name *</label>
                            <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Your Name">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email Address *</label>
                            <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="your@email.com">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                            <input type="tel" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="+91-XXXXXXXXXX">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Subject *</label>
                            <select required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                                <option value="">Select a subject</option>
                                <option value="manuscript">Manuscript Submission</option>
                                <option value="membership">Membership Inquiry</option>
                                <option value="publication">Publication Information</option>
                                <option value="editor">Editor Application</option>
                                <option value="reviewer">Reviewer Application</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Message *</label>
                        <textarea required rows="6" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Your message here..."></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" required class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-2 focus:ring-purple-600">
                            <span class="ml-2 text-gray-700">I agree to the privacy policy and terms of service</span>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-purple-700 text-white py-3 rounded-lg font-bold hover:shadow-lg transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-gray-800 mb-12 text-center">Frequently Asked Questions</h2>
            
            <div class="max-w-3xl mx-auto space-y-4">
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                    <h4 class="text-lg font-bold text-gray-800 mb-3 cursor-pointer flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span>How do I submit a manuscript?</span>
                        <span class="text-purple-600">+</span>
                    </h4>
                    <p class="text-gray-600 hidden">You can submit your manuscript through our online submission portal at submit@saspublishers.com. Please ensure your manuscript follows our submission guidelines and formatting requirements.</p>
                </div>

                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                    <h4 class="text-lg font-bold text-gray-800 mb-3 cursor-pointer flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span>What are the membership benefits?</span>
                        <span class="text-purple-600">+</span>
                    </h4>
                    <p class="text-gray-600 hidden">Members enjoy publication fee waivers, fast track publication, networking opportunities, and exclusive access to conferences and events organized by SAS Publishers.</p>
                </div>

                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                    <h4 class="text-lg font-bold text-gray-800 mb-3 cursor-pointer flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span>How long does the review process take?</span>
                        <span class="text-purple-600">+</span>
                    </h4>
                    <p class="text-gray-600 hidden">The typical review process takes 4-8 weeks. However, membership holders can opt for fast-track publication, which reduces this time to 2-3 weeks.</p>
                </div>

                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                    <h4 class="text-lg font-bold text-gray-800 mb-3 cursor-pointer flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span>Can I apply to be an editor or reviewer?</span>
                        <span class="text-purple-600">+</span>
                    </h4>
                    <p class="text-gray-600 hidden">Yes! We are always looking for experienced academics and researchers to join our editorial teams. You can apply through our "Join as Editor" or "Join as Reviewer" options on our website.</p>
                </div>

                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                    <h4 class="text-lg font-bold text-gray-800 mb-3 cursor-pointer flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span>Do you offer international shipping for hard copies?</span>
                        <span class="text-purple-600">+</span>
                    </h4>
                    <p class="text-gray-600 hidden">Yes, we offer worldwide shipping for hard copies of our journals. Shipping costs and delivery times vary by location. Contact us for more details.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Hours Section -->
    <section class="py-16 bg-gradient-to-r from-purple-50 to-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-gray-800 mb-12 text-center">Office Hours</h2>
            
            <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
                <div class="space-y-4">
                    <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                        <span class="font-semibold text-gray-700">Monday - Friday</span>
                        <span class="text-gray-600">9:00 AM - 6:00 PM IST</span>
                    </div>
                    <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                        <span class="font-semibold text-gray-700">Saturday</span>
                        <span class="text-gray-600">10:00 AM - 4:00 PM IST</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold text-gray-700">Sunday</span>
                        <span class="text-gray-600">Closed</span>
                    </div>
                </div>
                <p class="text-gray-600 mt-6 text-sm">For urgent matters, please contact our support team at +91-9365665504 or submit your query via email.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="text-white font-bold mb-4">About SAS</h4>
                    <p class="text-sm">International publisher of academic and scientific journals with a mission to advance research globally.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="../index.html" class="hover:text-white transition">Home</a></li>
                        <li><a href="about-us.html" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Journals</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Contact</h4>
                    <p class="text-sm">📧 submit@saspublishers.com</p>
                    <p class="text-sm">📞 +91-9365665504</p>
                    <p class="text-sm">📞 +91-8724002629</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="#" class="hover:text-white transition">Facebook</a>
                        <a href="#" class="hover:text-white transition">Twitter</a>
                        <a href="#" class="hover:text-white transition">LinkedIn</a>
                    </div>
                </div>
            </div>

            <hr class="border-gray-700 mb-8">

            <div class="text-center text-sm">
                <p class="mb-2">This work is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.</p>
                <p>Copyright © 2025 SAS Publishers. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="../assets/js/script.js"></script>
</body>
</html>
