var rentPerPiece = 0;

function changeGame() {
    var gameName = document.getElementById('name').value;
    
    if(gameName == 0){
        rentPerPiece = 0;
    } else if(gameName == "pubg") {
        rentPerPiece = 1500;
    } else if(gameName == "fortnite") {
        rentPerPiece = 1000;
    } else if(gameName == "cod") {
        rentPerPiece = 2000;
    } else if(gameName == "gta") {
        rentPerPiece = 2500;
    }
    document.getElementById('rent').textContent = "₹ " + rentPerPiece;
}

function generateBill() {
    quantity = document.getElementById('quantity').value;

    billAmount = quantity * rentPerPiece;
    document.getElementById('bill-text').textContent = "TOTAL BILL = ₹ " + billAmount;
    return false;
}