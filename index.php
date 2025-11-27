<?php 
require_once 'includes/db_config.php';

// Get active journals for carousel
$stmt = $pdo->prepare("SELECT * FROM journals WHERE status = 'active' ORDER BY sort_order ASC, created_at ASC LIMIT 6");
$stmt->execute();
$journals = $stmt->fetchAll();

// Get recent published articles
$stmt = $pdo->prepare("SELECT a.*, j.title as journal_title, j.abbreviation as journal_abbr FROM articles a JOIN journals j ON a.journal_id = j.id WHERE a.status = 'published' ORDER BY a.publication_date DESC LIMIT 3");
$stmt->execute();
$recentArticles = $stmt->fetchAll();

// Get website statistics
$totalJournals = getSetting('total_journals', '93');
$totalMemberships = getSetting('total_memberships', '1001');
$totalArticles = getSetting('total_articles', '47000');
$totalEditors = getSetting('total_editors', '2500');

include 'includes/header.php'; ?>

    <section class="relative h-96 md:h-[500px] bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/images/image1.png');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative h-full flex items-center px-4 md:px-12 w-full">
            <div class="w-full max-w-6xl mx-auto">
                <!-- Text Content -->
                <div class="bg-gray-900 bg-opacity-30 rounded-xl p-8 md:p-12 backdrop-blur-sm shadow-2xl max-w-lg">
                    <p class="text-white text-sm font-semibold uppercase tracking-wide mb-3">Welcome to</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">SAS Publishers</h2>
                    <p class="text-gray-200 text-base md:text-lg mb-8 leading-relaxed">Exploring scholars to success, devoting it works in education and research</p>
                    <a href="submit-manuscript.php" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-bold transition duration-300 transform hover:scale-105 flex items-center gap-2 shadow-lg inline-flex">
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
                <a href="journals.php" class="text-teal-600 hover:text-teal-700 font-semibold flex items-center gap-2 text-lg transition duration-200">View all journals <span>→</span></a>
            </div>
            
            <!-- Journal Cards Carousel -->
            <div class="flex gap-6 overflow-x-auto pb-4">
                <?php foreach ($journals as $journal): ?>
                    <div class="flex-shrink-0 w-56 bg-white rounded-xl shadow-md overflow-hidden card-with-shadow">
                        <div class="relative h-64 bg-gradient-to-br flex items-end justify-start p-4" 
                             style="background: linear-gradient(135deg, <?= $journal['background_color'] ?>, <?= $journal['background_color'] ?>DD);">
                            <div class="absolute top-0 left-0 w-16 h-1" style="background-color: <?= $journal['accent_color'] ?>;"></div>
                            <div class="text-white font-bold text-lg"><?= htmlspecialchars($journal['abbreviation']) ?></div>
                        </div>
                        <div class="p-4" style="background-color: <?= $journal['accent_color'] ?>22;">
                            <h4 class="font-bold text-sm text-gray-800"><?= htmlspecialchars($journal['title']) ?></h4>
                            <p class="text-xs text-teal-600 mt-2"><?= htmlspecialchars($journal['short_title']) ?></p>
                            <div class="w-full h-16 mt-3 rounded bg-gray-100 flex items-center justify-center text-gray-500">
                                <i class="fas fa-book text-2xl"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
                            <h4 class="text-5xl font-bold mb-2"><?= $totalJournals ?>+</h4>
                            <p class="text-lg font-semibold">Journals</p>
                        </div>

                        <!-- Memberships Card -->
                        <div class="bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl p-8 text-center text-white shadow-lg card-with-shadow">
                            <div class="text-5xl mb-4">👥</div>
                            <h4 class="text-5xl font-bold mb-2"><?= $totalMemberships ?>+</h4>
                            <p class="text-lg font-semibold">Memberships</p>
                        </div>

                        <!-- Articles Published Card -->
                        <div class="bg-gradient-to-br from-teal-400 to-teal-600 rounded-xl p-8 text-center text-white shadow-lg card-with-shadow">
                            <div class="text-5xl mb-4">📚</div>
                            <h4 class="text-5xl font-bold mb-2"><?= $totalArticles ?>+</h4>
                            <p class="text-lg font-semibold">Articles Published</p>
                        </div>

                        <!-- Editors & Reviewers Card -->
                        <div class="bg-gradient-to-br from-amber-300 to-amber-500 rounded-xl p-8 text-center text-gray-800 shadow-lg card-with-shadow">
                            <div class="text-5xl mb-4">🎓</div>
                            <h4 class="text-5xl font-bold mb-2"><?= $totalEditors ?>+</h4>
                            <p class="text-lg font-semibold">Editors & Reviewers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recently Published Articles Section with Sidebar -->
    <section class="py-16 bg-white w-screen -ml-[calc((100vw-100%)/2)]">
        <div class="px-4 md:px-12">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Sidebar - Left Column -->
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

                    <!-- Main Content - Right Column -->
                    <div class="w-full lg:w-3/4 order-first lg:order-last">
                        <h3 class="text-3xl font-bold text-gray-800 mb-8">Recently Published Articles</h3>
                        
                        <div class="space-y-8">
                            <?php foreach ($recentArticles as $article): ?>
                                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition">
                                    <div class="flex justify-between items-start mb-4">
                                        <div class="flex-1">
                                            <p class="text-gray-600 text-sm mb-2">
                                                <?= $article['publication_date'] ? date('M d, Y', strtotime($article['publication_date'])) : 'No date' ?> | 
                                                <span class="font-semibold"><?= htmlspecialchars($article['article_type']) ?></span>
                                            </p>
                                            <h4 class="text-xl font-bold text-gray-800 mb-3 leading-tight"><?= htmlspecialchars($article['title']) ?></h4>
                                            <p class="text-gray-600 text-sm mb-2 flex items-center gap-1">
                                                <span class="text-gray-400">👤</span> 
                                                <span class="italic"><?= htmlspecialchars($article['authors']) ?></span>
                                            </p>
                                            <p class="text-gray-600 text-sm mb-1 flex items-center gap-1">
                                                <span class="text-gray-400">📚</span> 
                                                <?= htmlspecialchars($article['journal_abbr']) ?> 
                                                <?php if ($article['pages']): ?>| <?= htmlspecialchars($article['pages']) ?><?php endif; ?>
                                            </p>
                                            <?php if ($article['doi']): ?>
                                                <p class="text-gray-600 text-sm flex items-center gap-1">
                                                    <span class="text-gray-400">📄</span> DOI : <?= htmlspecialchars($article['doi']) ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="text-right ml-6 flex flex-col items-end">
                                            <div class="flex items-center gap-4 mb-2">
                                                <div class="flex items-center gap-1">
                                                    <span class="text-gray-400">👁</span>
                                                    <span class="font-semibold text-gray-800"><?= $article['views'] ?></span>
                                                </div>
                                                <div class="flex items-center gap-1">
                                                    <span class="text-gray-400">⬇</span>
                                                    <span class="font-semibold text-gray-800"><?= $article['downloads'] ?></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-teal-600 hover:text-teal-700 font-semibold text-sm inline-flex items-center gap-1">
                                                View Article <span>→</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex gap-3 mt-4">
                                        <?php if ($article['pdf_file']): ?>
                                            <a href="uploads/<?= $article['pdf_file'] ?>" target="_blank" class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white font-bold text-xs hover:bg-red-700 transition">PDF</a>
                                        <?php else: ?>
                                            <div class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center text-white font-bold text-xs">PDF</div>
                                        <?php endif; ?>
                                        <div class="w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xs">TXT</div>
                                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-xs">EPUB</div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <!-- View More Articles Button -->
                            <div class="text-center pt-6">
                                <a href="journals.php" class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300 inline-flex items-center gap-2">
                                    View More Articles <span>→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?> 
    <script src="assets/js/script.js"></script>
</body>
</html>
