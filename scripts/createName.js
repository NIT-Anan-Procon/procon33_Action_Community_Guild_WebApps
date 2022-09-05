function getName() {
    var element1 = getElement(1, (Math.floor(Math.random() * 11)));
    var element2 = getElement(2, (Math.floor(Math.random() * 11)));
    var element3 = getElement(3, (Math.floor(Math.random() * 11)));
    return element1 + element2 + element3;
}
function getElement(n,element) {
    const array1 = ["アリ","アケ","キン","ジン","エゾ","ニュ","ニュ","ニュ","ニュ","ニュ","ニュ"];
    const array2 = ["アリ","アナ","スト","グン","スト","ニュ","ニュ","ニュ","ニュ","ニュ","ニュ"];
    const array3 = ["アリン","グランデ","炭治郎","柴三郎","テレス","ニュ","ニュ","ニュ","ニュ","ニュ","ニュ"];
    switch(n) {
        case 1:
            return array1[element];
            break;
        case 2:
            return array2[element];
            break;
        case 3:
            return array3[element];
            break;
        default:
            return 0;
    }
}