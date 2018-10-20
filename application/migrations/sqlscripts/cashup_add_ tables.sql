ALTER TABLE `ospos_cash_up`  
  ADD COLUMN `expected_closed_amount_cash` decimal(15,2) NOT NULL,
  ADD COLUMN `expected_closed_amount_card` decimal(15,2) NOT NULL,
  ADD COLUMN `expected_closed_amount_check` decimal(15,2) NOT NULL,
  ADD COLUMN `expected_closed_amount_total` decimal(15,2) NOT NULL;
 

ALTER TABLE `ospos_sales_payments`   
  ADD COLUMN `total_amount` decimal(15,2) NOT NULL;