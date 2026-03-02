<?php include 'app/views/shares/header.php'; ?>
<div class="cv-auth-wrapper">
<div class="cv-auth-card">
<h2>Chao mung tro lai</h2>
<?php if (!empty($error)): ?>
<div class="cv-alert cv-alert-danger"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
<?php endif; ?>
<form method="POST" action="/webbanhang/User/handleLogin">
<div class="cv-form-group">
<label for="username">Ten dang nhap</label>
<input type="text" id="username" name="username" class="cv-form-control" placeholder="Nhap ten dang nhap" required>
</div>
<div class="cv-form-group">
<label for="password">Mat khau</label>
<input type="password" id="password" name="password" class="cv-form-control" placeholder="••••••••" required>
</div>
<button type="submit" class="cv-btn cv-btn-primary cv-btn-block" style="padding: 12px; font-size: 15px; margin-top: 8px;">Dang nhap</button>
</form>
<p class="cv-auth-link">Chua co tai khoan? <a href="/webbanhang/User/register">Dang ky ngay</a></p>
</div>
</div>
<?php include 'app/views/shares/footer.php'; ?>
