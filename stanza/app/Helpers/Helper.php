<?php

namespace App\Helpers;


class Helper

{
     public static function displayString($string){
          return $string;
      }

	//$leftMenu;
      public static function leftMenu(){

      		$leftMenu=array(
			
			0=>array('label'=>'Dashboard','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>url('admin/dashboard'),'current'=>'dashboard','msort'=>1,'child'=>array()),
			1=>array('label'=>'Dashboard','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>url('admin/dashboard'),'current'=>'dashboard','msort'=>1,'child'=>array())
			);



//$json_str = json_encode($leftMenu);
      // }
      // function Left_menu(){
	
		$leftMenu=array(
			
			0=>array('label'=>'Dashboard','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>url('admin/dashboard'),'current'=>'dashboard','msort'=>1,'child'=>array()),
				1=>array('label'=>'Manage Students','icon_label'=>'<i class="fa fa-user"></i>','link'=>url('admin/profile'),'current'=>'profile','msort'=>2,'child'=>array()),
				2=>array('label'=>'Manage Profile','icon_label'=>'<i class="fa fa-users"></i>','link'=>url('admin/party'),'current'=>'customers','msort'=>3,'child'=>array()),
				
				3=>array('label'=>'Role Management','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>url('admin/inventory'),'current'=>'inventory','msort'=>4,
							'child'=>array(
								0=>array('label'=>'Add Role','link'=>url('/access/create')),
								1=>array('label'=>'Edit Role','link'=>url('admin/inventory/'))
							)),
				4=>array('label'=>'Manage Facilites','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>'#','current'=>'purchases','msort'=>5,
							'child'=>array(
								0=>array('label'=>'Purchases','link'=>url('admin/purchases')),
								1=>array('label'=>'Purchase Report','link'=>url('admin/purchases/report'))
							)
						),
				5=>array('label'=>'Manage Profile','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>url('admin/party'),'current'=>'customers','msort'=>3,'child'=>array()),

				6=>array('label'=>' Manage Complaints','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>url('admin/stock'),'current'=>'stock','msort'=>8,'child'=>array()),
				7=>array('label'=>'Manage Invoice','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>url('admin/stock'),'current'=>'stock','msort'=>8,'child'=>array()),
				8=>array('label'=>'Manage Hostel','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>url('admin/ledger'),'current'=>'ledger','msort'=>9,'child'=>array()),
				9=>array('label'=>'Manage Event','icon_label'=>'<i class="fa fa-dashboard"></i>','link'=>url('admin/accessmanage'),'current'=>'access','msort'=>2,'child'=>array()),
				10=>array('label'=>'Manage Webiste Content','icon_label'=>'<i class="fa fa-user"></i>','link'=>url('admin/adminuser'),'current'=>'adminuser','msort'=>2,'child'=>array()),
			);
		
		return $leftMenu;
	//	dd($leftMenu);
	}

	public static function lmsort($a, $b) {
   	return $a['msort'] - $b['msort'];
	}	



}