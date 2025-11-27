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
                    <!-- Hero Banner -->
                    <div class="bg-gradient-to-r from-slate-800 to-slate-900 text-white rounded-lg mb-8 p-8 shadow-lg">
                        <h1 class="text-4xl font-bold mb-4">Author Instructions</h1>
                        <p class="text-xl text-gray-200">Authors are requested to read the instruction and prepare manuscript as per guidelines</p>
                    </div>

                    <!-- Instructions Content -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                        <div class="prose max-w-none">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Preparation of Manuscript</h3>
                            <p class="text-gray-600 mb-6">The manuscripts are accepted in English or as per Journal criteria</p>

                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Page format:</h3>
                            <p class="text-gray-600 mb-6">The manuscripts should be prepared as Microsoft-word documents in Times New Roman (font size 10) on A4 size, leaving the margins of 1 inch on all four sides in a single column. The line spacing should be single-spaced including references and tables.</p>

                            <h3 class="text-lg font-semibold text-gray-800 mb-3">A. Research Article</h3>
                            <p class="text-gray-600 mb-6">Manuscript should be arranged using the following headings; Title of manuscript, Author name(s), Affiliation(s), Corresponding author name and email, Abstract, Keywords, Introduction, Material and Methods/Experimental section, Results, Discussion, Conclusion, Acknowledgement (optional) and References.</p>

                            <div class="space-y-4">
                                <div>
                                    <p><strong class="text-gray-800">Paper title:</strong> <span class="text-gray-600">Should be concise and informative</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Author name(s):</strong> <span class="text-gray-600">Full name of each authors or Surname Initial</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Affiliation:</strong> <span class="text-gray-600">Designation of the author(s) and institutional address(s)</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Corresponding author:</strong> <span class="text-gray-600">Complete name, postal address, phone number and e-mail address of the corresponding author.</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Abstract:</strong> <span class="text-gray-600">Should not exceed 250 words and should be written as a single paragraph without subheadings. It should contain a brief introduction to the problem, methodology, key findings and conclusion.</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Keywords:</strong> <span class="text-gray-600">Minimum 3 and maximum 6 keywords should be provided which should be specific to the content of the manuscript.</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Introduction:</strong> <span class="text-gray-600">Should provide sufficient background and rationale for the study with clear objectives.</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Material and Methods:</strong> <span class="text-gray-600">Should provide sufficient details to enable the work to be reproduced. For established methods, proper references should be cited.</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Results:</strong> <span class="text-gray-600">Should present the findings clearly and concisely. Data should be presented in tables or figures but not both.</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Discussion:</strong> <span class="text-gray-600">Should explore the significance of the results and place them in the context of other published work.</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Conclusion:</strong> <span class="text-gray-600">Should summarize the key findings and their implications.</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">Acknowledgement:</strong> <span class="text-gray-600">(Optional) Brief acknowledgement of people who helped in the research but are not co-authors.</span></p>
                                </div>

                                <div>
                                    <p><strong class="text-gray-800">References:</strong> <span class="text-gray-600">Should follow the journal's specific format. All references cited in text must appear in the reference list and vice versa.</span></p>
                                </div>
                            </div>

                            <div class="mt-8 p-6 bg-blue-50 border-l-4 border-blue-500 rounded-r-lg">
                                <h4 class="font-semibold text-blue-900 mb-3">Important Notes:</h4>
                                <ul class="text-blue-800 space-y-2 text-sm">
                                    <li>• Manuscripts must be original and not published elsewhere</li>
                                    <li>• Proper citation and referencing is mandatory</li>
                                    <li>• All figures and tables must be clearly labeled</li>
                                    <li>• Ethical approval is required for studies involving human or animal subjects</li>
                                    <li>• Plagiarism check will be conducted for all submissions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>