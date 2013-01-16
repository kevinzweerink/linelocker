<?php
require_once 'class.Validate.inc.php';
$validate = new Validate;

?>

<form method="post">
    <label for="city">City:</label>
    <input type="text" name="city" placeholder="Richmond" class="required" value="<?php $validate->is_filled('city'); ?>">
    
    <label for="state">State:</label>
    <input type="text" name="state" placeholder="VA" class="required" value="">
    
    <label for="location">Location:</label>
    <input type="text" name="location" placeholder="Byrd Park" class="required" value="">
    
    <label for="length">Line length:</label>
    <input type="text" name="length" placeholder="50-60ft." class="required" value="">
        
    <label for="width">Line Width:</label>
    <input type="text" name="width" placeholder="1in." class="required" value="">
    
    <label for="selection">Line Type:</label>
    <select name="experience" class="required">
	<option value="Standard" selected="selected">Standard</option>
    	<option value="Trickline">Trickline</option>
	<option value="Longline">Longline</option>
	<option value="Highline">Highline</option>
	<option value="Waterline">Waterline</option>
        <option value="Rodeo">Rodeo</option>
    </select>
    
    <label for="equipment_accounted">Equipment You're Bringing:</label>
    <textarea name="equipment_accounted" placeholder="100ft. tubular 1in. webbing, two 10ft. slings, tree protection, accessory cord, 6 Black Diamond carabiners, 2 CAMP single pullies. "cols="30" rows="5"></textarea>
        
    <label for="equipment_needed">Equipment You Want:</label>
    <textarea name="equipment_needed" placeholder="2 linelockers" cols="30" rows="5"></textarea>
    
    <label for="date">Date:</label>
    <input type="date" name="date" class="required" value="">
    
    <label for="time">Time:</label>
    <input type="time" name="time" class="required" value="">
    
    <label for="message">Line Description:</label>
    <textarea name="message" placeholder="Come join us at Byrd Park! Anyone is welcome." cols="30" rows="5"></textarea>
    
    <input type="submit" value="Make Line" />
</form>