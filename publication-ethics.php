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
                        <h1 class="text-3xl font-bold text-gray-900 mb-8">Publication Ethics</h1>
                        
                        <!-- COPE Section with Logo -->
                        <div class="bg-gray-50 p-8 rounded-lg mb-8">
                            <div class="flex items-center justify-center mb-6">
                                <img src="assets/images/image4.png" alt="COPE - Committee on Publication Ethics" class="max-w-full h-auto">
                            </div>
                            <div class="text-center">
                                <h2 class="text-2xl font-bold text-yellow-600 mb-2">Creating a culture of publication</h2>
                                <h2 class="text-2xl font-bold text-yellow-600">integrity together</h2>
                            </div>
                        </div>

                        <!-- Ethics Points -->
                        <div class="mb-8">
                            <ul class="space-y-4 text-gray-700">
                                <li class="flex items-start gap-3">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span><strong>SAS Journals</strong> follows highest practices defined by the COPE (Committee of Publication Ethics) for editors.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>Our journals are ready to harvest views and suggestion of authors and editorial board members to improve the quality.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>For quality Purpose, we follow the double-blind peer reviewing methods to ensuring the quality and fair publication.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>We always designate the reviewing process to our suitable editorial board members.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full mt-2 flex-shrink-0"></span>
                                    <span>We follow different processes, which encourage the accuracy and clarity of research papers and include technical editing if required.</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Ethics Topics -->
                        <div class="border-t border-gray-200 pt-8">
                            <h3 class="text-xl font-bold text-blue-600 mb-6">Ethics topics to consider:</h3>

                            <div class="space-y-6 text-gray-700">
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Authorship of the paper:</h4>
                                    <p>Authorship should be limited to those who have made a contribution to the conception, design, execution, or interpretation of the reported study.</p>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Originality and plagiarism:</h4>
                                    <p>The author(s) should ensure that they have written entirely original works, and if the author(s) have used the words of others that this has been appropriately quoted.</p>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Data access and retention:</h4>
                                    <p>Author(s) may be asked to provide the raw data in connection with a paper for editorial review, and should be prepared to provide public access to such data.</p>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Multiple, redundant or concurrent publication:</h4>
                                    <p>An author should not in publish manuscripts describing essentially the same research in more than one journal or primary publication. SAS Journals does not view the following uses of a work as prior publication: publication in the form of an abstract; publication as an academic thesis; or publication as an electronic preprint. Information on prior publications is included within each SAS Journals journal's Guide for Authors. Acknowledgment of sources: Appropriate acknowledgment.</p>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Disclosure and conflicts of interest:</h4>
                                    <p>All submissions must include disclosure of all relationships that could be viewed as presenting a potential conflict of interest.</p>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Fundamental errors in published works:</h4>
                                    <p>When an author discovers a significant error or inaccuracy in his/her own published work, it is the author's obligation to promptly notify the journal editor or publisher and cooperate with the editor to retract or correct the paper.</p>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Reporting standards:</h4>
                                    <p>Authors of reports of original research should present an accurate account of the work performed as well as an objective discussion of its significance.</p>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Hazards and human or animal subjects:</h4>
                                    <p>Statements of compliance are required if the work involves chemicals, procedures or equipment that has any unusual hazards inherent in their use, or if it involves the use of animal or human subjects.</p>
                                </div>

                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Use of patient images or case details:</h4>
                                    <p>Studies on patients or volunteers require ethics committee approval and informed consent, which should be documented in the paper.</p>
                                </div>
                            </div>

                            <!-- Authorship Changes -->
                            <div class="mt-8 pt-6 border-t border-gray-200">
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Authorship Changes:</h3>
                                <p class="mb-4 text-gray-700">The authorship changes are concerned in the following conditions:</p>
                                <ul class="list-disc pl-6 mb-6 text-gray-700 space-y-2">
                                    <li>To add a corresponding author before publication of the manuscript.</li>
                                    <li>To remove a corresponding author before publication of the manuscript.</li>
                                    <li>To add a corresponding author after the publication of the manuscript.</li>
                                    <li>To remove a corresponding author after the publication of the manuscript.</li>
                                </ul>

                                <h4 class="text-lg font-semibold text-gray-800 mb-4">To change the authorship of a manuscript our process are as follows:</h4>
                                <ul class="list-disc pl-6 mb-6 text-gray-700 space-y-2">
                                    <li>Need to provide a valid reason(s) for changing in the authorship of the article.</li>
                                    <li>All authors should agree on the change of authorship details. If all agree the authorship will be changed.</li>
                                    <li>If not agree, the article will be in the same position until all authors are agree to change in authorship.</li>
                                </ul>
                            </div>

                            <!-- Important Notice -->
                            <div class="mt-8 p-6 bg-blue-50 border-l-4 border-blue-500 rounded-r-lg">
                                <h4 class="font-semibold text-blue-900 mb-2">Important Notice:</h4>
                                <p class="text-blue-800 text-sm">
                                    SAS Publishers is committed to maintaining the highest standards of publication ethics. 
                                    All authors, reviewers, and editors are expected to adhere to these ethical guidelines 
                                    to ensure the integrity and quality of published research.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>