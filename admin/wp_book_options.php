<?php

function wp_book_lib_options_mb(){
    
  ?>
    
    <div class="form-group">
    <label>Author Name</label>
    <input type="text" class="form-control input-lg" name="author_name">
</div>
<div class="form-group">
    <label>About the  Author</label>
    <input type="text" class="form-control input-lg" name="author_about">
</div>
<div class="form-group">
    <label>Author Contact (phone  number)</label>
    <input type="text" class="form-control input-lg" name="author_num">
</div>
<div class="form-group">
    <label>Book's Price </label>
    <input type="text" class="form-control" name="author_price">
</div>
<div class="form-group">
    <label>This Book is suitable for </label>
    <select class="form-control" name="author_level">
        <option value="Form One ">Form One</option>
        <option value="Form Two ">Form Two </option>
        <option value="Form Three">Form Three</option>
        <option value="Form Four">Form Four</option>
        <option value="Form Five">Form Five </option>
        <option value="Lowersixth">Lowersixth</option>
        <option value="Uppersixth">Uppersixth</option>
        <option value="Form Three,Four,and Five">Form Three,Four,and Five</option>
        <option value="Form Four and Five">Form Four and Five</option>
        <option value="Lowersixth and  Uppersixth">Lowersixth and  Uppersixth </option>
        <option value="University">Higher level ( University) </option>
        <option value="Others">Others</option>
        
    </select>
</div>
<div class="form-group">
    <label>Subject</label>
    <input type="text" class="form-control" name="author_subject">
</div>
 <div class="form-group">
    <label>Book  summary</label>
    <textarea type="text" class="form-control" name="author_summary"></textarea>
</div> 
      <?php     
    
}
