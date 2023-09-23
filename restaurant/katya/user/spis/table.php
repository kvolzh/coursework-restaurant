<script>
  $(function(){
    $('#number_table').change(function() {
      var id = $(this).val();
      $.ajax({
        type: "POST",
        url: "spis/restMap.php",
        data: {id: id, user_id: vars},
        success: function(data){
          $(".number_table").html(data);
        }
      });
    });
  });
</script>
<select class="number_table" id="number_table">
<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
  $table = intval($_POST['id']);
  if ($table == 1) {
    echo "<option value='0'>Выберите столик</option>
          <option value='1'>Столик №1</option>
          <option value='2'>Столик №2</option>
          <option value='3'>Столик №3</option>";
  } 
  if ($table == 2) {
    echo "<option value='0'>Выберите столик</option>
		  <option value='4'>Столик №1</option>
      <option value='5'>Столик №2</option>";
  }
  if ($table == 3) {
    echo "<option value='0'>Выберите столик</option>
      <option value='6'>Столик №1</option>
      <option value='7'>Столик №2</option>
      <option value='8'>Столик №3</option>
      <option value='9'>Столик №4</option>";
  }
  if ($table == 4) {
    echo "<option value='0'>Выберите столик</option>
      <option value='10'>Столик №1</option>
      <option value='11'>Столик №2</option>";
  }
}
?>
</select>
