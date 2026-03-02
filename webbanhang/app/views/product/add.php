<?php include 'app/views/shares/header.php'; ?>
<div class="cv-form-card">
<h2>Dang ban san pham moi</h2>
<?php if (!empty($errors)): ?>
<div class="cv-alert cv-alert-danger">
<ul style="margin: 0; padding-left: 18px;">
<?php foreach ($errors as $error): ?>
<li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>
<form method="POST" action="/webbanhang/Product/save" enctype="multipart/form-data">
<div class="cv-form-row">
<div class="cv-form-group">
<label for="name">Ten san pham</label>
<input type="text" id="name" name="name" class="cv-form-control" placeholder="Vi du: iPhone 15 Pro Max" value="<?php echo isset($name) ? htmlspecialchars($name, ENT_QUOTES, 'UTF-8') : ''; ?>" required>
</div>
<div class="cv-form-group">
<label for="category_id">Danh muc</label>
<select id="category_id" name="category_id" class="cv-form-control" required>
<option value="">-- Chon danh muc --</option>
<?php foreach ($categories as $category): ?>
<option value="<?php echo $category->id; ?>" <?php echo (isset($category_id) && $category_id == $category->id) ? 'selected' : ''; ?>>
<?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
</option>
<?php endforeach; ?>
</select>
</div>
</div>
<div class="cv-form-row">
<div class="cv-form-group">
<label for="price">Gia ban (VND)</label>
<input type="number" id="price" name="price" class="cv-form-control" step="1000" placeholder="0" value="<?php echo isset($price) ? htmlspecialchars($price, ENT_QUOTES, 'UTF-8') : ''; ?>" required>
</div>
<div class="cv-form-group">
<label for="image">Hinh anh san pham</label>
<input type="file" id="image" name="image" class="cv-form-control" accept="image/*">
</div>
</div>
<div class="cv-form-group">
<label for="description">Mo ta san pham</label>
<textarea id="description" name="description" class="cv-form-control" placeholder="Mo ta chi tiet ve tinh trang, tinh nang san pham..." required><?php echo isset($description) ? htmlspecialchars($description, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
</div>
<div class="cv-form-actions">
<a href="/webbanhang/Product" class="cv-btn cv-btn-outline">Huy</a>
<button type="submit" class="cv-btn cv-btn-primary" style="padding: 10px 32px;">Dang ban ngay</button>
</div>
</form>
</div>
<?php include 'app/views/shares/footer.php'; ?>
