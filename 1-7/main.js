class Taiyaki {
    constructor(content) {
        this.content = content;
    }
}

let anko = new Taiyaki("あんこ");
let cream = new Taiyaki("クリーム");
let cheese = new Taiyaki("チーズ");

console.log("中身は" + anko.content + "です");
console.log("中身は" + cream.content + "です");
console.log("中身は" + cheese.content + "です");