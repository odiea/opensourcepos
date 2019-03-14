DROP TABLE IF EXISTS `ospos_items`;
CREATE TABLE IF NOT EXISTS `ospos_items` (  
  `printed` tinyint(1) NOT NULL DEFAULT '0',  
  `barcodes` int(5) NOT NULL)  


