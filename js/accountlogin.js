var accountbtn = document.getElementById("accountbtn");
var withdrawbtn = document.getElementById("widthdrawbtn");
var investbtn = document.getElementById("investbtn");
var transactionbtn = document.getElementById("transactionbtn");


var account = document.getElementById("account");
var withdraw = document.getElementById("withdraw");
var invest = document.getElementById("invest");
var deposit = document.getElementById("deposit");


accountbtn.addEventListener("click", function color(){
    accountbtn.style.color="rebeccapurple";
    withdrawbtn.style.color="darkgray";
    investbtn.style.color="darkgray";
    transactionbtn.style.color="darkgray";
    account.style.display="inline";
    invest.style.display="none";
    withdraw.style.display="none";
    deposit.style.display="none";
});
withdrawbtn.addEventListener("click", function color(){
    withdrawbtn.style.color="rebeccapurple";
    accountbtn.style.color="darkgray";
    investbtn.style.color="darkgray";
    transactionbtn.style.color="darkgray";
    account.style.display="none";
    invest.style.display="none";
    withdraw.style.display="inline";
    deposit.style.display="none";
});
investbtn.addEventListener("click", function color(){
    investbtn.style.color="rebeccapurple";
    accountbtn.style.color="darkgray";
    withdrawbtn.style.color="darkgray";
    transactionbtn.style.color="darkgray";
    account.style.display="none";
    invest.style.display="inline";
    withdraw.style.display="none";
    deposit.style.display="none";
});
transactionbtn.addEventListener("click", function color(){
    transactionbtn.style.color="rebeccapurple";
    accountbtn.style.color="darkgray";
    withdrawbtn.style.color="darkgray";
    investbtn.style.color="darkgray";
    account.style.display="none";
    invest.style.display="none";
    withdraw.style.display="none";
    deposit.style.display="inline";
});