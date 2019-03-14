ALTER TABLE `ospos_cash_up`  
  ADD COLUMN `closed_amount_giftcard` decimal(15,2) NOT NULL,
  ADD COLUMN `expected_closed_amount_cash` decimal(15,2) NOT NULL,
  ADD COLUMN `expected_closed_amount_card` decimal(15,2) NOT NULL,
  ADD COLUMN `expected_closed_amount_giftcard` decimal(15,2) NOT NULL,
  ADD COLUMN `expected_closed_amount_check` decimal(15,2) NOT NULL,
  ADD COLUMN `expected_closed_amount_due` decimal(15,2) NOT NULL,
  ADD COLUMN `expected_closed_amount_total` decimal(15,2) NOT NULL;
 

