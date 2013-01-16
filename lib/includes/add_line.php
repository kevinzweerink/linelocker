<?php

require_once 'class.Line.inc.php';
$user = "Replace this with a cookie";
$message;

if (!empty($_POST)) {
	
	$line = new Line(
		$_POST['city'] ? $_POST['city'] : NULL, 
		$_POST['state'] ? $_POST['state'] : NULL, 
		$_POST['location'] ? $_POST['location'] : NULL, 
		$_POST['length'] ? $_POST['length'] : NULL, 
		$_POST['type'] ? $_POST['type'] : NULL, 
		$_POST['width'] ? $_POST['width'] : NULL, 
		$user,
		$_POST['equipment_accounted'] ? $_POST['equipment_accounted'] : NULL, 
		$_POST['equipment_needed'] ? $_POST['equipment_needed'] : NULL, 
		$_POST['date'] ? $_POST['date'] : NULL, 
		$_POST['time'] ? $_POST['time'] : NULL, 
		$_POST['message'] ? $_POST['message'] : NULL);
	$line->prep_line_info();
	$message = $line->create_line();
	
	
	
	
}



?>

<form method="post">
	<?php echo $message; ?>
    <label for="city">City:</label>
    <input type="text" name="city" placeholder="Richmond" class="required" value="<?php !empty($_POST) ? $line->display('city') : ''; ?>">
    
    <label for="state">State:</label>
    <input type="text" name="state" placeholder="VA" class="required" value="<?php !empty($_POST) ? $line->display('state') : ''; ?>">
    
    <label for="location">Location:</label>
    <input type="text" name="location" placeholder="Byrd Park" class="required" value="<?php !empty($_POST) ? $line->display('location') : ''; ?>">
    
    <label for="length">Line length:</label>
    <input type="text" name="length" placeholder="50-60ft." class="required" value="<?php !empty($_POST) ? $line->display('length') : ''; ?>">
        
    <label for="width">Line Width:</label>
    <input type="text" name="width" placeholder="1in." class="required" value="<?php !empty($_POST) ? $line->display('width') : ''; ?>">
    
    <label for="type">Line Type:</label>
	    <select name="type" class="required">
		<option value="Standard" selected="selected">Standard</option>
	    <option value="Trickline">Trickline</option>
		<option value="Longline">Longline</option>
		<option value="Highline">Highline</option>
		<option value="Waterline">Waterline</option>
	    <option value="Rodeo">Rodeo</option>
    </select>
    
    <label for="equipment_accounted">Equipment You're Bringing:</label>
    <textarea name="equipment_accounted" placeholder="100ft. tubular 1in. webbing, two 10ft. slings, tree protection, accessory cord, 6 Black Diamond carabiners, 2 CAMP single pullies. "cols="30" rows="5"><?php !empty($_POST) ? $line->display('equipment_accounted') : ''; ?></textarea>
        
    <label for="equipment_needed">Equipment You Want:</label>
    <textarea name="equipment_needed" placeholder="2 linelockers" cols="30" rows="5"><?php !empty($_POST) ? $line->display('equipment_needed') : ''; ?></textarea>
    
    <label for="date">Date:</label>
    <input type="date" name="date" class="required" placeholder="mm/dd/yyyy" value="<?php !empty($_POST) ? $line->display('date') : ''; ?>">
    
    <label for="time">Time:</label>
    <input type="time" name="time" class="required" placeholder="--:-- --" value="<?php !empty($_POST) ? $line->display('time') : ''; ?>">
    
    <label for="message">Line Description:</label>
    <textarea name="message" placeholder="Come join us at Byrd Park! Anyone is welcome." cols="30" rows="5"><?php !empty($_POST) ? $line->display('message') : ''; ?></textarea>
    
    <input type="submit" value="Make Line" />
</form>