<?php include 'app/views/shares/header.php'; ?>
<div class="cv-form-card">
<h2>Sua san pham</h2>
<?php if (!empty($errors)): ?>
<div class="cv-alert cv-alert-danger">
<ul style="margin: 0; padding-left: 18px;">
<?php foreach ($errors as $error): ?>
<li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>
<form method="POST" action="/webbanhang/Product/update" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $product->id; ?>">
<div class="cv-form-row">
<div class="cv-form-group">
<label for="name">Ten san pham</label>
<input type="text" id="name" name="name" class="cv-form-control" value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required>
</div>
<div class="cv-form-group">
<label for="category_id">Danh muc</label>
<select id="category_id" name="category_id" class="cv-form-control" required>
<?php foreach ($categories as $category): ?>
<option value="<?php echo $category->id; ?>" <?php echo $category->id == $product->category_id ? 'selected' : ''; ?>>
<?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
</option>
<?php endforeach; ?>
</select>
</div>
</div>
<div class="cv-form-row">
<div class="cv-form-group">
<label for="price">Gia ban (VND)</label>
<input type="number" id="price" name="price" class="cv-form-control" step="1000" value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" required>
</div>
<div class="cv-form-group">
<label for="image">Hinh anh (de trong neu khong doi)</label>
<input type="file" id="image" name="image" class="cv-form-control" accept="image/*">
<input type="hidden" name="existing_image" value="<?php echo $product->image; ?>">
<?php if ($product->image): ?>
<div class="cv-img-preview" style="margin-top: 8px;">
<img src="/webbanhang/<?php echo $product->image; ?>" alt="Current image">
</div>
<?php endif; ?>
</div>
</div>
<div class="cv-form-group">
<label for="description">Mo ta san pham</label>
<textarea id="description" name="description" class="cv-form-control" required><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
</div>
<div class="cv-form-actions">
<a href="/webbanhang/Product" class="cv-btn cv-btn-outline">Huy</a>
<button type="submit" class="cv-btn cv-btn-primary" style="padding: 10px 32px;">Luu thay doi</button>
</div>
</form>
</div>
<?php include 'app/views/shares/footer.php'; ?>