<?php
/**
*  Form displayed to submit RSVP info
**/
?>
<form>
  <div class="form-row" action="inc/submit-rsvp.php">
    <label for="name">First and Last Name <span class="required_field">*</span></label>
    <input type="text" name="name" id="name" class="formEl" required>
  </div>
  <div class="form-row">
    <label for="attending">Are you planning to attend? <span class="required_field">*</span></label>
    <select name="attending" id="attending" class="formEl" required>
      <option disabled selected></option>
      <option value="yes">Yes! Yes! A thousand times YES!</option>
      <option value="no">Not this time. I'll try to make the recommitment ceremony in 20 years</option>
    </select>
  </div>
  <div class="form-row">
    <label for="other_guests_select">Will You Be Bringing Other Guest?</label>
    <select id="other_guests_select" class="formEl" name="other_guests" required>
      <option disabled selected></option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
  </div>
  <div class="form-row optional">
    <label for="name">Number of Other Guests <span class="required_field">*</span></label>
    <input type="number" name="number_of_guests" id="number_of_guests" max="5" min="1" class="formEl">
  </div>
  <div class="form-row optional">
    <label for="name">Names of The Guest Who Will Be Joining You <span class="required_field">*</span></label>
    <textarea name="other_guests_names" id="other_guests_names" class="formEl"></textarea>
  </div>
  <div class="form-row" required>
    <label for="name">Please List Any Dietary Restrictions <span class="required_field">*</span></label>
    <span class="note">A light dinner will be provided. Vegetarian options will be available. Please enter N/A if there are no dietary restrictions we need to consider.</span>
    <textarea name="dietary_restrictions" id="dietary_restrictions" class="formEl"></textarea>
  </div>
  <div class="form-row">
    <label for="name">Comments</label>
    <textarea name="comments" id="comments" class="formEl"></textarea>
  </div>
  <input type="submit" value="RSVP" id="rsvp_submit">
</form>
