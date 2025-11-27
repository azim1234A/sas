<?php 
require_once 'includes/db_config.php';

// Get search parameters
$search = isset($_GET['search']) ? sanitizeInput($_GET['search']) : '';
$category = isset($_GET['category']) ? sanitizeInput($_GET['category']) : '';
$sort = isset($_GET['sort']) ? sanitizeInput($_GET['sort']) : 'title';
$filter = isset($_GET['filter']) ? sanitizeInput($_GET['filter']) : '';

// Build WHERE clause
$whereClause = "status = 'published'";
$params = [];

if (!empty($search)) {
    $whereClause .= " AND (title LIKE ? OR subtitle LIKE ? OR authors LIKE ? OR description LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if (!empty($category)) {
    $whereClause .= " AND category = ?";
    $params[] = $category;
}

if ($filter === 'featured') {
    $whereClause .= " AND featured = 1";
} elseif ($filter === 'bestseller') {
    $whereClause .= " AND bestseller = 1";
} elseif ($filter === 'free') {
    $whereClause .= " AND price = 0";
}

// Sort options
$sortOptions = [
    'title' => 'title ASC',
    'newest' => 'publication_date DESC',
    'price_low' => 'price ASC',
    'price_high' => 'price DESC',
    'rating' => 'rating DESC',
    'popular' => 'view_count DESC'
];

$orderBy = $sortOptions[$sort] ?? $sortOptions['title'];

// Get books with pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 12;
$offset = ($page - 1) * $perPage;

// Get total count
$countSql = "SELECT COUNT(*) FROM books WHERE $whereClause";
$countStmt = $pdo->prepare($countSql);
$countStmt->execute($params);
$totalBooks = $countStmt->fetchColumn();
$totalPages = ceil($totalBooks / $perPage);

// Get books for current page
$sql = "SELECT * FROM books WHERE $whereClause ORDER BY $orderBy LIMIT $perPage OFFSET $offset";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$books = $stmt->fetchAll();

// Get all categories for filter
$categorySql = "SELECT DISTINCT category FROM books WHERE status = 'published' AND category IS NOT NULL ORDER BY category";
$categoryStmt = $pdo->query($categorySql);
$categories = $categoryStmt->fetchAll(PDO::FETCH_COLUMN);

include 'includes/header.php'; 
?>

<!-- Books Page Content -->
<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Sidebar -->
            <div class="w-full lg:w-1/4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="author-login.php" class="flex items-center gap-3 px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition">
                        <i class="fas fa-sign-in-alt text-gray-600"></i>
                        <span class="font-semibold text-gray-800">Author Login</span>
                    </a>
                    <a href="submit-manuscript.php" class="flex items-center gap-3 px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition">
                        <i class="fas fa-file-alt text-gray-600"></i>
                        <span class="font-semibold text-gray-800">Submit Manuscript</span>
                    </a>
                    <a href="https://www.sassociety.com/join-sas-society/" target="_blank" class="flex items-center gap-3 px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition">
                        <i class="fas fa-users text-gray-600"></i>
                        <span class="font-semibold text-gray-800">Join Membership</span>
                    </a>
                    <a href="https://www.sassociety.com/join-reviewer/" target="_blank" class="flex items-center gap-3 px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition">
                        <i class="fas fa-user-tie text-gray-600"></i>
                        <span class="font-semibold text-gray-800">Join As Reviewer</span>
                    </a>
                    <a href="https://www.sassociety.com/join-editor/" target="_blank" class="flex items-center gap-3 px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition">
                        <i class="fas fa-user-edit text-gray-600"></i>
                        <span class="font-semibold text-gray-800">Join As Editor</span>
                    </a>
                    <a href="payments.php" class="flex items-center gap-3 px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition">
                        <i class="fas fa-credit-card text-gray-600"></i>
                        <span class="font-semibold text-gray-800">Pay Publication Fee</span>
                    </a>
                    <a href="subscribe-hardcopy.php" class="flex items-center gap-3 px-6 py-4 hover:bg-gray-50 transition">
                        <i class="fas fa-check text-gray-600"></i>
                        <span class="font-semibold text-gray-800">Subscribe Hard Copy</span>
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-full lg:w-3/4">
                <!-- Page Title -->
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Books</h2>
                
                <!-- Books Description -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                    <p class="text-gray-700 leading-relaxed mb-4">
                        SAS Publishers has started its provide book publishing services from 2016. This is publishing Book with ISBN. 
                        It publishes books written in English, Assamese, Hindi, Bengali or other languages in Print and Online Version.
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                        <li>Author/Authors need to submit filled (PUBLICATION PROPOSAL FORM) and after passing the evaluation (which may takes 7-15 days), 
                            final decision on approval or disapproval for the book publication will come out. Then need to send the whole book.</li>
                        <li>If the book is approved to be published after evaluation, publishing agreement and publication cost will be discussed and signed. 
                            (Publication cost is minimal which mainly depends on number of pages of books, Supplementary copies required for Authors, 
                            Type of Books, marketing strategies, royalty etc.)</li>
                        <li>Then Authors need to send complete books materials with standard form by email to saspbooks@gmail.com</li>
                        <li>Once the payment has been received, typesetting and proofreading, Cover design, ISBN allotment work will be done promptly 
                            and authors will receive Gallery Proof.</li>
                        <li>After confirmation of Gallery proof from authors SAS Publishers will publish the book and do its best to promote the book 
                            to strive for the maximum of sales.</li>
                    </ul>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 mb-8">
                    <a href="submit-manuscript.php" class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded font-semibold transition">
                        <i class="fas fa-paper-plane"></i>
                        <span>Submit Your Book</span>
                    </a>
                    <a href="#" class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded font-semibold transition">
                        <i class="fas fa-download"></i>
                        <span>Publication Proposal Form</span>
                    </a>
                </div>

                <!-- Books Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($books as $book): ?>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <!-- Book Cover -->
                            <div class="h-96 bg-white flex items-center justify-center border-b border-gray-200 p-4">
                                <?php if ($book['cover_image']): ?>
                                    <img src="<?php echo htmlspecialchars($book['cover_image']); ?>" 
                                         alt="<?php echo htmlspecialchars($book['title']); ?>" 
                                         class="h-full w-auto object-contain">
                                <?php else: ?>
                                    <div class="text-center p-6">
                                        <i class="fas fa-book text-6xl text-gray-300 mb-4"></i>
                                        <p class="text-gray-600 font-medium">
                                            <?php echo htmlspecialchars($book['title']); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Book Details -->
                            <div class="p-5">
                                <h3 class="text-lg font-bold text-gray-800 mb-3 leading-tight" style="min-height: 3.5rem;">
                                    <?php echo htmlspecialchars($book['title']); ?>
                                </h3>
                                
                                <div class="space-y-1 text-sm text-gray-700 mb-3">
                                    <p><strong>Editors:</strong> <?php echo htmlspecialchars($book['authors']); ?></p>
                                    <?php if ($book['publication_date']): ?>
                                        <p><strong>Published:</strong> <?php echo date('M d, Y', strtotime($book['publication_date'])); ?></p>
                                    <?php endif; ?>
                                    <?php if ($book['pages']): ?>
                                        <p><strong>Print Length:</strong> <?php echo $book['pages']; ?> pages</p>
                                    <?php endif; ?>
                                    <p><strong>Language:</strong> English</p>
                                    <?php if ($book['isbn']): ?>
                                        <p><strong>ISBN:</strong> <?php echo htmlspecialchars($book['isbn']); ?></p>
                                    <?php endif; ?>
                                    <?php if ($book['price'] > 0): ?>
                                        <p><strong>Price:</strong> <?php echo number_format($book['price']); ?> USD<?php if ($book['discount_price']) echo ' / INR ' . number_format($book['discount_price']); ?></p>
                                    <?php endif; ?>
                                </div>
                                
                                <p class="text-sm text-gray-800 font-semibold">
                                    Paperback | Hardcover
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
        </div>

                <?php if (empty($books)): ?>
                    <div class="text-center py-12 col-span-3">
                        <i class="fas fa-book text-6xl text-gray-300 mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-600 mb-2">No books available</h3>
                        <p class="text-gray-500">Please check back later for new publications</p>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>