function juicePlant(fruit) {
    console.log(fruit + "を受け取りました。ジュースにして返します");
    return fruit + "ジュース";
}

let orangeJuice = juicePlant("みかん");
console.log(orangeJuice + "が届きました");