<?php 		
	
class person 
{				
	protected $cnic;		
	protected $fname;
	protected $lname;
	protected $address;		
	protected $phoneNumber;
	protected $email;
	protected $creditCardNo;		
	

	function __construct($cnic,$fname,$lname,$address,$phoneNumber,$email,$creditCardNo)
	{		
		$this->cnic = $cnic;
		$this->fname = $fname;
		$this->lname = $lname;
		$this->address = $address;
		$this->phoneNumber = $phoneNumber;
		$this->email = $email;
		$this->creditCardNo = $creditCardNo;
	}		
 
		
 	function get_cnic()
	{
		return $this->cnic;
	}
	function get_fname()
	{
		return $this->fname;
	}
	function get_lname()
	{
		return $this->lname;
	}
	function get_address()
	{
		return $this->address;
	}
	function get_phoneNumber()
	{
		return $this->phoneNumber;
	}
	function get_email()
	{
		return $this->email;
	}
	function get_creditCradNo()
	{
		return $this->creditCardNo;
	}
	function add_cnic($cnic)
	{
		$this->cnic=$cnic;
	}
	function add_fname($fname)
	{
		$this->fname=$fname;
	}
	function add_lname($lname)
	{
		$this->lname=$lname;
	}
	function add_address($lname)
	{
		$this->lname=$lname;
	}
	function add_phoneNumber($phoneNumber)
	{
		$this->phoneNumber=$phoneNumber;
	}
	function add_email($email)
	{
		$this->email=$email;
	}
	function add_creditCradNo($creditCardNo)
	{
		$this->creditCardNo=$creditCardNo;
	}
}

class employee extends person
{
	protected $empId;
	protected $salary;
	function __construct($empId,$salary)
	{
		$this->empId=$empId;
		$this->salary=$salary;
	}
	function get_empId()
	{
		return $this->empId;
	}
	function get_salary()
	{
		return $this->salary;
	}
	function add_empId($empId)
	{
		$this->empId=$empId;
	}
	function add_salary($salary)
	{
		$this->salary=$salary;
	}
}

class customer extends person
{
	protected $custId;
	function __construct($custId)
	{
		$this->custId=$custId;
	}
	function get_custId()
	{
		return $this->custId;
	}
	function add_custId($custId)
	{
		$this->custId=$custId;
	}
}


class companyAffiliated extends customer
{
	private $compName;
	private $discount;
	function __construct($compName,$discount)
	{
		$this->compName=$compName;
		$this->discount=$discount;
	}
	function get_compName()
	{
		return $this->compName;
	}
	function get_discount()
	{
		return $this->discount;
	}
	function add_compName($compName)
	{
		$this->compName=$compName;
	}
	function add_discount($discount)
	{
		$this->discount=$discount;
	}
}
class frontDesk extends employee
{
	private $time;
	private $username;
	private $password;
	function __construct($time,$username,$password)
	{
		$this->time=$time;
		$this->username=$username;
		$this->password=$password;
	}
	function get_time()
	{
		return $this->time;
	}
	function get_username()
	{
		return $this->username;
	}
	function get_password()
	{
		return $this->password;
	}
	function add_username($username)
	{
		$this->username=$username;
	}
	function add_password($password)
	{
		$this->password=$password;
	}
}

class manager extends employee
{
	protected dept;
	protected username;
	protected password;
	function __construct($dept,$username,$password)
	{
		$this->dept=$dept;
		$this->username=$username;
		$this->password=$password;
	}
	function get_dept()
	{
		return $this->dept;
	}
	function get_username()
	{
		return $this->username;
	}
	function get_password()
	{
		return $this->password;
	}
		function add_username($username)
	{
		$this->username=$username;
	}
	function add_password($password)
	{
		$this->password=$password;
	}
}

class buffet
{
	protected $breakfast;
	protected $lunch;
	protected $dinner;
	function __construct($breakfast,$lunch,$dinner)
	{
		$this->breakfast=$breakfast;
		$this->lunch=$lunch;
		$this->dinner=$dinner;
	}
	function get_breakfast()
	{
		return $this->breakfast;
	}
	function get_lunch()
	{
		return $this->lunch;
	}
	function get_dinner()
	{
		return $this->dinner;
	}
}

class onOrder
{
	protected $time;
	function __construct($time)
	{
		$this->time=$time;
	}
	function get_time()
	{
		return $this->time;
	}
}

class dining
{
	private $buffet;
	private $onOrder;
	function __construct(buffet $buffet,onOrder $onOrder)
	{
		$this->buffet = $buffet;
		$this->onOrder = $onOrder;
	}
	function get_BuffetInstance()
	{
		return $this->buffet;
	}
	function get_onOrderInstance()
	{
		return $this->onOrder;
	}
}

class events
{
	protected $matrimony;
	protected $birthday;
	protected $conference;
	protected $capacity;
	protected $price;
	protected $date;
	function __construct($matrimony,$birthday,$conference,$capacity,$price,$date)
	{
		$this->matrimony=$matrimony;
		$this->birthday=$birthday;
		$this->conference=$conference;
		$this->capacity=$capacity;
		$this->price=$price;
		$this->date=$date;
	}
	function get_matrimony()
	{
		return $this->matrimony;
	}
	function get_birthday()
	{
		return $this->birthday;
	}
	function get_conference()
	{
		return $this->conference;
	}
	function get_capacity()
	{
		return $this->capacity;
	}
	function get_price()
	{
		return $this->price;
	}
	function get_date()
	{
		return $this->date;
	}
}

class room
{
	protected $roomId;
	protected $capacity;
	protected $price;
	function __construct($roomId,$capacity,$price)
	{
		$this->roomId=$roomId;
		$this->capacity=$capacity;
		$this->price=$price;
	}
	function get_roomId()
	{
		return $this->roomId;
	}
	function get_capacity()
	{
		return $this->capacity;
	}
	function get_price()
	{
		return $this->price;
	}
}

class facility
{
	protected $spa;
	protected $gym;
	protected $swimming;
	protected $sports;
	protected $price;
	function __construct($spa,$gym,$swimming,$sports,$price)
	{
		$this->spa=$spa;
		$this->gym=$gym;
		$this->swimming=$swimming;
		$this->sports=$sports;
		$this->price=$price;
	}
	function get_spa()
	{
		return $this->spa;
	}
	function get_gym()
	{
		return $this->gym;
	}
	function get_swimming()
	{
		return $this->swimming;
	}
	function get_sports()
	{
		return $this->sports;
	}
	function get_price()
	{
		return $this->price;
	}
}

class service
{
	protected $valet;
	protected $food;
	protected $cleaning;
	protected $price;
	function __construct($valet,$food,$cleaning,$price)
	{
		$this->valet=$valet;
		$this->food=$food;
		$this->cleaning=$cleaning;
		$this->price=$price;
	}
	function get_valet()
	{
		return $this->valet;
	}
	function get_food()
	{
		return $this->food;
	}
	function get_cleaning()
	{
		return $this->cleaning;
	}
	function get_price()
	{
		return $this->price;
	}
}

class package
{
	protected $pid;
	protected $room;
	protected $facility;
	protected $service;
	protected $date
	function __construct($pid,room $room,facility $facility,service $service,$date)
	{
		$this->pid=$pid;
		$this->room=$room;
		$this->facility=$facility;
		$this->service=$service;
		$this->date=$date;
	}
	function get_pid()
	{
		return $this->pid;
	}
	function get_roomInstance()
	{
		return $this->room;
	}
	function get_facilityInstance()
	{
		return $this->facility;
	}
	function get_serviceInstance()
	{
		return $this->service;
	}
	function get_date()
	{
		return $this->date;
	}
}

class residence
{
	protected $package;
	function __construct(package $package)
	{
		$this->package=$package;
	}
	function get_packageInstance()
	{
		return $this->package;
	}
}

class billing
{
	protected $price;
	protected $bilId;
	function __construct($price,$bilId)
	{
		$this->price=$price;
		$this->bilId=$bilId;
	}
	function get_price()
	{
		return $this->price;
	}
	function get_bilId()
	{
		return $this->bilId;
	}		
}

class hotel
{
	protected $dining;
	protected $residence;
	protected $events;
	protected $billing;
	function __construct(dining $dining,residence $residence,billing $billing)
	{
		$this->dining=$dining;
		$this->residence=$residence;
		$this->events=$events;
		$this->billing=$billing;
	}
	function get_diningInstance()
	{
		return $this->dining;
	}
	function get_residenceInstance()
	{
		return $this->residence;
	}
	function get_eventsInstance()
	{
		return $this->events;
	}
	function get_billingInstance()
	{
		return $this->billing;
	}
}
class hotelCasterly
{
	protected $person;
	protected $hotel;
	function __construct(person $person,hotel $hotel)
	{
		$this->person=$person;
		$this->hotel=$hotel;
	}
	function get_personInstance()
	{
		return $this->person;
	}
	function get_hotelInstance()
	{
		return $this->person;
	}
}

class eventManager extends manager
{
	protected $events;
	function __construct(events $events)
	{
		$this->events=$events;
	}
	function get_eventsInstance()
	{
		return $this->events;
	}
}

class diningManager extends manager
{
	protected $dining;
	function __construct(dining $dining)
	{
		$this->dining=$dining;
	}
	function get_diningInstance()
	{
		return $this->dining;
	}
}

class residenceManager extends manager
{
	protected $residence;
	function __construct(residence $residence)
	{
		$this->residence=$residence;
	}
	function get_residenceInstance()
	{
		return $this->residence;
	}
}

class hotelManager extends manager
{
	protected $employee;
	protected $hotel;
	function __construct(employee $employee,hotel $hotel)
	{
		$this->employee=$employee;
		$this->hotel=$hotel;
	}
	function get_employeeInstance()
	{
		return $this->employee;
	}
	function get_hotelInstance()
	{
		return $this->hotel;
	}
}
?>