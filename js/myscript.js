

/* function employeepay()
{
    var tax=0.5;
var pension=0.1;

var name= document.f1.fname.value;
var salary=document.f1.salary.value;
var h_allowance=document.f1.Al1.value;
var m_allowance=document.f1.Al2.value;
var w_allowance=document.f1.Al3.value;

var grosspay= parseFloat(salary)+ parseInt(h_allowance); + parseInt(m_allowance)+parseInt(w_allowance) 
var netpay= 0.6* grosspay;
var total_allowance=parseInt(h_allowance)+ parseInt(m_allowance)+parseInt(w_allowance);
var deduction= grosspay-netpay; 
var result1=swal("Employee name:"+name);
var result2=swal("Employee grosspay:"+grosspay);
var result3=swal("Employee total allowance is:"+ total_allowance);
var result4= alert("Employee netpay is:"+netpay)  swal("Good job!", "You clicked the button!", "success");
}
</script> */

/* const amount = document.getElementById('amount');
const interest = document.getElementById('interest');
const timePeriod = document.getElementById('time'); */

function calculateResults(){
    var amount = document.getElementById('amount');
    var interest = document.getElementById('interest');
    var timePeriod = document.getElementById('time');


    var i=parseFloat(interest.value) *amount; 
    var n=parseFloat(timePeriod.value) * 12; 
    var monthly = i * principal / (1 - Math.pow(1 + i, -n));
    document.getElementById('payment').innerHTML="Monthly Payment= "+monthly;
}
 