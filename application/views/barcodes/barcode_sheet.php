<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $this->lang->line('items_generate_barcodes'); ?></title>
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/barcode_font.css" />
<style type="text/css">
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}

</style>
	</head>
<!--<body  class=<?php echo "font_".$this->barcode_lib->get_font_name($barcode_config['barcode_font']); ?> 
    style="font-size:<?php echo $barcode_config['barcode_font_size']; ?>px">-->
<body onLoad="print_doc()" class=<?php echo "font_".$this->barcode_lib->get_font_name($barcode_config['barcode_font']); ?> 
    style="font-size:<?php echo $barcode_config['barcode_font_size']; ?>px">
	<table cellspacing=<?php echo $barcode_config['barcode_page_cellspacing']; ?> width='<?php echo $barcode_config['barcode_page_width']."%"; ?>' >
		<tr>
			<?php
			$x = 0;
			$count = 0;
			do{
			foreach($items as $item)
			{
				if ($count % $barcode_config['barcode_num_in_row'] == 0 and $count != 0)
				{
					echo '</tr><tr>';
				}
				echo '<td>' . $this->barcode_lib->display_barcode($item, $barcode_config) . '</td>';
				++$count;
			    $item_qty = 3 - 1;//$item['custom1'];
			}
			$x++;
				}
			while($x <= $item_qty);
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
	self.close();
}	
</script>
</html>
