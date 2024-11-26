let num = 15;

if (num % 3 === 0 && num % 5 === 0) { // numが3と5の倍数であるかをチェック
    console.log('3と5の倍数です');
  }
else if (num % 3 === 0) { // numが3の倍数であるかをチェック
    console.log('3の倍数です');
  }
else if (num % 5 === 0) { // numが5の倍数であるかをチェック
    console.log('5の倍数です');
  }
else { // どれにも当てはまらない場合
    console.log(num); // numをそのまま表示
    }