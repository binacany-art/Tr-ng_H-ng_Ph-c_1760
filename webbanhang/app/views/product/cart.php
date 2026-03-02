<?php include 'app/views/shares/header.php'; ?>
<div class="cv-page-header">
<h1 class="cv-page-title">🛒 Gio hang cua ban</h1>
</div>

<?php if (empty($_SESSION['cart'])): ?>
<div class="cv-empty-state">
<div class="empty-icon">🛒</div>
<p>Gio hang cua ban dang trong.</p>
<a href="/webbanhang/Product" class="cv-btn cv-btn-primary" style="margin-top: 16px;">Tiep tuc mua sam</a>
</div>
<?php else: ?>
<table class="cv-cart-table">
<thead>
<tr>
<th>San pham</th>
<th>Ten</th>
<th>Gia</th>
<th>So luong</th>
<th>Thanh tien</th>
<th>Xoa</th>
</tr>
</thead>
<tbody>
<?php $total = 0; ?>
<?php foreach ($_SESSION['cart'] as $id => $item): ?>
<?php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; ?>
<tr>
<td>
<?php if ($item['image']): ?>
<img src="/webbanhang/<?php echo $item['image']; ?>" class="cv-cart-img" alt="Product">
<?php else: ?>
<div style="width:60px;height:60px;background:var(--bg-light);border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:12px;">No img</div>
<?php endif; ?>
</td>
<td style="font-weight: 500;"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></td>
<td><?php echo number_format($item['price'], 0, ',', '.'); ?> ₫</td>
<td>
<div class="cv-qty-control">
<a href="/webbanhang/Product/decreaseCart/<?php echo $id; ?>" class="cv-qty-btn">−</a>
<span class="cv-qty-value"><?php echo $item['quantity']; ?></span>
<a href="/webbanhang/Product/increaseCart/<?php echo $id; ?>" class="cv-qty-btn">+</a>
</div>
</td>
<td style="font-weight: 600; color: #e53e3e;"><?php echo number_format($subtotal, 0, ',', '.'); ?> ₫</td>
<td>
<a href="/webbanhang/Product/removeFromCart/<?php echo $id; ?>" class="cv-btn cv-btn-danger cv-btn-sm" onclick="return confirm('Xoa san pham nay khoi gio hang?');">✕</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

<div class="cv-cart-total">
<span class="cv-cart-total-label">Tong cong:</span>
<span class="cv-cart-total-price"><?php echo number_format($total, 0, ',', '.'); ?> ₫</span>
</div>

<div style="display: flex; justify-content: space-between; margin-top: 20px;">
<a href="/webbanhang/Product" class="cv-btn cv-btn-outline">← Tiep tuc mua sam</a>
</div>
<?php endif; ?>
<?php include 'app/views/shares/footer.php'; ?>
