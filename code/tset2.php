<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

  <?php
	  include "DatabaseCon.php";
	  $db=new DatabaseCon;
	  $s2="select * from event_details";
	  $rs2=$db->selectData($s2);
	  while($row2=mysql_fetch_array($rs2))
	  {
		  
		  ?>
           <div>
        <select>
            
            <option value=""><?php echo $row2['category'];?></option>

        </select>
    </div>
         <?php
	   }
		    ?>
<body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>


    <div class="red box">
     <tr>
    <td class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject</td>
    <td><input type="text" name="subject"class="tbox"required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr><tr><td>&nbsp;</td></tr>
    
    </div>
    <div class="green box"> <tr>
    <td class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</td>
    <td><input name="file" type="file"class="tbox"required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr><tr><td>&nbsp;</td></tr></div>
    <div class="blue box">
    <tr>
    <td class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject</td>
    <td><input type="text" name="subject"class="tbox"required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
  </tr><tr><td>&nbsp;</td>
  <tr>
    <td class="ll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</td>
    <td><input name="file" type="file"class="tbox"required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr><tr><td>&nbsp;</td></tr></tr>
  
    </div>
</body>
</html>
</body>
</html>