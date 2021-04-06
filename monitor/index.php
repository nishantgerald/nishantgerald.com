<?php include_once '../header.php'; ?>

<head>
<!--Adding script for auto-refreshing the -->
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "30";
?>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</head>

<!-- Add your site or app content here -->

 <div class="container" style="margin-top: 3cm">
   <div class="row">
     <div class="col-xs-12">
        
      <div class="card">
          <div class="card-block" style='padding: 4rem'>
            <p>Please note that this page is refreshed every 30 seconds</p>
            <?php
            $hostname = gethostname();

            #Running shell commands inside PHP to collect data
            $total_memory = shell_exec("free | awk 'NR == 2 {print $2}'");
            $used_memory = shell_exec("free | awk 'NR == 2 {print $3}'");
            $percentage_mem_used = ($used_memory*100)/$total_memory;
            $percentage_mem_used=round($percentage_mem_used,2);
            $percentage_cpu_used= trim(shell_exec("mpstat | awk 'NR==4 {print $6*100}'"));
            echo "<div style='padding:25px'></div>";
            echo "<u><h2>Memory utilized:</h2></u>";

            echo "
            <div id='mem_bar' style='border-style: solid; border-radius: 25px'>
            <div id='myBarUsedMem'
            style='width: $percentage_mem_used%; height: 40px; background-color: #54ce36; text-align: center; line-height: 40px;border-radius: 25px'>
            <b> $percentage_mem_used% </b>
            </div>
            </div>";

            echo "<div style='padding:25px'></div>";

            echo "<u><h2>CPU utilized:</h2></u>";

            echo "
            <div id='cpu_bar' style='border-style: solid; border-radius: 25px'>
            <div id='myBarUsedCpu'
            style='width: $percentage_cpu_used%; height: 40px; background-color: #54ce36; text-align: center; line-height: 40px;border-radius: 25px'>
            <b> $percentage_cpu_used% </b>
            </div>
            </div>";

            ?>

          </div>
        </div>
     </div>
   
    </div>
 </div>


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

<?php include_once '../footer.php'; ?>
</html>
