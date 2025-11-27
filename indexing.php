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
                <div class="w-full lg:w-3/4 order-first lg:order-none indexing-content">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Indexing</h2>

                    <p><strong>Our Journals are indexed in 30 Plus databases. Major Indexing databases are as follows-</strong></p>
                    
                    <ol>
                        <li>1. Google Scholar</li>
                        <li>2. Index Copernicus</li>
                        <li>3. Chemical Abstract Service(CAS)</li>
                        <li>4. NCBI-NLM Catalog</li>
                        <li>5. World Cat</li>
                        <li>6. PubGet</li>
                        <li>7. Genomics</li>
                        <li>8. Sherepa, etc</li>
                    </ol>

                    <!-- Indexing Image -->
                    <div class="my-8 text-center">
                        <img src="assets/images/image2.png" alt="Indexing Databases" class="mx-auto max-w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>
</html>