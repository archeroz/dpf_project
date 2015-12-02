<?php    
        
    function get_model() 
	{
		$ci = &get_instance();
		$ci->load->model('employee_model','employee');
		$ci->load->model('company_model','company');
		$ci->load->model('province_model','province');
		$ci->load->library('mpdf/mpdf');
		return($ci);
    }

    function date_eng_to_data($date)
	{
		$year = substr($date,-4);
		$month = substr($date,-8,-5);
		$day = substr($date,-11,-9);
		$month = montheng_to_num($month);
		$date = $year."-".$month."-".$day;
		return($date);
	}
	function check_zero_num($num)
	{
		if(substr($num,0,1) == '0')
		{
			$num = substr($num,1,1);
		}
		return($num);
	}
	function gen_year($year)
	{
		$year = $year + 543;
		return($year);
	}
	function get_year($year)
	{
		$year2 = substr($year,-10,-6);
		return($year2);
	}

	function get_day($day)
	{
		$day2 = substr($day,-2);
		return($day2);
	}

	function get_month($month)
	{
		$month2 = substr($month,-5,-3);
		$month = monthnum_to_thai($month2);
		return($month);
	}

	function get_month_num($month)
	{
		$month2 = substr($month,-5,-3);
		return($month2);
	}

	function monthnum_to_thai($month2)
	{
		if($month2 == '01')
		{
			$month = 'มกราคม';
		}
		else if($month2 == '02')
		{
			$month = 'กุมภาพันธ์';
		}
		else if($month2 == '03')
		{
			$month = 'มีนาคม';
		}
		else if($month2 == '04')
		{
			$month = 'เมษายน';
		}
		else if($month2 == '05')
		{
			$month = 'พฤษภาคม';
		}
		else if($month2 == '06')
		{
			$month = 'มิถุนายน';
		}
		else if($month2 == '07')
		{
			$month = 'พฤษภาคม';
		}
		else if($month2 == '08')
		{
			$month = 'สิงหาคม';
		}
		else if($month2 == '09')
		{
			$month = 'กันยายน';
		}
		else if($month2 == '10')
		{
			$month = 'ตุลาคม';
		}
		else if($month2 == '11')
		{
			$month = 'พฤศจิกายน';
		}
		else if($month2 == '12')
		{
			$month = 'ธันวาคม';
		}
		return($month);
	}

	function montheng_to_num($month)
	{
		if($month == 'Jan')
		{
			$month = '01';
		}
		else if($month == 'Feb')
		{
			$month = '02';
		}
		else if($month == 'Mar')
		{
			$month = '03';
		}
		else if($month == 'Apr')
		{
			$month = '04';
		}
		else if($month == 'May')
		{
			$month = '05';
		}
		else if($month == 'Jun')
		{
			$month = '06';
		}
		else if($month == 'Jul')
		{
			$month = '07';
		}
		else if($month == 'Aug')
		{
			$month = '08';
		}
		else if($month == 'Sep')
		{
			$month = '09';
		}
		else if($month == 'Oct')
		{
			$month = '10';
		}
		else if($month == 'Nov')
		{
			$month = '11';
		}
		else if($month == 'Dec')
		{
			$month = '12';
		}
		return($month);
	}

	function monthnum_to_eng($month)
	{
		if($month == '01')
		{
			$month = 'Jan';
		}
		else if($month == '02')
		{
			$month = 'Feb';
		}
		else if($month == '03')
		{
			$month = 'Mar';
		}
		else if($month == '04')
		{
			$month = 'Apr';
		}
		else if($month == '05')
		{
			$month = 'May';
		}
		else if($month == '06')
		{
			$month = 'Jun';
		}
		else if($month == '07')
		{
			$month = 'Jul';
		}
		else if($month == '08')
		{
			$month = 'Aug';
		}
		else if($month == '09')
		{
			$month = 'Sep';
		}
		else if($month == '10')
		{
			$month = 'Oct';
		}
		else if($month == '11')
		{
			$month = 'Nov';
		}
		else if($month == '12')
		{
			$month = 'Dec';
		}
		return($month);
	}

	function number_to_thai($number)
	{
		if(is_string($number))
		{
			$number = (double)$number;
		}
		//$digit=array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ');
		$num=array('','สิบ','ร้อย','พัน','หมื่น','แสน','','สิบ','ร้อย','พัน','หมื่น','แสน'); 
		$number = explode(".",$number);
		@$c_num[0]=$len=strlen($number[0]); 
		@$c_num[1]=$len2=strlen($number[1]); $convert='';


		$last_number_of_million_without_zero = false;

		// find last number of million that is not zero
		$last_million_index = false;
		if($len > 6)
		{
			$million_str = substr($number[0],0,strlen($number[0])-6);
			for($i=0;$i<strlen($million_str);$i++)
			{
				if($million_str[$i] > 0)
				{
					$last_million_index = $i;
				}
			}
		}


		//คิดจำนวนเต็ม 
		for($n=0;$n< $len;$n++)
		{
			$digit=array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ');
	
			$c_num[0]--;
			//if(@$number[$n] == 0)$digit[$c_digit]=''; 
	
	
			$c_digit=substr($number[0],$n,1);
			if(($c_num[0]==0 || $c_num[0] == 6)&& $c_digit==1)
			{
				if($len == 7 && $c_num[0] == 6)
				{
					$digit[$c_digit]='หนึ่ง';
				}
				else
				{
					$digit[$c_digit]='เอ็ด';
				}
			}
			if(($c_num[0]==0 || $c_num[0] == 6)&& $c_digit==2)$digit[$c_digit]='สอง'; 
			if(($c_num[0]==1 || $c_num[0] == 7)&& $c_digit==2)$digit[$c_digit]='ยี่'; 
			if(($c_num[0]==1 || $c_num[0] == 7)&& $c_digit==1)$digit[$c_digit]=''; 
			if( $c_digit==0)$digit[$c_digit]=''; 
			$convert.=$digit[$c_digit];
			if( $c_digit!=0){ $convert.=$num[$c_num[0]]; }
			if($last_million_index !== false && $last_million_index == $n)
			{
				$convert.="ล้าน";
			}
		} 
		$convert .= 'บาท'; 
		if(@$number[1]==''){ $convert .= 'ถ้วน'; } //คิดจุดทศนิยม 


		for($n=0;$n< $len2;$n++)
		{
			$c_num[1]--; 
			$c_digit=substr($number[1],$n,1);
			
			if($c_num[1]==0&& $c_digit==1)
				$digit[$c_digit]='เอ็ด';
			if($c_num[1]==0&& $c_digit==2)
				$digit[$c_digit]='สอง'; 
			if($c_num[1]==1&& $c_digit==2)
				$digit[$c_digit]='ยี่';
			if($c_num[1]==1&& $c_digit==1)
				$digit[$c_digit]=''; 
			if( $c_digit==0)
				$digit[$c_digit]=''; 
			
			if($c_num[1]==0&& $c_digit==1 && $len2 == 1)
			{
				$convert.=''; 
			}
			else if($c_num[1]==0&& $c_digit==2 && $len2 == 1)
			{
				$convert.='ยี่'; 
			}
			else
			{
				$convert.=$digit[$c_digit]; 
			}
			
			if( $c_digit!=0)
			{ 
				$convert.=$num[$c_num[1]];
			} 
		}
	
		if($len2 == 1)
		{
			$convert .= 'สิบ';
		}
		
		if(@$number[1]!='')
			$convert .= 'สตางค์'; 
	return $convert.='';
	}
?>