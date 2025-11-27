<?php include 'includes/header.php'; ?>

    <section class="relative h-96 md:h-[500px] bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/images/image1.png');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative h-full flex items-center px-4 md:px-12 w-full">
            <div class="w-full max-w-6xl mx-auto">
                <!-- Text Content -->
                <div class="bg-gray-900 bg-opacity-30 rounded-xl p-8 md:p-12 backdrop-blur-sm shadow-2xl max-w-lg">
                    <p class="text-white text-sm font-semibold uppercase tracking-wide mb-3">Welcome to</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">SAS Publishers</h2>
                    <p class="text-gray-200 text-base md:text-lg mb-8 leading-relaxed">Exploring scholars to success, devoting it works in education and research</p>
                    <a href="pages/submit-manuscript.php" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-bold transition duration-300 transform hover:scale-105 flex items-center gap-2 shadow-lg inline-flex">
                        PUBLISH WITH US <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Journals Carousel Section -->
    <section class="py-12 bg-gray-100 w-screen -ml-[calc((100vw-100%)/2)]">
        <div class="px-4 md:px-12">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 section-title">Our Journals</h3>
                    <p class="text-gray-600 text-sm mt-3">Explore our diverse collection of peer-reviewed academic journals</p>
                </div>
                <a href="pages/journals.php" class="text-teal-600 hover:text-teal-700 font-semibold flex items-center gap-2 text-lg transition duration-200">View all journals <span>→</span></a>
            </div>
            
            <!-- Journal Cards Carousel -->
            <div class="flex gap-6 overflow-x-auto pb-4">
                <!-- Journal Card 1 -->
                <div class="flex-shrink-0 w-56 bg-white rounded-xl shadow-md overflow-hidden card-with-shadow">
                    <div class="relative h-64 bg-gradient-to-br from-red-400 to-red-600 flex items-end justify-start p-4">
                        <div class="absolute top-0 left-0 w-16 h-1 bg-yellow-300"></div>
                        <div class="text-white font-bold text-lg">SAJB</div>
                    </div>
                    <div class="p-4 bg-yellow-50">
                        <h4 class="font-bold text-sm text-gray-800">Scholars Journal of Agriculture and Veterinary Sciences</h4>
                        <p class="text-xs text-teal-600 mt-2">Abbreviated key title</p>
                        <img src="https://via.placeholder.com/80x80?text=SAJB" alt="Journal" class="w-full mt-3 rounded">
                    </div>
                </div>

                <!-- Journal Card 2 -->
                <div class="flex-shrink-0 w-56 bg-white rounded-xl shadow-md overflow-hidden card-with-shadow">
                    <div class="relative h-64 bg-gradient-to-br from-rose-300 to-rose-400 flex items-end justify-start p-4">
                        <div class="absolute top-0 left-0 w-16 h-1 bg-red-600"></div>
                        <div class="text-white font-bold text-lg">SJAH</div>
                    </div>
                    <div class="p-4 bg-white">
                        <h4 class="font-bold text-sm text-gray-800">Scholars Journal of Arts, Humanities and Social Sciences</h4>
                        <p class="text-xs text-teal-600 mt-2">Abbreviated key title</p>
                        <img src="https://via.placeholder.com/80x80?text=SJAH" alt="Journal" class="w-full mt-3 rounded">
                    </div>
                </div>

                <!-- Journal Card 3 -->
                <div class="flex-shrink-0 w-56 bg-white rounded-xl shadow-md overflow-hidden card-with-shadow">
                    <div class="relative h-64 bg-gradient-to-br from-rose-300 to-rose-400 flex items-end justify-start p-4">
                        <div class="absolute top-0 left-0 w-16 h-1 bg-red-600"></div>
                        <div class="text-white font-bold text-lg">SJAB</div>
                    </div>
                    <div class="p-4 bg-white">
                        <h4 class="font-bold text-sm text-gray-800">Scholars Academic Journal of Biosciences</h4>
                        <p class="text-xs text-teal-600 mt-2">Abbreviated key title</p>
                        <img src="https://via.placeholder.com/80x80?text=SJAB" alt="Journal" class="w-full mt-3 rounded">
                    </div>
                </div>

                <!-- Journal Card 4 -->
                <div class="flex-shrink-0 w-56 bg-white rounded-xl shadow-md overflow-hidden card-with-shadow">
                    <div class="relative h-64 bg-gradient-to-br from-cyan-300 to-cyan-400 flex items-end justify-start p-4">
                        <div class="absolute top-0 left-0 w-16 h-1 bg-red-700"></div>
                        <div class="text-white font-bold text-lg">SJDS</div>
                    </div>
                    <div class="p-4 bg-cyan-50">
                        <h4 class="font-bold text-sm text-gray-800">Scholars Journal of Dental Sciences</h4>
                        <p class="text-xs text-teal-600 mt-2">Abbreviated key title</p>
                        <img src="https://via.placeholder.com/80x80?text=SJDS" alt="Journal" class="w-full mt-3 rounded">
                    </div>
                </div>

                <!-- Journal Card 5 -->
                <div class="flex-shrink-0 w-56 bg-white rounded-xl shadow-md overflow-hidden card-with-shadow">
                    <div class="relative h-64 bg-gradient-to-br from-purple-400 to-purple-500 flex items-end justify-start p-4">
                        <div class="absolute top-0 left-0 w-16 h-1 bg-purple-700"></div>
                        <div class="text-white font-bold text-lg">SJEBM</div>
                    </div>
                    <div class="p-4 bg-purple-50">
                        <h4 class="font-bold text-sm text-gray-800">Scholars Journal of Economics, Business and Management</h4>
                        <p class="text-xs text-teal-600 mt-2">Abbreviated key title</p>
                        <img src="https://via.placeholder.com/80x80?text=SJEBM" alt="Journal" class="w-full mt-3 rounded">
                    </div>
                </div>

                <!-- Journal Card 6 -->
                <div class="flex-shrink-0 w-56 bg-white rounded-xl shadow-md overflow-hidden card-with-shadow">
                    <div class="relative h-64 bg-gradient-to-br from-amber-700 to-amber-800 flex items-end justify-start p-4">
                        <div class="absolute top-0 left-0 w-16 h-1 bg-amber-400"></div>
                        <div class="text-white font-bold text-lg">SJET</div>
                    </div>
                    <div class="p-4 bg-pink-50">
                        <h4 class="font-bold text-sm text-gray-800">Scholars Journal of Engineering and Technology</h4>
                        <p class="text-xs text-teal-600 mt-2">Abbreviated key title</p>
                        <img src="https://via.placeholder.com/80x80?text=SJET" alt="Journal" class="w-full mt-3 rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section with Stats -->
    <section class="py-16 bg-gray-50 w-screen -ml-[calc((100vw-100%)/2)]">
        <div class="px-4 md:px-12">
            <div class="grid md:grid-cols-3 gap-8 items-start max-w-7xl mx-auto">
                <!-- Mission & Vision Text -->
                <div class="md:col-span-1 pr-8">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Mission</h3>
                        <p class="text-gray-700 leading-relaxed">
                            To provide recent updates on the discoveries, developments and on-going activities in the areas of science and technology to the academicians, researchers and scholars seeking information, in an easy accessible manner.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Vision</h3>
                        <p class="text-gray-700 leading-relaxed">
                            To ensure the high quality of published research and review articles. SAS Publishers is committed to timely and effective publication of peer reviewed, high standard quality work. Reputable editorial members from different disciplines and specializations are dedicated to an efficient and constructive review process to maintain international research publishing standards.
                        </p>
                    </div>
                </div>

                <!-- Statistics Cards -->
                <div class="md:col-span-2">
                    <div class="grid grid-cols-2 gap-6">
                        <!-- Journals Card -->
                        <div class="bg-gradient-to-br from-red-400 to-red-600 rounded-xl p-8 text-center text-white shadow-lg card-with-shadow">
                            <div class="text-5xl mb-4">📰</div>
                            <h4 class="text-5xl font-bold mb-2">93+</h4>
                            <p class="text-lg font-semibold">Journals</p>
                        </div>

                        <!-- Memberships Card -->
                        <div class="bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl p-8 text-center text-white shadow-lg card-with-shadow">
                            <div class="text-5xl mb-4">👥</div>
                            <h4 class="text-5xl font-bold mb-2">1001+</h4>
                            <p class="text-lg font-semibold">Memberships</p>
                        </div>

                        <!-- Articles Published Card -->
                        <div class="bg-gradient-to-br from-teal-400 to-teal-600 rounded-xl p-8 text-center text-white shadow-lg card-with-shadow">
                            <div class="text-5xl mb-4">📚</div>
                            <h4 class="text-5xl font-bold mb-2">47000+</h4>
                            <p class="text-lg font-semibold">Articles Published</p>
                        </div>

                        <!-- Editors & Reviewers Card -->
                        <div class="bg-gradient-to-br from-amber-300 to-amber-500 rounded-xl p-8 text-center text-gray-800 shadow-lg card-with-shadow">
                            <div class="text-5xl mb-4">🎓</div>
                            <h4 class="text-5xl font-bold mb-2">2500+</h4>
                            <p class="text-lg font-semibold">Editors & Reviewers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recently Published Articles Section -->
    <section class="py-16 bg-white w-screen -ml-[calc((100vw-100%)/2)]">
        <div class="px-4 md:px-12">
            <div class="grid md:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- Sidebar -->
                <div class="md:col-span-1">
                    <div class="space-y-3">
                        <a href="pages/author-login.php" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
                            ↪ Author Login
                        </a>
                        <a href="pages/submit-manuscript.php" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
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
                        <a href="pages/payments.php" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
                            💳 Pay Publication Fee
                        </a>
                        <a href="pages/subscribe-hardcopy.php" class="w-full bg-white border border-gray-300 hover:bg-gray-50 px-6 py-4 rounded-lg font-semibold text-gray-800 flex items-center gap-2 transition">
                            ✓ Subscribe Hard Copy
                        </a>
                    </div>
                </div>

                <!-- Articles List -->
                <div class="md:col-span-3">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Recently Published Articles</h3>
                    
                    <div class="space-y-6">
                        <!-- Article 1 -->
                        <div class="border-b border-gray-200 pb-6">
                            <div class="flex justify-between items-start mb-2">
                                <div class="flex-1">
                                    <p class="text-gray-600 text-sm mb-2">June 26, 2026 | <span class="font-semibold">Original Research Article</span></p>
                                    <h4 class="text-lg font-bold text-gray-800 mb-3">Artificial Intelligence-Driven Cybersecurity Framework Using Machine Learning for Advanced Threat Detection and Prevention</h4>
                                    <p class="text-gray-600 text-sm mb-2">👤 <span class="italic">Anum Malik, Kaleem Arshid, Nooruddin Noonari, Rizwan Munir</span></p>
                                    <p class="text-gray-600 text-sm mb-1">📚 Sch J Eng Tech | 401-423</p>
                                    <p class="text-gray-600 text-sm">📄 DOI : https://doi.org/10.36347/sjet.2025.v13i06.005</p>
                                </div>
                                <div class="text-right ml-4">
                                    <p class="text-gray-600 text-sm mb-2">👁 <span class="font-semibold">1721</span></p>
                                    <p class="text-gray-600 text-sm">⬇ <span class="font-semibold">2474</span></p>
                                    <a href="#" class="text-teal-600 hover:text-teal-700 font-semibold text-sm mt-2 inline-block">View Article →</a>
                                </div>
                            </div>
                            <div class="flex gap-3 mt-4">
                                <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white font-bold">PDF</div>
                                <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xs">TXT</div>
                                <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-xs">EPUB</div>
                            </div>
                        </div>

                        <!-- Article 2 -->
                        <div class="border-b border-gray-200 pb-6">
                            <div class="flex justify-between items-start mb-2">
                                <div class="flex-1">
                                    <p class="text-gray-600 text-sm mb-2">Nov. 18, 2025 | <span class="font-semibold">Original Research Article</span></p>
                                    <h4 class="text-lg font-bold text-gray-800 mb-3">Adaptation and Growth Performance Evaluation of Lowland Bamboo Species at Odo Shakiso District of Guji Zone Southern Ethiopia</h4>
                                    <p class="text-gray-600 text-sm mb-2">👤 <span class="italic">Temesgen Giri, Sintayo Demise, Aschalew Emire</span></p>
                                    <p class="text-gray-600 text-sm mb-1">📚 Sch J Agric Vet Sci | 300-304</p>
                                    <p class="text-gray-600 text-sm">📄 DOI : https://doi.org/10.36347/sjavs.2025.v12i11.002</p>
                                </div>
                                <div class="text-right ml-4">
                                    <p class="text-gray-600 text-sm mb-2">👁 <span class="font-semibold">13</span></p>
                                    <p class="text-gray-600 text-sm">⬇ <span class="font-semibold">8</span></p>
                                    <a href="#" class="text-teal-600 hover:text-teal-700 font-semibold text-sm mt-2 inline-block">View Article →</a>
                                </div>
                            </div>
                            <div class="flex gap-3 mt-4">
                                <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white font-bold">PDF</div>
                                <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xs">TXT</div>
                                <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-xs">EPUB</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
