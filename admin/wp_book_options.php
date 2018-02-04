<?php

function wp_book_lib_options_mb($post){
    
    $wl_data = get_post_meta($post->ID,'wbl_data',true);
    
    
  ?>
    
    <div class="form-group">
    <label>Author Name</label>
    <input type="text" value="<?php if(!empty($wl_data['name'])) echo $wl_data['name']; ?>" class="form-control input-lg" name="author_name">
</div>
<div class="form-group">
    <label>About the  Author</label>
<input type="text" value="<?php if(!empty($wl_data['about'])) echo $wl_data['about']; ?>" class="form-control input-lg" name="author_about"></div>
<div class="form-group">
    <label>Author Contact (phone  number)</label>
    <input type="text" value="<?php if(!empty($wl_data['contact']))  echo $wl_data['contact']; ?>" class="form-control " name="author_num">
</div>
<div class="form-group">
    <label>Book's Price </label>
    <input type="text" value="<?php if(!empty($wl_data['price'])) echo $wl_data['price']; ?>" class="form-control" name="author_price">
</div>
<div class="form-group">
    <label>This Book is suitable for </label>
    <select class="form-control" name="author_level">
        <option value="Form One ">Form One</option>
        <option <?php if(!empty($wl_data['level'])) echo  $wl_data['level'] == 'Form Two'?'SELECTED':''; ?> 
        
        value="Form Two ">Form Two </option>
        <option
         <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'Form Three'?'SELECTED':''; ?> 
          value="Form Three">Form Three</option>
        <option
        <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'Form Four'?'SELECTED':''; ?>
          value="Form Four">Form Four</option>
        <option
         <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'Form Five'?'SELECTED':''; ?>
          value="Form Five">Form Five </option>
        <option
         <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'Lowersixth'?'SELECTED':''; ?>
          value="Lowersixth">Lowersixth</option>
        <option
         <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'Uppersixth'?'SELECTED':''; ?>
          value="Uppersixth">Uppersixth</option>
        <option 
         <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'Form Three,Four,and Five'?'SELECTED':''; ?>
          value="Form Three,Four,and Five">Form Three,Four,and Five</option>
        <option
         <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'Form Four,and Five'?'SELECTED':''; ?>

          value="Form Four and Five">Form Four and Five</option>
        <option
     <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'Lowersixth and  Uppersixth'?'SELECTED':''; ?>
    value="Lowersixth and  Uppersixth">Lowersixth and  Uppersixth </option>
        <option
    <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'University'?'SELECTED':''; ?>
      value="University">Higher level ( University or collage) </option>
        <option
          <?php if(!empty($wl_data['level'])) echo $wl_data['level'] == 'Others'?'SELECTED':''; ?>
   value="Others">Others</option>
        
    </select>
</div>
<div class="form-group">
    <label>Subject</label>
    <input type="text" value="<?php if(!empty($wl_data['subject'])) echo $wl_data['subject']; ?>" class="form-control" name="author_subject">
</div>
 <div class="form-group">
    <label>Book  summary</label>
    <input type="text" value="<?php if(!empty($wl_data['summary'])) echo $wl_data['summary']; ?>" class="form-control input-lg" name="author_summary">
</div> 
      <?php     
    
}
