<?php include 'app/views/shares/header.php'; ?>
<?php if ($product): ?>
<div class="cv-detail-card">
<?php if ($product->image): ?>
<img src="/webbanhang/<?php echo $product->image; ?>" class="cv-detail-img" alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>">
<?php else: ?>
<div class="cv-product-img-placeholder" style="min-height: 350px; font-size: 18px;">📷 Khong co anh</div>
<?php endif; ?>
<div class="cv-detail-body">
<h1><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></h1>
<div class="cv-product-price" style="font-size: 24px; margin-bottom: 16px;"><?php echo number_format($product->price, 0, ',', '.'); ?> VND</div>
<p style="color: var(--text-muted); margin-bottom: 20px; line-height: 1.7;"><?php echo nl2br(htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8')); ?></p>
<div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: auto;">
<a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" class="cv-btn cv-btn-primary" style="padding: 12px 28px;">🛒 Them vao gio hang</a>
<a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" class="cv-btn cv-btn-warning">✏️ Sua</a>
<a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" class="cv-btn cv-btn-danger" onclick="return confirm('Ban co chac chan muon xoa?');">🗑️ Xoa</a>
</div>
<div style="margin-top: 20px;">
<a href="/webbanhang/Product" style="color: var(--primary); text-decoration: none; font-size: 14px;">← Quay lai danh sach</a>
</div>
</div>
</div>
<?php else: ?>
<div class="cv-empty-state">
<div class="empty-icon">❌</div>
<p>Khong tim thay san pham.</p>
</div>
<?php endif; ?>
<?php include 'app/views/shares/footer.php'; ?>
