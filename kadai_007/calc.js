let num = 15;

switch(true){
  case (num % 3=== 0 && num % 5 === 0): //num÷3=0　かつ　num÷5=0　→trueならconsole.logを表示する
    console.log('3と5の倍数です')
    break;
  case (num % 3 === 0):
    console.log('3の倍数です')
    break;
  case (num % 5 === 0):
    console.log('5の倍数です')
    break;
  default:
    console.log(num) //どれにも当てはまらないならnumをそのまま表示する
    break;  
}