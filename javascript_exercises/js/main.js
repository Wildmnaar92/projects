// ex 1


var x = Math.max(1,2);
console.log("Ex 1: Larger number is "+x);

//ex2
var x = Math.max(1,2,3);
console.log("Ex 2: Larger number is "+x);

//ex 3
var x = isVowel("X");
console.log("Ex 3: Vowel? : "+x);


var x = pigLatin("hello");
console.log("Ex 4: Piglatin word is : "+x);


var arr = [1,2,3,4];
var x = sum(arr);
console.log("Ex 5: Sum is : "+x);

var x = multiply(arr);
console.log("Ex 5: Product is : "+x);

var x = reverseString("Hello there");
console.log("Ex 6: Reversed string is : "+x);

var x = randomize();
console.log("Ex 7: Largest random number is : "+x);

var arr = ["hello","monkey","California","smiles","still"];
var x = longestWord(arr);
console.log("Ex 8: Longest word length is: "+x);

var i = 5;
var x = filterLongWords(i,arr);
console.log("Ex 9: Words Longer than " + i + "  in length: "+x);

var x = charFreq("abcdbcdcdd");
var y = JSON.stringify(x);
console.log("Ex 10: Frequency Listing: "+y);

function isVowel (x) {

 x = x.toUpperCase();
        if (x == "A" || x == "E" || x == "I" || x == "O" || x == "U" ) {
            return true;
        }
        else {
            return false;
        }
   
}

function pigLatin(word) {
 
    
var res = word.split("");
var firstLetter = res.shift();
res = res.join("");
firstLetter = firstLetter + "ay";
var finalArrayWord = res + firstLetter;
var finalWord = finalArrayWord.toString();
    
return (finalWord);
}


function sum(arr) {
var sum = 0;
for (var i = 0; i < arr.length; i++)
     sum+=arr[i];
    
    return sum;
}


function multiply(arr) {
var sum = 1;
for (var i = 0; i < arr.length; i++)
     sum*= arr[i];
    
    return sum;
}


function reverseString(str) {
   
    return str.split("").reverse().join("");
    
    
}

 function randomize () {
     
   
     var randomNumer1 = Math.floor((Math.random() * 100 +1 ));  
     var randomNumber2 = Math.floor((Math.random() * 100 +1 ));
     var randomNumber3 = Math.floor((Math.random() * 100 +1 ));
     
     return Math.max(randomNumer1,randomNumber2,randomNumber3);
 }



function longestWord (arr) {
    var longest = 1;
    for (var i = 0; i < arr.length; i++) {
     var newLength = arr[i].length;
        if (newLength > longest) {
            longest = newLength;
        }

    }
    
    return longest;
    
}

function filterLongWords (max,arr) {
  var okWords = [];  
    for (var i = 0; i < arr.length; i++) {
        if (arr[i].length > max)
            okWords[i] = arr[i];
    }
    return okWords;
    
}


function charFreq (str) {
    
    
    
    str = str.toLowerCase();
    arr = str.split("").sort();
    var arrLetters = [];
    var arrFrequency = [];
    var frequency = 1;
    var j = 0;
    var oldLetter = null;
   
    for (var i = 0; i <= arr.length; i++) {
       
        letter = arr[i];
        if (letter == oldLetter){
            frequency++;
        oldLetter = letter;
        }
        else if (i == 0)
            oldLetter = letter;
        else {
            arrLetters[j] = oldLetter;
            arrFrequency[j] = frequency;
            oldLetter = letter;
            frequency = 1;
            j=j+1;
            
        }
    
    }
    
   
   
       
    var letterFrequency = {word:str,letter:arrLetters, number:arrFrequency}; 
     return letterFrequency;
}