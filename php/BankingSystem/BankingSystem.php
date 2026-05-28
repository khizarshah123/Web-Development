<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Bank System</title>
</head>
<body>

<form action="BankingSystem.php" method="post">

    <h1>Bank System</h1>
    <ol>
    <li>Account Details</li>
    <li>Balance Inquiry</li>
    <li>Deposit Amount</li>
    <li>Withdraw Amount</li> 
    </ol>
       
    <br>
     Enter Choice 
    <input type="number" placeholder="Choice" name="choice">
    <button type="submit" name="submitchoicebtn">Submit</button>

</form>

</body>
</html>


<?php

$name = 'Khizar';
$Balance = '5000';
$Accountpin =  '0088';


if(isset($_POST['submitchoicebtn']))
{
    $Choice = $_POST['choice'];

    switch($Choice)

{
    case 1: 
    echo('<br>Choice Selected : '.$Choice);
    echo('<br><br>Welcome mr : '.$name);
    echo(' 
    <form action = "BankingSystem.php"  method = "post" >  
    <br>
    <input type = "hidden"  placeholder = "Choice" name = "choice" value = "1"> 
    Enter your Pincode
    <input type = "number"  placeholder = "Pincode" name = "pincode">
    <button type = "Submit" name = "submitpincodebtn">Check Pin</button>
     </form>
    ');

    break;

    case 2: 
    echo('<br>Choice Selected : '.$Choice);
    echo('<br><br>Welcome mr : '.$name);
    echo(' 
      <form action = "BankingSystem.php"  method = "post" >  
    <br>
    <input type = "hidden"  placeholder = "Choice" name = "choice" value = "2"> 
    Enter your Pincode
    <input type = "number"  placeholder = "Pincode" name = "pincode" >
    <button type = "Submit" name = "submitpincodebtn">Check Pin</button>
     </form>
    ');
    break;
    

    case 3:
    echo('<br>Choice Selected : '.$Choice);
    echo('<br><br>Welcome mr : '.$name);
    echo(' 
    <form action = "BankingSystem.php"  method = "post" >  
    <br>
    <input type = "hidden"  placeholder = "Choice" name = "choice" value = "3"> 
    Enter your Pincode
    <input type = "number"  placeholder = "Pincode" name = "pincode" >
    <button type = "Submit" name = "submitpincodebtn">Check Pin</button>
     </form>
    ');
    break;

    case 4:
    echo('<br>Choice Selected : '.$Choice);
    echo('<br><br>Welcome mr : '.$name);
    echo(' 
    <form action = "BankingSystem.php"  method = "post" > 
    <br> 
    <input type = "hidden"  placeholder = "Choice" name = "choice" value = "4"> 
    Enter your Pincode
    <input type = "number"  placeholder = "Pincode" name = "pincode" >
    <button type = "Submit" name = "submitpincodebtn">Check Pin</button>
     </form>
    ');
    break;

    default : echo('<br>Invalid Choice');

}

}



if(isset($_POST['submitpincodebtn']))
{
   $Pincode = $_POST['pincode'];
   $Choice = $_POST['choice'];
   
   switch($Choice)
   {
      case 1:
      if($Pincode==$Accountpin)
        {
           echo('<h1>Complete Account Details</h1>');
           echo('Name : '.$name);
           echo('<br>Balance : '.$Balance);
           echo('<br>Pincode : '.$Pincode);
        }

        else 
            {
               echo('<br>Check Your Pin Code Try Again');
            }

            break;
       
      case 2:
      if($Pincode==$Accountpin)
        {

           echo('<br>Your current balance is : '.$Balance);
           
        }

        else 
            {
               echo('<br>Check Your Pin Code Try Again');
            }

            break;

     case 3:
      if($Pincode==$Accountpin)
        {

           echo('
           <br>
           <form action = "BankingSystem.php" method = "post">  
           Enter Amount to Deposit 
           <input type = "number" placeholder = "Deposit" name = "deposit">
           <button type = "submit" name = "depositbtn">Deposit</button>
           </form>
           ');
           
        }

        else 
            {
               echo('<br>Check Your Pin Code Try Again');
            }

            break;

        case 4:

             if($Pincode==$Accountpin)
         {
           echo('
           <br>
           <form action = "BankingSystem.php" method = "post">  
           Enter Amount to Withdraw 
           <input type = "number" placeholder = "Withdraw" name = "withdraw">
           <button type = "submit" name = "withdrawbtn">Withdraw</button>
           </form>
           ');
           
         }

        else 

            {
               echo('<br>Check Your Pin Code Try Again');
            }

            break;

            default : echo('<br>Invalid Choice');

   }
   
}

if(isset($_POST['depositbtn']))
  {
      $Deposit = $_POST['deposit'];

if($Deposit != '')
    {
       echo('<br>Thanks For Deposit Amount ');
       echo('<br>Previous Balance is : '.$Balance);
       echo('<br>Desposit amount is : '.$Deposit);

       $newbalance = $Balance += $Deposit;

       echo('<br>New Balance  is : '.$newbalance);

    }

else
    {
        echo('<br>Empty deposit amount');
    }


  }


  if(isset($_POST['withdrawbtn']))
    {
       $Withdraw = $_POST['withdraw'];

       if($Withdraw < $Balance)
        {
           echo('<br>Previous Balance is : '.$Balance);
           echo('<br>Withdraw amount is  : '.$Withdraw);
           $Newbalance =  $Balance -= $Withdraw;
           echo('<br>New Balance is  : '.$Newbalance);
        }

        else if($Withdraw > $Balance)
        {
             echo('<br>Sorry Your Withdraw Request Fail');
        }
    
    }


?>