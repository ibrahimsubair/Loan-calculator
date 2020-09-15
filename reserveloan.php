<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
<link href="css/loncalc.css" rel="stylesheet">








<script>
  let active=0;
function calculateResults(){


  if(active==1){
    var tableCont=document.querySelector('#table-container');
    (tableCont.childNodes).forEach(tablee => {
      tablee.remove();
    });
    active=0;
    console.log(active);
  }
  active++; 
  console.log(active);
    var amount = document.getElementById('amount');
    var interest = document.getElementById('interest');
    var timePeriod = document.getElementById('time');

    var principal = parseFloat(amount.value); 
    var i=parseFloat(interest.value) /100; 
    var n=parseFloat(timePeriod.value) ; 
   /*  var answer= principal/(Math.pow(1+i,n)-1); */
/*     var monthly=i * principal / (1 - Math.pow(1 + i, -n)); */
    /* i * principal / (1 - Math.pow(1 + i, -n)); answer/Math.pow(i(1+i),n);*/
    /* var first=(Math.pow(1+i,n)-1);
    var second=(Math.pow((1+i),n)i);
    var third=first/second; */
    var monthly=i * principal / (1 - Math.pow(1 + i, -n)); 

    /* Amount of interest for each installment = Applicable rate of interest * Remaining loan amount */
    /* principal/(Math.pow(1+i,n)-1)/Math.pow(i(1+i),n); */
    

    let totalAmount, totalInterest,monthlyPayment;
  if (isFinite(monthly)) {
    // calculate the total amount paid
    // totalAmount = payment * number of payments (n)
    totalAmount = monthly*n;
    // calculate the interest paid
    // totalInterest = totalAmount - principal
    totalInterest = totalAmount - principal;

    monthlyPayment= totalAmount/n;
    //monthlyPayment=i*totalAmount;
    }else{ // display an alert message
      alert('Please insert valid values');
  }

    document.getElementById('payment').innerHTML="Total Paid= "+totalAmount.toFixed(2);
    document.getElementById('payment1').innerHTML="Total Interest= "+totalInterest.toFixed(2);
    document.getElementById('payment3').innerHTML="Monthly paid= "+monthlyPayment.toFixed(2);

    









    const valueTable=document.createElement('table');
valueTable.id='valueTable';

const headerRow=document.createElement('tr');

const monthNoCol=document.createElement('th');
const monthInterestCol=document.createElement('th');
const monthprincipalCol=document.createElement('th');
const balanceCol=document.createElement('th');


headerRow.appendChild(monthNoCol);
headerRow.appendChild(monthInterestCol);
headerRow.appendChild(monthprincipalCol);
headerRow.appendChild(balanceCol);

monthNoCol.innerText = 'Month';
monthInterestCol.innerText = 'Interest';
monthprincipalCol.innerText = 'Principal';
balanceCol.innerText = 'Balance';


valueTable.appendChild(headerRow);

const defaultRow=document.createElement('tr');

const defaultMonth=document.createElement('td');
const defaultInterest=document.createElement('td');
const defaultPrincipal=document.createElement('td');
const defaultBalance=document.createElement('td');


defaultMonth.innerText='0';
defaultInterest.innerText=' ';
defaultPrincipal.innerText='';
defaultBalance.innerText=principal;




defaultRow.appendChild(defaultMonth);
defaultRow.appendChild(defaultInterest);
defaultRow.appendChild(defaultPrincipal);
defaultRow.appendChild(defaultBalance);


valueTable.appendChild(defaultRow);

var balance=principal;
var  interest;

 
 var MonthlyPrincipal;

for(var k=0;k<n;k++){
  const nextRow=document.createElement('tr');
interest=i*balance;

MonthlyPrincipal=monthlyPayment-interest;
balance=balance-MonthlyPrincipal;





 const nextMonth=document.createElement('td');
 const nextInterest=document.createElement('td');
 const nextPrincipal=document.createElement('td');
 const nextBalance=document.createElement('td');

 nextMonth.innerText=(k+1);
 nextInterest.innerText=interest.toFixed(2);
 nextPrincipal.innerText=MonthlyPrincipal.toFixed(2);
 nextBalance.innerText=balance.toFixed(2);
 
 nextRow.appendChild(nextMonth);
 nextRow.appendChild(nextInterest);
 nextRow.appendChild(nextPrincipal);
 nextRow.appendChild(nextBalance);


 valueTable.appendChild(nextRow);
 

}


const tableCon = document.getElementById('table-container');
tableCon.appendChild(valueTable);








  
}


function myFunction() {
  /* document.getElementById("myForm").reset(); */
  payment.innerText=' ';
  payment1.innerText=' ';
  payment3.innerText=' ';
  valueTable.innerText=' '; 
  document.getElementById('myForm').reset();
  window.location.reload();


  }






</script>
</head>
<body>






<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2 class="text-center font-weight-bold">Name Of company will Appear Here</h2>
<p class="mt-5 ml-3">Fill the fields in the form below with the respective figures</p>

<form id="myForm" onsubmit="event.preventDefault(); ">
<label class="font-weight-bold small">Loan Amount:
<input type="number" name="principal" class="input-cls" id="amount" value=""  >
</label>

<label class="font-weight-bold small"> Months:
<input type="number" name="month"  class="input-cls" id="time" value="" >
</label>

<label class="font-weight-bold small">Interest Rate:
<input type="number" name="rate"  class="input-cls" id="interest" value="5"  readonly>
</label>

<lablel class="ml-3 font-weight-bold small">Method:

<select class="mdb-select md-form input-cls ml-3" >
<!--   <option class="" value=" " disabled selected>Interest Type</option> -->
  <option class="" value="1"  > Reducing Balance</option>
  <option class="" value="2">Simple Interest</option>

</select>
</label>

<div class="subdivcls">
<input type="submit" name="calc"  class="btn btn-blue-grey" value="Calculate" onclick="calculateResults()">
</div>
<div class="cleardivcls"> 
<input type="button" name="calc"  class="btn btn-blue-grey" value="Start Over" onclick="myFunction()">
</div>

<br>
<h4 id="payment"></h4>
<h4  id="payment1"></h4>
<h4  id="payment3"></h4>


<div id="table-container">

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>














































































































































































</form> 
</body>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

 <script src="myscript.js"></script> 
</html>