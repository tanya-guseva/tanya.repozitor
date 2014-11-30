<?php
/*Получить среднее арифметическое всех чётных элементов массива,
стоящих на нечётных местах*/
  var str=" ";
  var p;
	var A[] = array();
  var k = 0;
  var sum = 0;

  for(i=1;i<=A.count();i++) {
    if(get(str)=="stop"){
      break;
    }
    else{
    	get(A[i]);
    }  
  }
  p = 1;
  while (p <= A.count()) do {
    if((A[p] mod 2) == 0) {
    	sum = sum + A[p];
    	k++;
    }
    p = p + 2;
  } 
  if(k != 0) {
   	print(sum / k);
  }
  else {
   		print("Нет четных элементов, стоящих на нечетных местах");
  }
?>


