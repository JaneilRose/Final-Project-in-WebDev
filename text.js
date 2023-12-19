function scan() {
    const bar = parseFloat(document.getElementById("studentID"). value);

    switch(bar){
    case 24228405:
        document.getElementById("NAME").textContent = "Adrian Matthew Cortes";
        document.getElementById("AGE").textContent = "18";
        document.getElementById("SEX").textContent = "Male";
        document.getElementById("COURSE").textContent = "BSIT 1G";
        document.getElementById("NAME2").textContent = "Adrian Matthew Cortes";
        document.getElementById("COURSE2").textContent = "BSIT 1G";
        break;
    case 24228785:
        document.getElementById("NAME").textContent = "Janeil Rose Formoso";
        document.getElementById("AGE").textContent = "18";
        document.getElementById("SEX").textContent = "Female";
        document.getElementById("COURSE").textContent = "BSIT 1G";
        document.getElementById("NAME2").textContent = "Janeil Rose";
        document.getElementById("COURSE2").textContent = "BSIT 1G";
        break;

    default:
        document.getElementById("NAME").textContent = "Not Found";
        document.getElementById("AGE").textContent = "Not Found";
        document.getElementById("SEX").textContent = "Not Found";
        document.getElementById("COURSE").textContent = "Not Found";
        break;
        
    }

}

function passed() {
    var grade = document.getElementById("prelim").value;
    var resultElement = document.getElementById("PRELIM");
    if (grade <= 3.0){
        resultElement.textContent = "Passed";
        resultElement.style.color = 'Green'
     }
     else {
         resultElement.textContent = "Failed";
         resultElement.style.color = 'Red'
     }
   
    var grade = document.getElementById("mid").value;
    var resultElement = document.getElementById("MID");
    if (grade <= 3.0){
        resultElement.textContent = "Passed";
        resultElement.style.color = 'Green'
     }
     else {
         resultElement.textContent = "Failed";
         resultElement.style.color = 'Red'
     }
   
    var grade = document.getElementById("semi").value;
    var resultElement = document.getElementById("SEMI");
    if (grade <= 3.0){
        resultElement.textContent = "Passed";
        resultElement.style.color = 'Green' 
     }
     else {
         resultElement.textContent = "Failed";
         resultElement.style.color = 'Red'
     }
   
    var grade = document.getElementById("final").value;
    var resultElement = document.getElementById("FINAL");

    if (grade <= 3.0){
       resultElement.textContent = "Passed";
       resultElement.style.color = 'Green'
       
    }
    else {
        resultElement.textContent = "Failed";
        resultElement.style.color = 'Red'
    }
   
}
function total() {
    const prelim = parseFloat(document.getElementById("prelim").value)
    const mid = parseFloat(document.getElementById("mid").value)
    const semi = parseFloat(document.getElementById("semi").value)
    const final = parseFloat(document.getElementById("final").value)

    const total1 = prelim + mid;
    const total2 = semi + final;
    const total3 = total1 / 2;
    const total4 = total2 / 2;
    const total5= total3 + total4;
    const firstsem = total5 / 2;

    
    if (firstsem <= 3.0){
        document.getElementById("totalgrade").textContent = `${firstsem} passed`;         
        document.getElementById("totalgrade").style.color = 'Green'
     }
     else {
        document.getElementById("totalgrade").textContent = `${firstsem} failed`;
        document.getElementById("totalgrade").style.color = 'Red'
     }
    
}