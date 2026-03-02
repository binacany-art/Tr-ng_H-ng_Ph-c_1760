<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cho Viet - Mua ban truc tuyen</title>
<link rel="stylesheet" href="/webbanhang/public/css/style.css">
</head>
<body>
<nav class="cv-navbar">
<div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 16px;">
<a href="/webbanhang/Product" class="cv-logo">
<span class="cv-logo-icon">🛍️</span>
Cho Viet
</a>
<div class="cv-search">
<span class="search-icon">🔍</span>
<input type="text" placeholder="Tim kiem san pham...">
</div>
<div class="cv-nav-actions">
<?php if (isset($_SESSION['user_id'])): ?>
<a href="/webbanhang/Product/add" class="cv-btn cv-btn-primary cv-btn-sm">+ Dang ban</a>
<a href="/webbanhang/Product/cart" class="cv-cart-link" title="Gio hang">
🛒
<?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
<span class="cv-cart-badge"><?php echo array_sum(array_column($_SESSION['cart'], 'quantity')); ?></span>
<?php endif; ?>
</a>
<span class="cv-user-info">
<span class="user-icon">👤</span>
<?php echo htmlspecialchars($_SESSION['fullname'], ENT_QUOTES, 'UTF-8'); ?>
</span>
<a href="/webbanhang/User/logout" class="cv-logout-btn" title="Dang xuat">⎋</a>
<?php else: ?>
<a href="/webbanhang/Product/cart" class="cv-cart-link" title="Gio hang">
🛒
<?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
<span class="cv-cart-badge"><?php echo array_sum(array_column($_SESSION['cart'], 'quantity')); ?></span>
<?php endif; ?>
</a>
<a href="/webbanhang/User/login" class="cv-btn cv-btn-outline cv-btn-sm">→ Dang nhap</a>
<?php endif; ?>
</div>
</div>
</nav>
<div class="cv-main">
<div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 16px;">