<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $this->lang->line('items_generate_barcodes'); ?></title>
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/barcode_font.css" />

	</head>
<!--<body  class=<?php echo "font_".$this->barcode_lib->get_font_name($barcode_config['barcode_font']); ?> 
    style="font-size:<?php echo $barcode_config['barcode_font_size']; ?>px">-->
<body onLoad="print_doc()" class=<?php echo "font_".$this->barcode_lib->get_font_name($barcode_config['barcode_font']); ?> 
    style="font-size:<?php echo $barcode_config['barcode_font_size']; ?>px">
	<table cellspacing=<?php echo $barcode_config['barcode_page_cellspacing']; ?> width='<?php echo $barcode_config['barcode_page_width']."%"; ?>' >
		<tr>
            <?php
               $count = 0;
               $count_items = 0;
			   $item['barcodes'] = 0;
               $qty = array();
               $num_row = $barcode_config['barcode_num_in_row'];
               
                          $item_arr = array();
                              foreach($items as $item)
                              {
                              	if ($item['barcodes'] == " " or $item['barcodes'] <= 0)
								{
							$qty[] = 1;							
								}
								else
								{
								$qty[] = $item['barcodes'];
								}					
							$item_arr[] = $item;              						
               				
               			   }
               
                       //Below loop counts total quantity of all items across all items for which BC is to be printed
                        for($i=0;$i<count($items);$i++)
                            {
                             for($j=0;$j<$qty[$i];$j++)
                              {
                                $item[$count] = $items[$i];
                                  $count++;
                              }
                            }            
            
               		   $count_items = $i;
               
                          $x = 0;
                           for($i=0;$i<$count/$num_row;$i++)
                            {
                                echo "<tr>";
                             
                             for($j=0;$j<$num_row;$j++)
                            {
                                echo "<td>";
                                if($x < $count)
								{
               				 echo  $this->barcode_lib->display_barcode($item[$x], $barcode_config);
								}
                                else
								{
                                echo "";
                                  echo "</td>";
								}
							 $x++;
               				 
                            }
                              echo '</tr>';
                            }
               			 ?>
         </tr>
	</table>
	
</div>
	</body>

<script type="text/javascript">
 function print_doc()
  {
   jsPrintSetup.clearSilentPrint();
   jsPrintSetup.setOption('printSilent', 1);
  	jsPrintSetup.print();
	 //window.print(); 
	self.close();
}	
</script>
</html>
