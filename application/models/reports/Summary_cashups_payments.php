<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Summary_report.php");

class Summary_cashups_payments extends Summary_report
{
	protected function _get_data_columns()
	{
		return array(
			array('payment_type' => $this->lang->line('reports_payment_type')),
			array('report_count' => $this->lang->line('reports_count')),
			array('amount_tendered' => $this->lang->line('sales_amount_tendered'), 'sorter' => 'number_sorter'));
	}

	public function getData(array $inputs)
	{		
		$this->db->select('sales_payments.payment_type, COUNT(sales_payments.sale_id) AS count, SUM(sales_payments.payment_amount) AS payment_amount, SUM(sales_payments.total_amount) AS total_amount');
		$this->db->from('sales_payments AS sales_payments');
		$this->db->join('sales AS sales', 'sales.sale_id = sales_payments.sale_id');

		$this->_where($inputs);

		$this->db->group_by("payment_type");

		$payments = $this->db->get()->result_array();

		

		return $payments;
	}
}
?>
