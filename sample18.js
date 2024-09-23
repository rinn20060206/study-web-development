function isConsecutive(arr) {
    if(arr.length === 0) return false;

    for (let i = 1; i < arr.length; i++) {
        if (arr[i] !== arr[i - 1] +1) {
            return false;
        }
        return true;
    }
}

console.log(isConsecutive([1, 2, 3, 4, 5]));
console.log(isConsecutive([5, 1, 3, 2, 1]))