<?php include 'includes/header.php'; ?>

    <!-- Page Content -->
    <section class="py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar -->
                <div class="w-full lg:w-1/4">
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm sticky top-24">
                        <div class="p-4 space-y-3">
                            <a href="author-login.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg border border-gray-200 transition-all duration-200 font-medium text-sm">
                                <span>👤</span> Author Login
                            </a>
                            <a href="submit-manuscript.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg border border-gray-200 transition-all duration-200 font-medium text-sm">
                                <span>📋</span> Submit Manuscript
                            </a>
                            <a href="https://www.sassociety.com/join-sas-society/" target="_blank" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg border border-gray-200 transition-all duration-200 font-medium text-sm">
                                <span>👥</span> Join Membership
                            </a>
                            <a href="https://www.sassociety.com/join-reviewer/" target="_blank" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg border border-gray-200 transition-all duration-200 font-medium text-sm">
                                <span>↪</span> Join As Reviewer
                            </a>
                            <a href="https://www.sassociety.com/join-editor/" target="_blank" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg border border-gray-200 transition-all duration-200 font-medium text-sm">
                                <span>↪</span> Join As Editor
                            </a>
                            <a href="payments.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg border border-gray-200 transition-all duration-200 font-medium text-sm">
                                <span>💳</span> Pay Publication Fee
                            </a>
                            <a href="subscribe-hardcopy.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg border border-gray-200 transition-all duration-200 font-medium text-sm">
                                <span>✓</span> Subscribe Hard Copy
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="w-full lg:w-3/4">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                        <h1 class="text-3xl font-bold text-gray-900 mb-8">Review Process</h1>
                        
                        <!-- Publication Process Flowchart -->
                        <div class="mb-8">
                            <div class="text-center mb-6">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">PUBLICATION PROCESS</h2>
                                <div class="flex justify-center">
                                    <img src="assets/images/img5.png" alt="Publication Process Flowchart" class="max-w-full h-auto rounded-lg shadow-md">
                                </div>
                            </div>
                        </div>

                        <!-- Peer Review Section -->
                        <div class="mb-8 pb-6 border-b border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">SAS Publishers Peer Review Process</h3>
                            <p class="text-gray-700">SAS Publishers adheres to a <span class="font-semibold text-blue-600">double-blind peer review</span> process to maintain the highest standards of academic integrity and quality. In this process, the identities of both the authors and the editors remain confidential to ensure impartiality and fairness in manuscript evaluation.</p>
                        </div>

                        <!-- Review Content -->
                        <div class="space-y-6 text-gray-700">
                            <p>The peer review process is a cornerstone of scientific publishing, aimed at validating the research and enhancing the quality of the submitted work. Manuscripts are reviewed by expert peer reviewers who generously volunteer their time and expertise to provide constructive feedback and guidance—offering authors valuable insights at no cost.</p>

                            <p>Authors are encouraged to prepare and submit their manuscripts in accordance with the <strong>Author Guidelines</strong> available at <a href="https://saspublishers.com/author-instructions" class="text-blue-600 hover:text-blue-800 underline">https://saspublishers.com/author-instructions</a> to facilitate a smooth and timely review process.</p>

                            <p>The typical review timeline ranges from <span class="font-semibold text-orange-600">20 to 25 days</span>, though it may vary depending on factors such as manuscript length, clarity, research design, data quality, and accuracy of references. In cases where revisions are required, the revised manuscript may undergo an additional round of review, potentially extending the overall evaluation period.</p>

                            <p>All submitted manuscripts undergo plagiarism screening using <strong>PlagScan</strong>. The final publication decision is made by the editorial team, taking into account the reviewers' comments and suggestions.</p>

                            <div class="mt-8 p-6 bg-blue-50 border-l-4 border-blue-500 rounded-r-lg">
                                <h4 class="font-semibold text-blue-900 mb-3">Review Timeline Overview:</h4>
                                <ul class="text-blue-800 text-sm space-y-2">
                                    <li><strong>Initial Submission:</strong> <span class="font-semibold">1 Day</span> - Manuscript submission and initial processing</li>
                                    <li><strong>Review Process:</strong> <span class="font-semibold">7-10 Days</span> - Comprehensive peer review evaluation</li>
                                    <li><strong>Review Reports:</strong> <span class="font-semibold">2 Days</span> - Compilation and analysis of reviewer feedback</li>
                                    <li><strong>Editorial Decision:</strong> <span class="font-semibold">2-3 Days</span> - Final editorial decision and author notification</li>
                                    <li><strong>Payment & Publication:</strong> Upon acceptance and fee processing</li>
                                </ul>
                            </div>

                            <div class="mt-8 p-6 bg-green-50 border-l-4 border-green-500 rounded-r-lg">
                                <h4 class="font-semibold text-green-900 mb-3">Key Features of Our Review Process:</h4>
                                <ul class="text-green-800 text-sm space-y-2">
                                    <li>✓ <strong>Double-blind peer review</strong> ensuring unbiased evaluation</li>
                                    <li>✓ <strong>Expert reviewers</strong> with relevant field expertise</li>
                                    <li>✓ <strong>Constructive feedback</strong> to improve manuscript quality</li>
                                    <li>✓ <strong>Plagiarism detection</strong> using advanced screening tools</li>
                                    <li>✓ <strong>Transparent timeline</strong> with regular status updates</li>
                                    <li>✓ <strong>Quality assurance</strong> at every stage of the process</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>