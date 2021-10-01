<?php
if (!isset($_POST['setid'])) { die("Not valid request"); }

switch ($_POST['setid']) {
	case '':
		// For Empty
		echo '<i>Select one of Product Type...</i>';
		break;

	case 'FURNITURE':
		?>
          <div class="furniture">
            <label>Height (CM)
            	<input type="text" id="height" class="form-control w-100" name="param[]" required />
            </label>
          </div>
          <div class="furniture"> 
            <label>Width (CM)
            	<input type="text" id="width" class="form-control w-100" name="param[]" required />
            </label>
          </div>
          <div class="furniture"> 
            <label>Lenght (CM)
            	<input type="text" id="length" class="form-control w-100" name="param[]" required />
            </label>
          </div>
          <div class="furniture"> 
            <p>Please provide dimensions in HxWxL format</p>
          </div>
		<?php
		break;

	case 'BOOK':
		?>
          <div class="book"> 
            <label>Weight (KG)
            	<input type="text" id="weight" class="form-control w-100" name="param[]" required />
            </label>
            <p>Please enter book weight in KG</p>
          </div>
		<?php
		break;

	case 'DVD':
		?>
          <div class="dvd">
            <label>Size (MB)
            	<input type="text" id="size" class="form-control w-100" name="param[]" required />
            </label>
            <p>Please enter disk size in MB</p>
          </div>
		<?php
		break;
	
	default:
		echo 'Set not found for '.$_POST['setid'];
		break;
}


?>