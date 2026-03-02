<?php include 'app/views/shares/header.php'; ?>
<div class="cv-auth-wrapper">
<div class="cv-auth-card">
<h2>Tao tai khoan moi</h2>
<?php if (!empty($errors)): ?>
<div class="cv-alert cv-alert-danger">
<ul style="margin: 0; padding-left: 18px;">
<?php foreach ($errors as $error): ?>
<li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>
<form method="POST" action="/webbanhang/User/handleRegister">
<div class="cv-form-group">
<label for="fullname">Ho ten</label>
<input type="text" id="fullname" name="fullname" class="cv-form-control" placeholder="Nguyen Van A" value="<?php echo isset($fullname) ? htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8') : ''; ?>" required>
</div>
<div class="cv-form-group">
<label for="username">Ten dang nhap</label>
<input type="text" id="username" name="username" class="cv-form-control" placeholder="Nhap ten dang nhap" value="<?php echo isset($username) ? htmlspecialchars($username, ENT_QUOTES, 'UTF-8') : ''; ?>" required>
</div>
<div class="cv-form-group">
<label for="password">Mat khau</label>
<input type="password" id="password" name="password" class="cv-form-control" placeholder="It nhat 6 ky tu" required>
</div>
<button type="submit" class="cv-btn cv-btn-primary cv-btn-block" style="padding: 12px; font-size: 15px; margin-top: 8px;">Dang ky</button>
</form>
<p class="cv-auth-link">Da co tai khoan? <a href="/webbanhang/User/login">Dang nhap</a></p>
</div>
</div>
<?php include 'app/views/shares/footer.php'; ?>
