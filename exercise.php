<?php
	var N = 10;
	var A[] = array();
    var k = 0;
    var sum = 0;


    for(i=1;i<=N;i++) {
    	get(A[i]);
    }
    i = 1;
    while (i < N) do {
    	if((A[i] mod 2) == 0) {
    		sum = sum + A[i];
    		k++;
    	}
    	i = i + 2;
    } 
   if(k != 0) {
   		sum / k;
   		print(sum / k);
   }
   else {
   		print("Нет четных элементов, стоящих на нечетных местах");
   }
?>