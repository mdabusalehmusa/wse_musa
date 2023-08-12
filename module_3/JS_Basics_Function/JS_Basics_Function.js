function sumAdd(a,b){
    var add1 = a;
    var add2 = b;
if(add1<=50 && add2 <= 50 && add1 != add2){
    return(add1+add2)
}else if(add1 >=50 && add2 >=50){
    return("You Enter a small velu. please give me proper velu")
}else if(add1 == add2){
    return("This is a same valu. Please enter 2 defurent velu")
}else{
    return("undefine velu")
}
}

console.log(sumAdd(30,30))