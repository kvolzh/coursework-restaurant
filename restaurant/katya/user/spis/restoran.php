<script>
  $(function() {
    $("#restoran").change(function(){
      var id = $(this).val();
      console.log(vars);
      $.ajax({
        type: "POST",
        url: "spis/table.php",
        data: {id: id, user_id: vars},
        success: function(data){
          $(".number_table").html(data);
        }
      });
    });
  });
</script>

<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
  $id = intval($_POST['id']);
  $array = [
    1 => "
        <option value='0'>Выберите ресторан</option>
        <option value='1'>На лубянке</option>
        <option value='2'>На арбате</option>
    ",
    2 => "
        <option value='0'>Выберите ресторан</option>
        <option value='3'>2й-микрорайон</option>
        <option value='4'>Баймаковское ш.</option>
    "
  ];
  echo "<select id='restoran'>";
  echo $array[$id];
  echo "</select><span class='number_table'></span>";
  
}
?>