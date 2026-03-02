<?php include 'app/views/shares/header.php'; ?>
<div class="cv-page-header">
<h1 class="cv-page-title">San pham moi nhat</h1>
<span class="cv-product-count"><?php echo count($products); ?> san pham</span>
</div>

<?php if (empty($products)): ?>
<div class="cv-empty-state">
<div class="empty-icon">📦</div>
<p>Chua co san pham nao duoc dang ban.</p>
</div>
<?php else: ?>
<div class="cv-product-grid">
<?php foreach ($products as $product): ?>
<div class="cv-product-card">
<?php if ($product->image): ?>
<img src="/webbanhang/<?php echo $product->image; ?>" class="cv-product-img" alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>">
<?php else: ?>
<div class="cv-product-img-placeholder">📷 Khong co anh</div>
<?php endif; ?>
<div class="cv-product-body">
<a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="cv-product-name">
<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
</a>
<p class="cv-product-desc"><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
<div class="cv-product-price"><?php echo number_format($product->price, 0, ',', '.'); ?> VND</div>
<div class="cv-product-category">📁 <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></div>
<div class="cv-product-actions">
<a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" class="cv-btn cv-btn-primary cv-btn-sm">🛒 Them vao gio</a>
<a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" class="cv-btn cv-btn-warning cv-btn-sm">✏️ Sua</a>
<a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" class="cv-btn cv-btn-danger cv-btn-sm" onclick="return confirm('Ban co chac chan muon xoa?');">🗑️ Xoa</a>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
<?php endif; ?>
<?php include 'app/views/shares/footer.php'; ?>