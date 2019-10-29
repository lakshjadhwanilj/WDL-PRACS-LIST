function percent() {
    
    var maths = document.getElementById('maths').value;
    var physics = document.getElementById('physics').value;
    var chemistry = document.getElementById('chemistry').value;

    totalMarks = Number(maths)  + Number(physics) + Number(chemistry);
    percentage = (totalMarks / 300) * 100;

    document.getElementById('result').textContent = "Percentage = " + percentage;

    return false;

}