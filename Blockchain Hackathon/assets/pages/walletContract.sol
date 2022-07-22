pragma solidity 0.8.7;

contract transaction{
    address public sender;
    mapping (address => uint) public balance;

    constructor() public{
        sender = msg.sender;
         balance[msg.sender] = 50;
    }

    function walletBalance()  view public returns(uint){
        return balance[msg.sender] ;
    }
    
    function send(uint amount)public{
        // balance = balance + amount;
        // return balance;
        balance[msg.sender] = balance[msg.sender] - amount;
    }

    function withdraw(uint amount) public{
        // balance = balance - amount;
        // // return balance; 
    balance[msg.sender] = balance[msg.sender] - amount;

    }
}

