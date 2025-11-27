<?php 
require_once 'includes/db_config.php';

// Get all active journals
try {
    $sql = "SELECT * FROM journals WHERE status = 'active' ORDER BY sort_order ASC, created_at DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $journals = $stmt->fetchAll();
} catch (PDOException $e) {
    $journals = [];
}

include 'includes/header.php'; 
?>

    <!-- Page Content -->
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Our Journals</h1>
            
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar - Appears Last on Mobile, First on Desktop -->
                <div class="w-full lg:w-1/4 order-last lg:order-first">
                    <div class="bg-white border border-gray-300 rounded-lg shadow-md">
                        <div class="divide-y">
                            <a href="author-login.php" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">🔑</span> Author Login
                            </a>
                            <a href="submit-manuscript.php" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">📝</span> Submit Manuscript
                            </a>
                            <a href="https://www.sassociety.com/join-sas-society/" target="_blank" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">👥</span> Join Membership
                            </a>
                            <a href="https://www.sassociety.com/join-reviewer/" target="_blank" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">✓</span> Join As Reviewer
                            </a>
                            <a href="https://www.sassociety.com/join-editor/" target="_blank" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">📊</span> Join As Editor
                            </a>
                            <a href="payments.php" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm">
                                <span class="text-lg">💰</span> Pay Publication Fee
                            </a>
                            <a href="subscribe-hardcopy.php" class="block px-6 py-4 text-gray-800 hover:bg-gray-100 transition flex items-center gap-3 font-semibold text-sm rounded-b-lg">
                                <span class="text-lg">📚</span> Subscribe Hard Copy
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Journal Grid - Appears First on Mobile, Last on Desktop -->
                <div class="w-full lg:w-3/4 order-first lg:order-last">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                        <?php foreach ($journals as $journal): ?>
                        <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer flex flex-col items-center p-4 group">
                            <div class="relative w-full h-56 flex flex-col items-center justify-center bg-gradient-to-br from-teal-100 to-white rounded-t-xl mb-4">
                                <div class="absolute left-0 top-0 w-8 h-full bg-orange-600 rounded-l-xl"></div>
                                <img src="<?php echo !empty($journal['cover_image']) ? htmlspecialchars($journal['cover_image']) : 'https://via.placeholder.com/180x180?text=Journal'; ?>" alt="Journal Cover" class="w-32 h-32 object-cover rounded-lg mx-auto border-4 border-white shadow-lg mb-2 group-hover:scale-105 transition" />
                                <div class="absolute bottom-2 left-1/2 -translate-x-1/2">
                                    <img src="/assets/images/sas-logo.png" alt="SAS Publishers" class="h-6 mx-auto" style="max-width:80px;" />
                                </div>
                            </div>
                            <div class="w-full flex flex-col items-center">
                                <h3 class="font-bold text-lg text-gray-800 text-center mb-1 line-clamp-2" title="<?php echo htmlspecialchars($journal['title']); ?>"><?php echo htmlspecialchars($journal['title']); ?></h3>
                                <div class="text-xs text-blue-600 font-bold mb-1 text-center"><?php echo htmlspecialchars($journal['abbreviation'] ?? ''); ?></div>
                                <div class="text-xs font-bold text-gray-700 mb-1 text-center">
                                    <?php if (!empty($journal['issn'])): ?>
                                        ISSN: <?php echo htmlspecialchars($journal['issn']); ?>
                                    <?php else: ?>
                                        <span class="text-red-500">No ISSN</span>
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($journal['impact_factor'])): ?>
                                    <div class="text-xs font-bold text-teal-700 mb-1">Impact Factor: <?php echo htmlspecialchars($journal['impact_factor']); ?></div>
                                <?php endif; ?>
                                <div class="text-xs text-gray-600 text-center mt-2 line-clamp-2" title="<?php echo htmlspecialchars($journal['description'] ?? $journal['title']); ?>">
                                    <?php echo htmlspecialchars($journal['description'] ?? $journal['title']); ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <!-- Journal 2 - Arts & Humanities -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition cursor-pointer group">
                            <div class="relative bg-gradient-to-b from-pink-300 to-pink-50 h-80 flex flex-col">
                                <div class="absolute left-0 top-0 w-6 h-full bg-pink-600"></div>
                                <div class="flex-1 flex items-center justify-center p-4">
                                    <div class="text-center">
                                        <div class="text-xs font-bold text-gray-700 mb-2">ISSN: 2347-9035 (Print)<br/>ISSN: 2347-9035 (Online)</div>
                                        <div class="text-xs text-blue-600 font-bold mb-3">Scholars Journal of</div>
                                        <svg class="w-32 h-32 mx-auto text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
                                        </svg>
                                        <div class="text-xs text-gray-700 font-bold mt-3">Arts, Humanities and Social Sciences</div>
                                    </div>
                                </div>
                                <div class="px-4 py-2 text-center border-t border-gray-300">
                                    <img src="https://via.placeholder.com/80x30?text=Logo" alt="Publishers" class="h-6 mx-auto">
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-center">
                                    <p class="text-sm font-bold text-gray-600 mb-2">Impact Factor: 4.6</p>
                                    <p class="text-xs text-gray-700">Scholars Journal of Arts, Humanities and Social Sciences</p>
                                </div>
                            </div>
                        </div>

                        <!-- Journal 3 - Biosciences -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition cursor-pointer group">
                            <div class="relative bg-gradient-to-b from-blue-100 to-white h-80 flex flex-col">
                                <div class="absolute left-0 top-0 w-6 h-full bg-blue-700"></div>
                                <div class="flex-1 flex items-center justify-center p-4">
                                    <div class="text-center">
                                        <div class="text-xs font-bold text-gray-700 mb-2">ISSN: 2348-8883 (Print)<br/>ISSN: 2348-8883 (Online)</div>
                                        <div class="text-xs text-blue-600 font-bold mb-3">Scholars Academic</div>
                                        <div class="grid grid-cols-3 gap-2 w-32 h-32 mx-auto">
                                            <div class="bg-gradient-to-br from-purple-400 to-purple-600 rounded"></div>
                                            <div class="bg-gradient-to-br from-pink-400 to-pink-600 rounded"></div>
                                            <div class="bg-gradient-to-br from-green-400 to-green-600 rounded"></div>
                                            <div class="bg-gradient-to-br from-yellow-400 to-yellow-600 rounded"></div>
                                            <div class="bg-gradient-to-br from-blue-400 to-blue-600 rounded"></div>
                                            <div class="bg-gradient-to-br from-red-400 to-red-600 rounded"></div>
                                        </div>
                                        <div class="text-xs text-gray-700 font-bold mt-3">Journal of Biosciences</div>
                                    </div>
                                </div>
                                <div class="px-4 py-2 text-center border-t border-gray-300">
                                    <img src="https://via.placeholder.com/80x30?text=Logo" alt="Publishers" class="h-6 mx-auto">
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-center">
                                    <p class="text-sm font-bold text-gray-600 mb-2">Impact Factor: 9.8 (ICV = 79.17)</p>
                                    <p class="text-xs text-gray-700">Scholars Academic Journal of Biosciences</p>
                                </div>
                            </div>
                        </div>

                        <!-- Journal 4 - Dental Sciences -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition cursor-pointer group">
                            <div class="relative bg-gradient-to-b from-cyan-200 to-cyan-50 h-80 flex flex-col">
                                <div class="absolute left-0 top-0 w-6 h-full bg-red-700"></div>
                                <div class="flex-1 flex items-center justify-center p-4">
                                    <div class="text-center">
                                        <div class="text-xs font-bold text-gray-700 mb-2">ISSN: 2347-3657 (Print)<br/>ISSN: 2347-3657 (Online)</div>
                                        <div class="text-xs text-blue-600 font-bold mb-3">Scholars Journal of</div>
                                        <img src="https://via.placeholder.com/120x120?text=Dental" alt="Dental" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-white shadow-md">
                                        <div class="text-xs text-gray-700 font-bold mt-3">Dental Sciences</div>
                                    </div>
                                </div>
                                <div class="px-4 py-2 text-center border-t border-gray-300">
                                    <img src="https://via.placeholder.com/80x30?text=Logo" alt="Publishers" class="h-6 mx-auto">
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-center">
                                    <p class="text-sm font-bold text-gray-600 mb-2">Impact Factor: 4.3</p>
                                    <p class="text-xs text-gray-700">Scholars Journal of Dental Sciences</p>
                                </div>
                            </div>
                        </div>

                        <!-- Journal 5 - Economics & Management -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition cursor-pointer group">
                            <div class="relative bg-gradient-to-b from-purple-300 to-purple-50 h-80 flex flex-col">
                                <div class="absolute left-0 top-0 w-6 h-full bg-blue-800"></div>
                                <div class="flex-1 flex items-center justify-center p-4">
                                    <div class="text-center">
                                        <div class="text-xs font-bold text-gray-700 mb-2">ISSN: 2348-8352 (Print)<br/>ISSN: 2348-8352 (Online)</div>
                                        <div class="text-xs text-blue-600 font-bold mb-3">Scholars Journal of</div>
                                        <div class="w-32 h-32 mx-auto flex items-center justify-center">
                                            <svg class="w-24 h-24 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
                                            </svg>
                                        </div>
                                        <div class="text-xs text-gray-700 font-bold mt-3">Economics,Business and Management</div>
                                    </div>
                                </div>
                                <div class="px-4 py-2 text-center border-t border-gray-300">
                                    <img src="https://via.placeholder.com/80x30?text=Logo" alt="Publishers" class="h-6 mx-auto">
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-center">
                                    <p class="text-sm font-bold text-gray-600 mb-2">Impact Factor: 6.8</p>
                                    <p class="text-xs text-gray-700">Scholars Journal of Economics, Business and Management</p>
                                </div>
                            </div>
                        </div>

                        <!-- Journal 6 - Engineering & Technology -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition cursor-pointer group">
                            <div class="relative bg-gradient-to-b from-yellow-200 to-yellow-50 h-80 flex flex-col">
                                <div class="absolute left-0 top-0 w-6 h-full bg-yellow-700"></div>
                                <div class="flex-1 flex items-center justify-center p-4">
                                    <div class="text-center">
                                        <div class="text-xs font-bold text-gray-700 mb-2">ISSN: 2348-8352 (Print)<br/>ISSN: 2348-8352 (Online)</div>
                                        <div class="text-xs text-blue-600 font-bold mb-3">Scholars Journal of</div>
                                        <img src="https://via.placeholder.com/120x120?text=Technology" alt="Technology" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-white shadow-md">
                                        <div class="text-xs text-gray-700 font-bold mt-3">Engineering and Technology</div>
                                    </div>
                                </div>
                                <div class="px-4 py-2 text-center border-t border-gray-300">
                                    <img src="https://via.placeholder.com/80x30?text=Logo" alt="Publishers" class="h-6 mx-auto">
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-center">
                                    <p class="text-sm font-bold text-gray-600 mb-2">Impact Factor: 8.2</p>
                                    <p class="text-xs text-gray-700">Scholars Journal of Engineering and Technology</p>
                                </div>
                            </div>
                        </div>

                        <!-- Journal 7 - Cross-Currents -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition cursor-pointer group">
                            <div class="relative bg-gradient-to-b from-blue-900 to-blue-100 h-80 flex flex-col">
                                <div class="absolute left-0 top-0 w-6 h-full bg-blue-900"></div>
                                <div class="flex-1 flex items-center justify-center p-4">
                                    <div class="text-center">
                                        <div class="text-xs font-bold text-gray-700 mb-2">ISSN: 2348-8883 (Print)<br/>ISSN: 2348-8883 (Online)</div>
                                        <div class="text-xs text-orange-600 font-bold mb-3">Cross-Currents: An International</div>
                                        <div class="w-32 h-32 mx-auto flex items-center justify-center">
                                            <div class="text-5xl text-purple-400">✋</div>
                                        </div>
                                        <div class="text-xs text-gray-700 font-bold mt-3">Peer-Reviewed Journal on Humanities & Social Sciences</div>
                                    </div>
                                </div>
                                <div class="px-4 py-2 text-center border-t border-gray-300">
                                    <img src="https://via.placeholder.com/80x30?text=Logo" alt="Publishers" class="h-6 mx-auto">
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-center">
                                    <p class="text-sm font-bold text-gray-600 mb-2">Impact Factor: 6.1</p>
                                    <p class="text-xs text-gray-700">Cross-Currents: An International Peer-Reviewed Journal</p>
                                </div>
                            </div>
                        </div>

                        <!-- Journal 8 - Applied Medical Sciences -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition cursor-pointer group">
                            <div class="relative bg-gradient-to-b from-green-300 to-green-50 h-80 flex flex-col">
                                <div class="absolute left-0 top-0 w-6 h-full bg-green-600"></div>
                                <div class="flex-1 flex items-center justify-center p-4">
                                    <div class="text-center">
                                        <div class="text-xs font-bold text-gray-700 mb-2">ISSN: 2347-6532 (Print)<br/>ISSN: 2347-6532 (Online)</div>
                                        <div class="text-xs text-blue-600 font-bold mb-3">Scholars Journal of</div>
                                        <img src="https://via.placeholder.com/120x120?text=Medical" alt="Medical" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-white shadow-md">
                                        <div class="text-xs text-gray-700 font-bold mt-3">Applied Medical Sciences</div>
                                    </div>
                                </div>
                                <div class="px-4 py-2 text-center border-t border-gray-300">
                                    <img src="https://via.placeholder.com/80x30?text=Logo" alt="Publishers" class="h-6 mx-auto">
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-center">
                                    <p class="text-sm font-bold text-gray-600 mb-2">Impact Factor: 7.5</p>
                                    <p class="text-xs text-gray-700">Scholars Journal of Applied Medical Sciences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Browse Subjects Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Browse subjects</h2>
            
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Row 1 -->
                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Agriculture and Veterinary</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Scholars Journal of Agriculture and Veterinary Sciences</a>
                    </div>
                </div>

                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Arts, Humanities and Social Sciences</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Scholars Journal of Arts, Humanities and Social Sciences</a>
                    </div>
                </div>

                <!-- Row 2 -->
                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Biological Science</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Scholars Academic Journal of Biosciences</a>
                    </div>
                </div>

                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Dentistry</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Scholars Journal of Dental Sciences</a>
                    </div>
                </div>

                <!-- Row 3 -->
                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Economics, Business and Management</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Scholars Journal of Economics, Business and Management</a>
                    </div>
                </div>

                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Engineering and Technology</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Scholars Journal of Engineering and Technology</a>
                    </div>
                </div>

                <!-- Row 4 -->
                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Humanities & Social Sciences</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Cross-Currents: An International Peer-Reviewed Journal on Humanities & Social Sciences</a>
                    </div>
                </div>

                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Medical Sciences</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <div class="space-y-2">
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm block">Scholars Journal of Applied Medical Sciences</a>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm block">Scholars Journal of Medical Case Reports</a>
                        </div>
                    </div>
                </div>

                <!-- Row 5 -->
                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Medicine</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Ghana Alternative Medicine Journal SAS Journal of Medicine</a>
                    </div>
                </div>

                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Microbiology & Biotechnology</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Journal of Microbial Impact</a>
                    </div>
                </div>

                <!-- Row 6 -->
                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Pharmaceutical Science</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Scholars Academic Journal of Pharmacy</a>
                    </div>
                </div>

                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Physics, Mathematics and Statistics</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Scholars Journal of Physics, Mathematics and Statistics</a>
                    </div>
                </div>

                <!-- Row 7 -->
                <div>
                    <div class="bg-blue-900 text-white px-6 py-4 rounded-t-lg font-semibold text-lg">Surgery</div>
                    <div class="bg-white border border-gray-200 rounded-b-lg px-6 py-4 border-t-0">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">SAS Journal of Surgery</a>
                    </div>
                </div>
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
                        <li><a href="contact-us.html" class="hover:text-white transition">Contact Us</a></li>
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
