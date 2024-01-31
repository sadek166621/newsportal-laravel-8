<label for="inputEmail3"  class="col-sm-3 control-label">Sub-Cat Name</label>
<div class="col-sm-9">
    <select name="subcategory_id" class="form-control">
        <?php foreach ($subCategoriesByCategoryId as $subCategoryByCategoryId) { ?>
            <option value="<?php echo $subCategoryByCategoryId->id; ?>"><?php echo $subCategoryByCategoryId->subcategory_name; ?></option>
        <?php } ?>
    </select>
</div>
