let angka = [1,2,3,4,5];
angka.forEach(function (index) {
    console.log(index);
})

angka.forEach(index =>console.log("iterasi nya - " +index))


for (let i = 1; i <= 3; i++) {
    for (let j = 1; j <= 3; j++) {
        console.log(`Nilai i: ${i}, Nilai j: ${j}`);
    }
}

