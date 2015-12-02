<?php

	function apprentice($id)
	{
		$ci = get_model();
		$data['employee'] = $ci->db->where('id',$id)->get('employee')->result();
		$check = $data['employee'][0]->firstday;
		$day = strtotime("+3 month");
		$now = strtotime("now");
		$day = $day - $now;
		$check = strtotime($check);
		$get = $check + $day;
		$get = date(Y."-".m."-".d,$get);
		$day3 = get_day($get);
		$month = get_month($get);
		$year = get_year($get);
		$year = gen_year($year);
		$day3 = check_zero_num($day3);
		$end['end'] = $day3." ".$month." ".$year;
		$end['end2'] = $month." ".$year;
		return($end);
	}

	function check_apprentice()
	{
		$ci = get_model();
		$data['employee'] = $ci->employee->get_employee();
		for( $num = 0; $num < count($data); $num++)
		{
			$day = date(Y.m.d);
			$check = $data['employee'][0]->firstday;
			$day = strtotime($day);
			$check = strtotime($check);
			$get = $day - $check;
			$get = $get/86400;
			if( $get >= 90 )
			{
			
			}
		}
	}

	function get_apprentice($id)
	{
		$ci = get_model();
		$data['employee'] = $ci->db->where('id',$id)->get('employee')->result();
		$data['employee']->salary = $data['employee']->salary + $data['employee']->raisesalary;
		$data['employee']->raisesalary = "";
		$data['employee']->firstday = date("Y-m-d");
		$ci->db->where("id",$id)->update('employee',$data);
	}

	function fulladdress_employee($id)
	{
		$ci = get_model();
		$data['employee'] = $ci->db->where('id',$id)->get('employee')->result();
		$blank = " ";
		foreach ( $data['employee'] as $get )
		{
			$address = $get->address;
			$amphur = $get->amphur;
			$locality = $get->locality;
			$province = $get->province;
			$postcode = $get->postcode;
			$tel = $get->tel;
			$fulladdress['fulladdress'] = $address.$blank.$amphur.$blank.$locality.$blank.$province.$blank.$postcode.$blank."โทรศัพท์ ".$tel;
			if( $get->fax != "")
			{
				$fax = $get->fax;
				$fulladdress['fulladdress'] = $fulladdress['fulladdress'].$blank."แฟกซ์ ".$fax;
			}
			$ci->db->where('id',$id)->update('employee',$fulladdress);
			return ($fulladdress['fulladdress']);
		}
	}

	