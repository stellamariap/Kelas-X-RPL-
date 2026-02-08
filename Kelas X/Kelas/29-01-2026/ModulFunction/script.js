// Function Declaration 
// function declaration merupakan cara mendefinisikan fungsi dengan kata kunci function diikuti nama fungsi dan parameter (jika ada) 

function sapa() {
    console.log("Halo");
}

function tambah(a, b) {
    return a + b; 
}

function kurang(a, b) {
    return a - b; 
} 

function kali(a, b) {
    return a * b; 
}

function bagi(a, b) {
    return a / b; 
}

sapa();
console.log(tambah(5, 3));
console.log(kurang(10, 4));
console.log(kali(6, 7));
console.log(bagi(20, 5));

// Function Expression
// function expression merupakan cara mendefiniskan fungsi dengan menyimpan fungsi ke dalam variabel

const sapa1 = function () {
    console.log("Belajar javascript itu seru");
}; 

const tambah1 = function (a, b) {
    return a + b; 
};

const angkaGenap = function (n) {
    return n % 2 === 0;
};

const LPersegi = function (s) {
    return s * s; 
};

const pajak = function (h) {
    return h * 0.1; 
}; 

sapa1();
console.log(tambah(7, 8));
console.log(angkaGenap(10));
console.log(LPersegi(4));
console.log(pajak(200000));

// Arrow Function 
// arrow function merupakan cara mendefinisikan fungsi dengan sintaks yang lebih singkat menggunakan tanda panah (=>)

const sapa2 = () => {
    console.log("Belajar function JS");
}; 

const tambah2 = (a, b) => a + b; 
const kuadrat = (x) => x * x; 
const diskon = (h) => h * 0.1; 
const cekUmur = (u) => u >= 17; 
const luasSegitiga = (a, t) => 0.5 * a * t; 

sapa2();
console.log(tambah2(12, 15));
console.log(kuadrat(5));
console.log(diskon(500000));
console.log(cekUmur(20));
console.log(luasSegitiga(6, 8)); 

// Anonymous Function 
// anonymous function merupakan fungsi yang tidak memiliki nama dan biasanya digunakan sebagai argumen dalam fungsi lain

setTimeout(function () {
    console.log("Ini adalah anonymous function"); 
}, 2000); 

document.getElementById("btn"); 
btn.onclick = function () {
    console.log("Tombol diklik"); 
}; 

[1, 2, 3, 4, 5, 6].forEach(function (angka) {
    console.log(angka); 
}); 

document.addEventListener("click", function () {
    console.log("Halaman diklik");
}); 

(function () {
    console.log("Ini adalah IIFE (Immediately Invoked Function Expression)");
})(); 

// Callback Function
// callback function merupakan fungsi yang diteruskan sebagai argumen ke fungsi lain dan dipanggil di dalam fungsi tersebut

function prosesData(data, callback) {
    console.log("Mmeproses data: " + data); 
    callback();
}

prosesData("Data 1", selesai);

function selesai() {
    console.log("Proses selesai");     
}

// IIFE (Immediately Invoked Function Expression)
// IIFE merupakan fungsi yang langsung dipanggil setelah didefinisikan 

(function () {
    console.log("Ini adalah IIFE");
})();
(() => {
    console.log("Ini adalah IIFE dengan arrow function"); 
})(); 

// Konstruktur Function
// konstruktur function merupakan cara mendefinisikan fungsi menggunakan objek function

function User(n) {
    this.nama = n; 
}

const user1 = new User ("Andi");
const User2 = new User ("Budi"); 
console.log(user1.nama);
console.log(User2.nama); 

// Async Function 
// async function adalah fungsi yang menangani operasi asynchronous menggunakan kata kunci async dan await 

async function getData() {
    return "Data berhasil diambil"; 
}

const cek = async () => "Data dari async arrow function"; 
