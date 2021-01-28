<!DOCTYPE html>
<html>
<head>
<style>
.title {
  background-color: #005eaa;
  color: white;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
  border-style: double;
}

#myProgress {
  width: 30%;
  background-color: rgba(0, 0, 0, 0.8) ;
}
</style>

<!--Adding script for auto-refreshing the -->
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
?>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</head>

<?php
$hostname = gethostname();


#Running shell commands inside PHP to collect data
$total_memory = shell_exec("free | awk 'NR == 2 {print $2}'");
$used_memory = shell_exec("free | awk 'NR == 2 {print $3}'");
$percentage_used = ($used_memory*100)/$total_memory;
$percentage_used=round($percentage_used,2);


echo "<u><h2>Memory utilized:</h2></u>";

echo "
<div id='myProgress' style='border-style: solid; border-radius: 25px'>
<div id='myBarUsedMem'
style='width: $percentage_used%; height: 40px; background-color: #54ce36; text-align: center; line-height: 40px;border-radius: 25px'>
<b> $percentage_used% </b>
</div>
</div>";

?>

<!--Adding script for the progress bar-->
<script language="javascript">
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}
</script>

</html>