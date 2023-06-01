function hitungGrade() {
    nilai = parseInt(document.getElementById("nilai").value);
    let grade = "";
    if (nilai >= 90) {
        grade = "A";
    } else if (nilai >= 80) {
        grade = "B";
    } else if (nilai >= 70) {
        grade = "C";
    } else if (nilai >= 60) {
        grade = "D";
    } else {
        grade = "E";
    }
    document.getElementById('hasil').innerHTML = "Grade : " + grade;
}

function ubahText(){
    document.getElementById("tombol").innerHTML = "Halo YAL"
}

var angka = 10;

function mundur(){
    document.getElementById("angka").innerHTML = angka=angka-1;
}

function maju(){
    document.getElementById("angka").innerHTML = angka=angka+1;
}