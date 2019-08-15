//break 

var dias = [25, 21, 20, 40, 85];

for (var i=0; i<dias.length;i++){
    if (dias[i]==20){

    }
}

//2
for (var u = 1; u < 100; u++) {
    if (u == 50) {
        break;
    }
    document.write(`<p>${u}</p>`);
}

//Continue


for (var u=1; u<100; u++){
    if (u%2==0){
        continue;
    }
    document.write(`<p>${u}</p>`);
}