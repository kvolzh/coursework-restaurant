<script>
  var vars = {};
  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
    vars[key] = value;
    });
  console.log(vars);
  $(function() {
    $(".city").change(function(){
      var id = $(this).val();
      $.ajax({
        type: "POST",
        url: "spis/restoran.php",
        data: {id: id, user_id: vars},
        success: function(data){
          $(".restoran").html(data);
        }
      });
    });
  });
</script>
<select class="city">
  <option value="0">Выберите город</option>
  <option value="1">Москва</option>
  <option value="2">Бугуруслан</option>
</select>
<span class="restoran"></span>