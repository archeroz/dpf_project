<?php

	function get_data_pdf($data)
	{
		$ci = get_model();
		$data['employee'] = $ci->db->where('id',$data['id'])->get('employee')->result();
		$day = $data['employee'][0]->firstday;
		$day2 = $data['employee'][0]->lastday;
		$day4 = get_day($day);
		$data['firstday'] = check_zero_num($day4);
		$data['firstmonth'] = get_month($day);
		$data['firstyear'] = get_year($day);
		$data['year'] = gen_year($data['year']);
		$data['thai_salary'] = number_to_thai($data['employee'][0]->salary);
		if(substr($day2,-10,-6) == "0000")
		{
			$data['lastday'] = 'ปัจจุบัน';	
		}
		else
		{
			$day3 = get_day($day2);
			$month = get_month($day2);
			$year = get_year($day2);
			$year = gen_year($year);
			$day3 = check_zero_num($day3);
			$data['lastday'] = $day3." ".$month." ".$year;
		}
		return($data);
	}

	function date_to_pdf($date)
	{
		$day = get_day($date);
		$month = get_month($date);
		monthnum_to_thai($month);
		$year = get_year($date);
		$year = gen_year($year);
		$day = check_zero_num($day);
		$date = $day." ".$month." ".$year;
		return($date);
	}
	
	function get_info($id)
	{
		$ci = get_model();
		fulladdress_company();
		$data['id'] = $id;
		$data['manager'] = $ci->employee->get_manager();
		$data['faction'] = $ci->employee->get_faction();
		$data['witness'] = $ci->employee->get_employee();
		$num1 = 0;
		for( $num = count($data['manager']); $num >= 1; $num--)
		{
			if($data['manager'][$num1]->name_thai != "")
			{
				$name = $data['manager'][$num1]->name_thai;
				$lastname = $data['manager'][$num1]->lastname_thai;
				$data['name_manager'][$num1] = $name." ".$lastname;
			}
			$num1++;
		}
		$num1 = 0;
		for( $num = count($data['manager']); $num >= 1; $num--)
		{
			if($data['manager'][$num1]->position != "")
			{
				$data['position_manager'][$num1] = $data['manager'][$num1]->position;
			}
			$num1++;
		}
		$data['company'] = $ci->company->get_company();
		$data['employee'] = $ci->db->where('id',$data['id'])->get('employee')->result();
		return($data);
	}
	

	function generate_pdf($data)
	{
		$ci = get_model();
		$mpdf=new mPDF('th','A4');
		$mpdf->debug = true;
		$getreport = $ci->load->view("pdf/htmlpdf",$data, TRUE);
			
		$mpdf->WriteHTML($getreport);
		$mpdf->Output();
	}

	function get_information_pdf($id)
	{

		$data = get_input($id);
		generate_pdf($data);
	}

	function generate_pdf2($data)
	{
		$ci = get_model();
		$mpdf=new mPDF('th','A4');
		$mpdf->debug = true;
		$getreport = $ci->load->view("pdf/htmlpdf2",$data, TRUE);
			
		$mpdf->WriteHTML($getreport);
		$mpdf->Output();
	}

	function get_information_pdf2($id)
	{
		$data = get_input($id);
		generate_pdf2($data);
	}

	function generate_pdf3($data)
	{
		$ci = get_model();
		$mpdf=new mPDF('th','A4');
		$mpdf->debug = true;
		$getreport = $ci->load->view("pdf/htmlpdf3",$data, TRUE);
			
		$mpdf->WriteHTML($getreport);
		$mpdf->Output();
	}

	function get_information_pdf3($data)
	{
		$data['fulladdress_employee'] = fulladdress_employee($data['id']);
		$get = apprentice($data['id']);
		$data['apprentice'] = $get['end'];
		$data['end'] = $get['end2'];
		generate_pdf3($data);
	}
	
	function generate_pdf4($data)
	{
		$ci = get_model();
		$mpdf=new mPDF('th','A4');
		$mpdf->debug = true;
		$getreport = $ci->load->view("pdf/htmlpdf4",$data, TRUE);
			
		$mpdf->WriteHTML($getreport);
		$mpdf->Output();
	}

	function get_information_pdf4($data)
	{
		$ci = get_model();
		$data['fulladdress_employeee'] = fulladdress_employee($data['id']);
		$get = apprentice($data['id']);
		$data['apprentice'] = $get['end'];
		$data['end'] = $get['end2'];
		$data['sum_salary'] = $data['employee'][0]->salary + $data['employee'][0]->raisesalary;
		$data['thai_sum_salary'] = number_to_thai($data['sum_salary']);
		$data['thai_raisesalary'] = number_to_thai($data['employee'][0]->raisesalary);
		generate_pdf4($data);
	}
?>