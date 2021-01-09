// 問１
let numbers = [2, 5, 12, 13, 15, 18, 22];

function isEven(num) {
    for(let i = 1; i <= numbers.length; i++) {
        // console.log(num[i]);
        if(num[i] % 2 == 0) {
            console.log(num[i] + "は偶数です");
        }
    }
}
isEven(numbers);


// 問２
class Car {
    constructor(gass, number) {
        this.gass = gass;
        this.number = number;
    }
    getNumGas() {
        console.log("ガソリンは" + this.gass + "です");
        console.log("ナンバーは" + this.number + "です");
    }
}

let corolla = new Car("レギュラー", 6303);
corolla.getNumGas();