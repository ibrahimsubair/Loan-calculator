<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
<link href="css/loncalc.css" rel="stylesheet">




</head>
<body>
<form id="form" onsubmit="event.preventDefault(); calcloan();">
<label>Loan Amount:
<input type="number" name="principal" class="input-cls" id="principal" value=""  >
</label>

<label> Months:
<input type="number" name="month"  class="input-cls" id="month" value="" >
</label>

<label>Interest Rate:
<input type="number" name="rate"  class="input-cls" id="rate" value="5"  readonly>
</label>

<lablel>Method:
<select class="mdb-select md-form">
  <option value="" disabled selected>Interest Type</option>
  <option value="1">Reducing Balance</option>
<!--   <option value="2">Option 2</option>
  <option value="3">Option 3</option> -->
</select><br>

</label>
<input type="submit" name="calc"  class="sub-cls" value="Calculate" onclick="calcloan()">
<input type="submit" name="calc"  class="sub-cls" value="Start Over">

<p id="payment"></h2>
<h2 id="payment1"></h2>
<h2 id="payment2"></h2>

<div id="table-container">

</div>






</form> 

   
</body>


<script>

function calcloan(){

  var principal = document.getElementById('principal');
    var rate = document.getElementById('rate')/100;
    var month = document.getElementById('month');

    let test1=Math.pow(1+rate,month)-1; 
    let test2=rate*Math.pow(1+rate,month);
    let test3 =test1/test2;

let payment=principal/test3;
let totalAmount, totalInterest;
  if (isFinite(payment)) {
    // calculate the total amount paid
    // totalAmount = payment * number of payments (n)
    totalAmount = payment*month;
    // calculate the interest paid
    // totalInterest = totalAmount - principal
    totalInterest = totalAmount - principal;

    
    //monthlyPayment=i*totalAmount;
    }else{ // display an alert message
      alert('Please check the values entered');
  }
document.getElementById('payment').innerHTML="Monthly Payment= "+payment.toFixed(2);
document.getElementById('payment1').innerHTML="Total Paid= "+totalAmount.toFixed(2);
document.getElementById('payment2').innerHTML="Total Interest= "+totalInterest.toFixed(2);


const valueTable=document.createElement('table');
valueTable.id="valueTable";

const headerRow=document.createElement('tr');

const monthNoCol=document.createElement('th');
const monthInterestCol=document.createElement('th');
const monthprincipalCol=document.createElement('th');
const balanceCol=document.createElement('th');


headerRow.appendChild(monthNoCol);
headerRow.appendChild(monthInterestCol);
headerRow.appendChild(monthprincipalCol);
headerRow.appendChild(balanceCol);

valueTable.appendChild(headerRow);

const defaultRow=document.createElement('tr');
const defaultMonth=document.createElement('td');
const defaultInterest=document.createElement('td');
const defaultPrincipal=document.createElement('td');
const defaultBalance=document.createElement('td');


defaultMonth.innerText='0';
defaultInterest.innerText='';
defaultPrincipal.innerText='';
defaultBalance.innerText=principal;


defaultRow.appendChild(defaultMonth);
defaultRow.appendChild(defaultInterest);
defaultRow.appendChild(defaultPrincipal);
defaultRow.appendChild(defaultBalance);

valueTable.appendChild(defaultRow);



for(var i=0;i<month;i++){
  const nextRow=document.createElement('tr');
  var balance=principal;
 var  interest=0.05 *principal;
 var rprincipal =payment-interest;
 var newBalance=balance-payment;
 newBalance=balance;


 let nextMonth=document.createElement('td');
 let nextInterest=document.createElement('td');
 let nextPrincipal=document.createElement('td');
 let nextBalance=document.createElement('td');

 nextMonth.innerText=(i+1).toString();
 nextInterest.innerText=interest.toString();
 nextPrincipal.innerText=rprincipal.toString();
 nextBalance.innerText=newBalance.toString();

 valueTable.appendChild(nextRow);

}

const tableCon = document.getElementById('table-container');
tableCon.appendChild(valueTable);



}




</script>

























































































































<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<!-- <script src="myscript.js"></script> -->

</html>