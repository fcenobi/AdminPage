<fieldset>
    <div class="form-group">
        <label for="f_name">Option *</label>
          <input type="text" name="f_name" value="<?php echo htmlspecialchars($edit ? $customer['id'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Option#" class="form-control" required="required" id = "id">
    </div> 

    <div class="form-group">
        <label for="l_name">Type</label>
        <input type="text" name="l_name" value="<?php echo htmlspecialchars($edit ? $customer['type'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Type" class="form-control" required="required" id="l_name">
    </div>

    <!--div class="form-group">
        <label>Gender *</label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="male" <?php echo ($edit &&$customer['gender'] =='male') ? "checked": "" ; ?> required="required" id="male"/> Male
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="female" <?php echo ($edit && $customer['gender'] =='female')? "checked": "" ; ?> required="required" id="female"/> Female
        </label>
    </div-->

    <div class="form-group">
        <label for="address">Name</label>
          <input type="text" name="address" placeholder="Name" class="form-control" id="address"><?php echo htmlspecialchars(($edit) ? $customer['name'] : '', ENT_QUOTES, 'UTF-8'); ?>
    </div>

    <!--div class="form-group">
        <label>State</label>
        <?php $opt_arr = array("Maharashtra", "Kerala", "Madhya pradesh"); ?>
        <select name="state" class="form-control selectpicker" required>
            <option value=" ">Please select your state</option>
            <?php
            foreach ($opt_arr as $opt) {
                if ($edit && $opt == $customer['state']) {
                    $sel = 'selected';
                } else {
                    $sel = '';
                }
                echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
            }
            ?>
        </select>
    </div-->

    <div class="form-group">
        <label for="email">Cost</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($edit ? $customer['cost'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Cost" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="phone">Content</label>
        <input name="phone" value="<?php echo htmlspecialchars($edit ? $customer['content'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Content" class="form-control"  type="text" id="phone">
    </div>

    <!--div class="form-group">
        <label>Date of birth</label>
        <input name="date_of_birth" value="<?php echo htmlspecialchars($edit ? $customer['date_of_birth'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Birth date" class="form-control" type="date">
    </div-->

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
